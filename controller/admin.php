<?php
class adminController extends baseController {

    protected $registry;

    function __construct($registry) {
        $this->registry = $registry;
        $this->registry->template->admin = true;
    }
    
    public function index(){        
        $this->registry->template->show('index');
    }
    
    public function rooms(){        
        $this->registry->template->show('rooms/index');
    }
    
    public function booking(){        
        $this->registry->template->show('booking/index');
    }
    
    public function customers(){        
        $this->registry->template->customers = $this->registry->db->getCustomers();
        $this->registry->template->show('customers/index');
    }
    
    public function invoices(){
        $this->registry->template->show('invoices/index');
    }
}
?>