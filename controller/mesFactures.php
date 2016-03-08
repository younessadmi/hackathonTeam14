<?php
class mesFacturesController extends baseController {

    public function index(){        
        $this->registry->template->show('index');
    }
}
?>