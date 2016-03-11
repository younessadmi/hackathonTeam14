<?php
class DB {
    private static $instance = null;

    private $registry;
    private $connexion = null;
    public static function getInstance($arg) {
        if (!self::$instance instanceof self) {
            self::$instance = new self($arg);
        }
        return self::$instance;
    }
    public function __clone() {
        trigger_error('Clone is not allowed.', E_USER_ERROR);
    }
    public function __wakeup() {
        trigger_error('Deserializing is not allowed.', E_USER_ERROR);
    }
    private function __construct($registry) {
        $this->registry = $registry;
        if(USING_A_DB == true){
            try
            {
                $this->connexion = new PDO(DBTYPE.":host=".DBHOST.";dbname=".DBNAME.";charset=utf8", DBUSER, DBPASSWORD);
            }catch(PDOException $e)
            {
                print "Error new PDO: ".$e->getMessage()."<br/>";
                die();
            }
        }
    }

    public function orderProduct($productName, $idClient, $qte){
        $query = $this->connexion->prepare('
        INSERT INTO orderProduct(id_product, id_client, quantity_ordered) 
        SELECT (SELECT id FROM product WHERE name=? ), ?, ?
        ');

        $query2 = $this->connexion->prepare('
        UPDATE product 
        SET actual_stock = actual_stock - ? 
        WHERE name=?
        ');

        if($query->execute([$productName, $idClient, $qte])){
            if($query2->execute([$qte, $productName])){
                return true;
            }else return $query->errorInfo();
        }else return $query->errorInfo();
    }
    
    public function getCustomers(){
        $query = $this->connexion->prepare('SELECT * FROM client');
        if($result = $query->execute()){
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }else return $query->errorInfo();
    }
    
    public function getBill($id){
        $return = [];
        $bill = $this->connexion->prepare('
            SELECT *
            FROM bill
            WHERE id = ?
        ');
        $resa = $this->connexion->prepare('
            SELECT *
            FROM reservation
            WHERE id = ?
        ');
        $orders = $this->connexion->prepare('
            SELECT *
            FROM orderProduct
            WHERE order_date BETWEEN ? AND ?
        ');
        $products = $this->connexion->prepare('
            SELECT *
            FROM product
        ');
        $client = $this->connexion->prepare('
            SELECT *
            FROM client
            WHERE id = ?
        ');


        if($bill->execute([$id])){
            $return['bill'] = $bill->fetchAll(PDO::FETCH_ASSOC);
            if(!empty($return['bill'])){
                $return['bill'] = $return['bill'][0];
                if($resa->execute([$return['bill']['id_reservation']])){
                    if($client->execute([$return['bill']['id_client']])){
                        $return['client'] = $client->fetchAll(PDO::FETCH_ASSOC);
                        $return['client'] = $return['client'][0];
                        $return['resa'] = $resa->fetchAll(PDO::FETCH_ASSOC);
                        $return['resa'] = $return['resa'][0];
                        if($orders->execute([$return['resa']['date_start'], $return['resa']['date_end']])){
                            $return['orders'] = $orders->fetchAll(PDO::FETCH_ASSOC);
                            if(!empty($return['orders'])){
                                if($products->execute()){
                                    while($product = $products->fetch(PDO::FETCH_ASSOC)){
                                        $return['products'][$product['id']] = $product;
                                    }
                                }else return false;
                            }
                        }else return false;
                    }else return false;
                }else return false;
            }
        }else return false;

        return $return;
    }
}