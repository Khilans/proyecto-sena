<?php
    include_once '../model/Noticia/NoticiaModel.php';
    class NoticiaController{

        public function getDetalleNoticia(){

            $obj=new NoticiaModel();
    
            $cod_noticia=$_GET['cod_noticia'];

            $sql = "SELECT * FROM t_noticia WHERE cod_noticia=$cod_noticia";
            $noticias=$obj->consult($sql);
            
            include_once '../View/Noticia/detalle.php';
    
        }

        public function getView(){

            $obj = new NoticiaModel();
    
            $sql = "SELECT tn.cod_noticia, tn.titulo_noticia, tn.fecha_noticia, tn.img_noticia, tn.desc_noticia , ttn.desc_tipo_noti , tn.id_estado FROM t_noticia tn, t_tiponoticia ttn WHERE ttn.cod_tipo_noti =tn.cod_tipo_noti AND tn.id_estado=1";
            $noticias=$obj->consult($sql);

            include_once '../View/Noticia/noticia.php';

            
            
        } 
        
        
    }     


 
?>