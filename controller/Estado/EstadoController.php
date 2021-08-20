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
                $_SESSION['mensaje']="Se registró el estado <b>$desc_estado</b>exitosamente";
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






    }

?>