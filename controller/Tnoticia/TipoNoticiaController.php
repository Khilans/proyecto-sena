<?php

    include_once '../model/Tnoticia/TipoNoticiaModel.php';

    class TipoNoticiaController{

        public function getInsert(){

        $obj = new TipoNoticiaModel();
        $sql = "SELECT * FROM t_noticia";
        $tipo_noticias = $obj->consult($sql);

        include_once  '../view/Tnoticia/insert.php';

        }

        public function postInsert()
        {
            $obj=new TipoNoticiaModel();
    
            $desc_tipo_noti = $_POST['desc_tipo_noti'];
            $id=$obj->autoincrement("t_tiponoticia","cod_tipo_noti");
            
           
            $sql="INSERT INTO t_tiponoticia VALUES($id,'$desc_tipo_noti')";
           
            $ejecutar=$obj->update($sql);
    
            if ($ejecutar) {
                $_SESSION['mensaje']="Se registró el tipo de noticia <b>$desc_tipo_noti</b> exitosamente";
                redirect(getUrl("Tipo_noticia","Tipo_noticia","consult"));
            } else {
                echo "Ops, ha ocurrido un error";
            }
        }

        public function consult()
        {
            $obj = new TipoNoticiaModel();
    
            $sql="SELECT * FROM t_tiponoticia";
            $tipo_noticias = $obj->consult($sql);
    
            include_once '../view/Tnoticia/consult.php';
        }

    }    
?>