<?php
    include_once '../model/Estado/EstadoModel.php';
    class EstadoController{

        public function getInsert(){

        $obj = new EstadoModel();
        $sql = "SELECT * FROM t_noticia";
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
    
            $sql="SELECT * FROM t_estado";
            $estados = $obj->consult($sql);
    
            include_once '../view/Estado/consult.php';
        }

        public function getDelete(){
            $obj=new EstadoModel();

            $id_estado=$_GET['id_estado'];

            $sql="SELECT * FROM t_estado WHERE id_estado=$id_estado";
            $estados=$obj->consult($sql);

            include_once '../view/Estado/delete.php';

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
                dd($sql);
            }
    
    
        }

        public function getUpdate(){

            $obj=new EstadoModel();
            $id_estado=$_GET['id_estado'];

            $sql="SELECT * FROM t_estado WHERE id_estado=$id_estado";
            $estados=$obj->consult($sql);

            include_once '../view/Estado/update.php';


        }

        public function postUpdate() {

            $obj=new EstadoModel();
            $id_estado=$_POST['id_estado'];
            $desc_estado=$_POST['desc_estado'];

            $sql="UPDATE t_estado SET desc_estado='$desc_estado' WHERE id_estado=$id_estado";
            $ejecutar=$obj->update($sql);
    
           if ($ejecutar) {
            $_SESSION['mensaje']="Se editó la categoria <b>$desc_estado</b> exitosamente";
               redirect(getUrl("Estado","Estado","consult"));
           }else{
               echo "Ops, ha ocurrido un error";
           }
        }


        

        




    }

?>