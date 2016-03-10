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
    
    public function customers(){        
        $this->registry->template->show('customers/index');
    }
    
    public function bills(){        
        $this->registry->template->show('bills/index');
    }
}
?>