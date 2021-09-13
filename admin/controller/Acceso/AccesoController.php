<?php
    include_once '../model/Acceso/AccesoModel.php';

    class AccesoController{

        public function logout(){
            session_destroy();
            redirect("../../web/login.php");
        }
    }
?>
