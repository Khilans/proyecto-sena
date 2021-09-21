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
    
            $sql = "SELECT tn.cod_noticia, tn.titulo_noticia, tn.fecha_noticia, tn.img_noticia, tn.desc_noticia , ttn.desc_tipo_noti , te.desc_estado FROM t_noticia tn, t_tiponoticia ttn, t_estado te WHERE ttn.cod_tipo_noti =tn.cod_tipo_noti AND te.id_estado=tn.id_estado";
            $noticias=$obj->consult($sql);

            include_once '../View/Noticia/noticia.php';

            
            
        } 
        
        public function filtroNoti(){

            $obj = new NoticiaModel();

            $buscar = $_POST['buscar'];

            $sql = "SELECT n.cod_noticia, c.titulo_noticia, n.desc_noticia, n.img_noticia,  n.fecha_noticia
            FROM t_noticia n WHERE n.cod_noticia =n.cod_noticia  AND 
        (n.titulo_noticia LIKE '%$buscar%'OR n.desc_noticia LIKE '%$buscar%') ORDER BY n.cod_noticia ASC";
            $noticias = $obj->consult($sql);

        include_once '../view/Noticia/filtroNoti.php';
        }

    }     


 
?>