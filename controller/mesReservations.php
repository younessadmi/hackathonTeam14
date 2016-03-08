<?php
class mesReservationsController extends baseController {

    public function index(){        
        $this->registry->template->show('index');
    }
}
?>