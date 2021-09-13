<?php
    include_once '../model/Tnoticia/TnoticiaModel.php';
    
    class TnoticiaController{

        public function getInsert(){

        $obj = new TnoticiaModel();
        $sql = "SELECT * FROM t_noticia";
        $noticias = $obj->consult($sql);

        include_once  '../view/Tnoticia/insert.php';

        }

        public function postInsert()
        {
            $obj=new TnoticiaModel();
    
            $desc_tipo_noti = $_POST['desc_tipo_noti'];
            $id=$obj->autoincrement("t_tiponoticia","cod_tipo_noti");
            
           
            $sql="INSERT INTO t_tiponoticia VALUES($id,'$desc_tipo_noti')";
           
            $ejecutar=$obj->update($sql);
    
            if ($ejecutar) {
                $_SESSION['mensaje']="Se registró el tipo de noticia: <b>$desc_tipo_noti</b> exitosamente";
                redirect(getUrl("Tnoticia","Tnoticia","consult"));
            } else {
                echo "Ops, ha ocurrido un error";
            }
        }
    
        public function consult()
        {
            $obj = new TnoticiaModel();
    
            $sql="SELECT * FROM t_tiponoticia";
            $tipo_noticias = $obj->consult($sql);
    
            include_once '../view/Tnoticia/consult.php';
            
        }

        public function getDelete(){
            $obj=new TnoticiaModel();

            $cod_tipo_noti=$_GET['cod_tipo_noti'];

            $sql="SELECT * FROM t_tiponoticia WHERE cod_tipo_noti=$cod_tipo_noti";
            $tipo_noticias=$obj->consult($sql);

            include_once '../view/Tnoticia/delete.php';

        } 

        public function postDelete(){

            $obj=new TnoticiaModel();
    
            $cod_tipo_noti=$_POST['cod_tipo_noti'];
            $desc_tipo_noti=$_POST['desc_tipo_noti'];
    
            $sql="DELETE FROM t_tiponoticia WHERE cod_tipo_noti=$cod_tipo_noti";
            $ejecutar=$obj->update($sql);

            if($ejecutar) {
                $_SESSION['mensaje']="Se eliminó el tipo de noticia <b>$desc_tipo_noti</b> exitosamente";
                redirect(getUrl("Tnoticia","Tnoticia","consult"));
            }else{
                echo "Ops, ha ocurrido un error";
                
            }
    
    
        }

        public function getUpdate(){

            $obj=new TnoticiaModel();

            $cod_tipo_noti=$_GET['cod_tipo_noti'];

            $sql="SELECT * FROM t_tiponoticia WHERE cod_tipo_noti=$cod_tipo_noti";
            $tipo_noticias=$obj->consult($sql);

            include_once '../view/Tnoticia/update.php';

        }

        public function postUpdate() {

            $obj=new TnoticiaModel();
            $cod_tipo_noti=$_POST['cod_tipo_noti'];
            $desc_tipo_noti=$_POST['desc_tipo_noti'];

            $sql="UPDATE t_tiponoticia SET desc_tipo_noti='$desc_tipo_noti' WHERE cod_tipo_noti=$cod_tipo_noti";
            $ejecutar=$obj->update($sql);
    
           if ($ejecutar) {
            $_SESSION['mensaje']="Se editó el tipo de noticia <b>$desc_tipo_noti</b> exitosamente";
               redirect(getUrl("Tnoticia","Tnoticia","consult"));
           }else{
               echo "Ops, ha ocurrido un error";
               dd($sql);
           }
        }


    }