<?php
class adminController extends baseController {

    public function index(){        
        $this->registry->template->show('index');
    }
}
?>