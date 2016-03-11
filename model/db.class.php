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
                $this->connexion = new PDO(DBTYPE.":host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASSWORD);
            }catch(PDOException $e)
            {
                print "Error new PDO: ".$e->getMessage()."<br/>";
                die();
            }
        }
    }

    public function orderProduct($productName, $idClient, $qte){
        $query = $this->connexion->prepare('
        INSERT INTO orderProduct(id_product, id_client) 
        SELECT (SELECT id FROM product WHERE name=? ), ?
        ');

        $query2 = $this->connexion->prepare('
        UPDATE product 
        SET actual_stock = actual_stock - ? 
        WHERE name=?
        ');

        if($query->execute([$productName, $idClient])){
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
}