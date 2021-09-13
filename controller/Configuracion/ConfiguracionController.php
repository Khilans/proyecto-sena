<?php
    include_once '../model/Configuracion/ConfiguracionModel.php';
    class ConfiguracionController{


<<<<<<< HEAD
        public function getInsert(){
            $obj = new ConfiguracionModel();
            $sql = "SELECT * FROM t_usuario";
            $usuarios = $obj->consult($sql);
=======
        
        public function datos(){
            
        }
>>>>>>> ca72cc53c5ce3f12540dc830b990e1ab63164e3e

            $sql = "SELECT * FROM t_configuracion";
            $configuracion = $obj->consult($sql);

            include_once  '../view/Configuracion/insert.php';
 
        }

        public function postInsert(){
            $obj = new ConfiguracionModel();

            
            $usu_id=$_SESSION['user_id'];
            $desc_config=$_POST['desc_config'];
            $correo_config = $_POST['correo_config'];
            $dir_config = $_POST['dir_config'];
            $tel_config = $_POST['tel_config'];
             
            
            $id = $obj->autoincrement("t_configuracion", "id_config");

            $sql = "INSERT INTO t_configuracion VALUES($id, $usu_id , '$desc_config', '$correo_config', '$dir_config' , $tel_config)";
       
            $ejecutar = $obj->update($sql);

            if ($ejecutar) {
                $_SESSION['mensaje'] = "Sirve<b></b> exitosamente";
                redirect(getUrl("Configuracion", "Configuracion", "consult"));
            } else {
                echo "Ops, error ";
            }
        }

        public function consult(){
            $obj = new ConfiguracionModel();

            $sql = "SELECT tc.id_config, tc.desc_config, tc.correo_config, tc.dir_config , tc.tel_config  FROM t_configuracion tc ";
            $configuracion = $obj->consult($sql);

            include_once '../view/Configuracion/consult.php';
        }
        public function getUpdateModal(){

        }

        public function postUpdateModal(){

        }

        public function getDeleteModal(){

        }

        public function postDeleteModal(){

            
        }

        public function view(){
            
        }
    }
?>