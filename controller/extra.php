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

    public function orderProduct(){
        $json_data = [];
        if(($return = $this->registry->db->orderProduct($_POST['product'], $_POST['idclient'], $_POST['qte'])) === true){
            $json_data['success'] = true;
        }else{
            $json_data['error'] = $return;
            $json_data['$_post'] = $_POST;
        }
        echo json_encode($json_data);
    }
}
?>