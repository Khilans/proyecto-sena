<?php
    include_once '../model/Configuracion/ConfiguracionModel.php';
    class ConfiguracionController{


        public function getInsert(){
            $obj = new ConfiguracionModel();
            $sql = "SELECT * FROM t_usuario";
            $usuarios=$obj->consult($sql);

            include_once  '../view/Configuracion/insert.php';
        }

     /*    public function datos(){
            $obj = new ConfiguracionModel();
            $sql = "SELECT * FROM t_configuracion";
            $configuracion = $obj->consult($sql);

            include_once  '../view/Configuracion/insert.php';
        } */

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
            $configuracion=$obj->consult($sql);

            include_once '../view/Configuracion/consult.php';
        }
        public function getUpdateModal(){
            $obj = new ConfiguracionModel();
          
            
            $id_config=$_GET['id'];
            $sql = "SELECT * FROM t_configuracion ";
            $configuracion = $obj->consult($sql);
       

        include_once '../view/Configuracion/ModalUpdate.php';

        }

        public function postUpdate(){

            $obj=new ConfiguracionModel();
            $id_config=$_POST['id_config'];
            $desc_config=$_POST['desc_config'];
            $dir_config=$_POST['dir_config'];
            $tel_config=$_POST['tel_config'];

            $sql="UPDATE t_configuracion SET desc_config='$desc_config', dir_config='$dir_config', tel_config=$tel_config WHERE id_config=$id_config";
            $ejecutar=$obj->update($sql);
    
           if ($ejecutar) {
            $_SESSION['mensaje']="Se editó  <b>$desc_config</b> exitosamente";
               redirect(getUrl("Configuracion","Configuracion","consult"));
           }else{
               echo "Ops, ha ocurrido un error";
               dd($sql);
           }
        }
        
        /*  public function getModalDeleteCon(){

            $obj = new ConfiguracionModel();

            $sql = "SELECT * FROM t_configuracion";
            $configuracion=$obj->consult($sql);

            include_once '../view/Configuracion/ModalDelete.php';
        }

        public function postDelete(){
            $obj=new ConfiguracionModel();

            $id_config=$_POST['id_config'];
            $desc_config=$_POST['desc_config'];

            $sql="DELETE FROM t_configuracion WHERE id_config=$id_config";
            $ejecutar=$obj->update($sql);

            if ($ejecutar){
                $_SESSION['mensaje']="Se eliminó  <b>$desc_config</b> exitosamente";
                redirect(getUrl("Configuracion","Configuracion","consult"));
            } else {
                echo "Ops,error al eliminar";
            }
        }  */
        
    }
?>