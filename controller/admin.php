<?php
class adminController extends baseController {

    protected $registry;

    function __construct($registry) {
        $this->registry = $registry;
        $this->registry->template->admin = true;
        $_SESSION['last_order'] = $this->registry->db->lastOrder();
        $_SESSION['last_order'] = $_SESSION['last_order'][0];
    }

    public function index(){        
//        $this->registry->template->show('index');
        header('Location: '.BASE_URL.'admin/customers');
    }

    public function rooms(){        
        if(isset($_GET['customer'])){
            $this->registry->template->rooms = $this->registry->db->getCustomerRooms($_GET['customer']);
            $this->registry->template->customer = $this->registry->db->getCustomer($_GET["customer"]);
        }else
            $this->registry->template->rooms = $this->registry->db->getRooms();
        $this->registry->template->show('rooms/index');
    }

    public function booking(){    
        if(isset($_GET['customer'])){
            $this->registry->template->bookings = $this->registry->db->getCustomerBookings($_GET['customer']);
            $this->registry->template->customer = $this->registry->db->getCustomer($_GET['customer']);
        }else
            $this->registry->template->bookings = $this->registry->db->getBookings();
        $this->registry->template->show('booking/index');
    }

    public function customers(){        
        $this->registry->template->customers = $this->registry->db->getCustomers();
        $this->registry->template->show('customers/index');
    }

    public function invoices($args){
        if(isset($args[0]) && !empty($args[0])){
            $bill = $this->registry->db->getBill($args[0]);
            $this->registry->template->bill = $bill;
            $this->registry->template->customer = $this->registry->db->getCustomer($bill['client']['id']);
            $this->registry->template->show('invoices/show');
        }else{
            if(isset($_GET['customer'])){
                $this->registry->template->invoices = $this->registry->db->getCustomerInvoices($_GET['customer']);
                $this->registry->template->customer = $this->registry->db->getCustomer($_GET['customer']);
            }else
                $this->registry->template->invoices = $this->registry->db->getInvoices();
            $this->registry->template->show('invoices/index');
        }
    }

    public function checkOrder(){
        $json_data = [];
        $json_data['newOrders'] = $this->registry->db->newOrdersFromDate($_POST['date']);
        if(count($json_data['newOrders']) > 0){
            $_SESSION['last_order'] = $this->registry->db->lastOrder();
            $_SESSION['last_order'] = $_SESSION['last_order'][0];
        }
        $json_data['last_order'] = $_SESSION['last_order'];

        echo json_encode($json_data);
    }
}
?>