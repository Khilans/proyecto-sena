<?php

    include_once '../model/Pqrs/PqrsModel.php';

    class PqrsController {
        
        public function consult(){
            $obj=new PqrsModel;

        }

        public function getSend(){
            $obj=new PqrsModel;
            $sql="SELECT * FROM t_pqrsftipo";
            $tipoPQRSF=$obj->consult($sql);
            
            include_once '../view/Pqrs/send.php';
        }

        public function postSend(){

        }
    }

?>