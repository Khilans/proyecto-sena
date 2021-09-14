<?php
    include_once '../model/Noticia/NoticiaModel.php';
    class NoticiaController{

        public function getDetalleNoticia(){

            $obj = new NoticiaModel();
    
            $cod_noticia = $_GET['cod_noticia'];

            $sql = "SELECT * FROM t_noticia WHERE cod_noticia=$cod_noticia";
            $noticias = $obj->consult($sql);
            
            include_once '../View/Noticia/detalle.php';
    
        }

        public function getView(){

            $obj = new NoticiaModel();
    
            $sql = "SELECT * FROM t_noticia  ";
            $noticias = $obj->consult($sql);

            include_once '../View/Noticia/noticia.php';
        } 
        

    }     


 
?>








