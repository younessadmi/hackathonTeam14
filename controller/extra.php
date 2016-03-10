<?php
class extraController extends baseController {

    public function index(){        
        $this->registry->template->show('index');
    }
}
?>