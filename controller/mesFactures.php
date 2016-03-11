<?php
class mesFacturesController extends baseController {

    public function index(){        
        $this->registry->template->show('index');
    }

    public function exportPDF($args){
        if(isset($args[0]) && !empty($args[0])){
            $bill = $this->registry->db->getBill($args[0]);
            if(!empty($bill['bill'])){
                $this->registry->template->bill = $bill;
                $this->registry->template->show('exportPDF');
            }else $this->registry->template->show('404', true);
        }
    }
}
?>