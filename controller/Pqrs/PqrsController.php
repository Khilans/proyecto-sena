<?php

    include_once '../model/Pqrs/PqrsModel.php';

    class PqrsController {
        
        public function consult(){
            $obj=new PqrsModel;

        }

        public function getSend(){
            $obj=new PqrsModel;


            include_once '../view/Pqrs/send.php';
        }

        public function postSend(){

        }
    }

?>