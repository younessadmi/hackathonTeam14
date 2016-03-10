<?php
class extraController extends baseController {

    public function index(){        
        $this->registry->template->show('index');
    }

    public function restauration(){        
        $this->registry->template->show('restauration');
    }

    public function hotel(){        
        $this->registry->template->show('hotel');
    }

    public function activites(){        
        $this->registry->template->show('activites');
    }

    public function pressing(){        
        $this->registry->template->show('pressing');
    }
}
?>