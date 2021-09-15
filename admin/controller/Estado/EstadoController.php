<?php
    include_once '../model/Estado/EstadoModel.php';
    
    class EstadoController{

        public function getInsertModal(){

        $obj = new EstadoModel();
        $sql = "SELECT * FROM t_estado";
        $estados = $obj->consult($sql);

        include_once  '../view/Estado/insert.php';

        }

        public function postInsert()
        {
            $obj=new EstadoModel();
    
            $desc_estado = $_POST['desc_estado'];
            $id=$obj->autoincrement("t_estado","id_estado");
            
           
            $sql="INSERT INTO t_estado VALUES($id,'$desc_estado')";
           
            $ejecutar=$obj->update($sql);
    
            if ($ejecutar) {
                $_SESSION['mensaje']="Se registró el estado <b>$desc_estado</b> exitosamente";
                redirect(getUrl("Estado","Estado","consult"));
            } else {
                echo "Ops, ha ocurrido un error";
            }
        }
    
        public function consult()
        {
            $obj = new EstadoModel();
    
            $sql="SELECT * FROM t_estado ";
            $estados = $obj->consult($sql);
    
            include_once '../view/Estado/consult.php';
        }

        public function getDeleteModal(){
            $obj=new EstadoModel();

            $id_estado=$_GET['id'];

            $sql="SELECT * FROM t_estado WHERE id_estado=$id_estado";
            $estados=$obj->consult($sql);

            include_once '../view/Estado/DeleteModal.php';

        } 

        public function postDelete(){

            $obj=new EstadoModel();
    
            $id_estado=$_POST['id_estado'];
             $desc_estado=$_POST['desc_estado'];
    
            $sql="DELETE FROM t_estado WHERE id_estado=$id_estado";
            $ejecutar=$obj->update($sql);

            if($ejecutar) {
                $_SESSION['mensaje']="Se eliminó el estado <b>$desc_estado</b> exitosamente";
                redirect(getUrl("Estado","Estado","consult"));
            }else{
                echo "Ops, ha ocurrido un error";
                
            }
    
    
        }

        public function getUpdateModal (){

            $obj=new EstadoModel();
            $id_estado=$_GET['id']; 
            $sql="SELECT * FROM t_estado WHERE id_estado=$id_estado";
            $estados=$obj->consult($sql);

            include_once '../view/Estado/UpdateModal.php';


        }

        public function postUpdate() {

            $obj=new EstadoModel();
            $id_estado=$_POST['id_estado'];
            $desc_estado=$_POST['desc_estado'];

            $sql="UPDATE t_estado SET desc_estado='$desc_estado' WHERE id_estado=$id_estado";
            $ejecutar=$obj->update($sql);
    
           if ($ejecutar) {
            $_SESSION['mensaje']="Se editó el estado <b>$desc_estado</b> exitosamente";
               redirect(getUrl("Estado","Estado","consult"));
           }else{
               echo "Ops, ha ocurrido un error";
           }
        }


        

        




    }

?>