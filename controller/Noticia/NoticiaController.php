<?php
    include_once '../model/Noticia/NoticiaModel.php';
    class NoticiaController{


       

        public function getInsert()
    {

        $obj = new NoticiaModel();
        $sql = "SELECT *  FROM t_tiponoticia";
        $noticias = $obj->consult($sql);

        include_once  '../view/Noticia/insert.php';
    }

    public function postInsert()
    {
        $obj = new NoticiaModel();

       
        $desc_noticia=$_POST['desc_noticia'];
        $titulo_noticia = $_POST['titulo_noticia'];
        $img_noticia = $_FILES['img_noticia']['name'];
        $cod_tipo_noti= $_POST['cod_tipo_noti'];
        

        $ruta = "images/$img_noticia";
        
        move_uploaded_file($_FILES['img_noticia']['tmp_name'], $ruta);
        $id = $obj->autoincrement("t_noticia", "cod_noticia");

        $sql = "INSERT INTO t_noticia VALUES($id, '$desc_noticia', '$titulo_noticia', '', '$ruta' , '', $cod_tipo_noti, '')";
       
        $ejecutar = $obj->update($sql);

        if ($ejecutar) {
            $_SESSION['mensaje'] = "Se registró la noticia <b>$titulo_noticia</b> exitosamente";
            redirect(getUrl("Noticia", "Noticia", "consult"));
        } else {
            echo "Ops, ha ocurrido un error";
        }
    }


    public function consult()
    {
        $obj = new NoticiaModel();

        $sql = "SELECT tn.cod_noticia, tn.titulo_noticia, tn.img_noticia, tn.desc_noticia , ttn.desc_tipo_noti FROM t_noticia tn, t_tiponoticia ttn WHERE ttn.cod_tipo_noti =tn.cod_tipo_noti ";
        $noticias = $obj->consult($sql);

        include_once '../view/Noticia/consult.php';
    }

    }   
?>







