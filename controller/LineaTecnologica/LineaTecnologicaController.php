<?php
    include_once '../model/LineaTecnologica/LineaTecnologicaModel.php';
    class LineaTecnologicaController{

        public function getInsert()
    {
        $obj = new LineaTecnologicaModel();
        $sql = "SELECT * FROM t_lineatecnologica";
        $linea = $obj->consult($sql);
        include_once  '../view/LineaTecnologica/insert.php';
    }

    public function postInsert()
    {
        $obj = new LineaTecnologicaModel();      
        $lin_tec_desc=$_POST['lin_tec_desc'];
       /*  $usu_id= $_POST['usu_id']; */ 
        $id = $obj->autoincrement("t_lineatecnologica", "lin_tec_cod");
        $sql = "INSERT INTO t_lineatecnologica VALUES($id, '$desc_noticia', '$titulo_noticia', '$fecha_noticia', '$ruta' , 1, $cod_tipo_noti, $id_estado)";     
        $ejecutar = $obj->update($sql);

        if ($ejecutar) {
            $_SESSION['mensaje'] = "Se registró la linea tecnologica <b>$titulo_noticia</b> exitosamente";
            redirect(getUrl("Noticia", "Noticia", "consult"));
        } else {
            echo "Ops, ha ocurrido un error";
        }
    }

    public function consult()
    {
        $obj = new LineaTecnologicaModel();
        $sql = "SELECT tn.cod_noticia, tn.titulo_noticia, tn.img_noticia, tn.desc_noticia , ttn.desc_tipo_noti , te.desc_estado FROM t_noticia tn, t_tiponoticia ttn, t_estado te WHERE ttn.cod_tipo_noti =tn.cod_tipo_noti AND te.id_estado=tn.id_estado";
        $noticias = $obj->consult($sql);
        include_once '../view/LineaTecnologica/consult.php';
    }

    public function getDelete()
    {
        $obj = new LineaTecnologicaModel();
        $cod_noticia=$_GET['cod_noticia '];
        $sql="SELECT * FROM t_noticia WHERE cod_noticia=$cod_noticia";
        $noticias=$obj->consult($sql);
        include_once '../view/LineaTecnologica/delete.php';
    }

    public function postDelete()
    {
        $obj=new LineaTecnologicaModel();
        $cod_noticia=$_POST['cod_noticia'];
        $titulo_noticia=$_POST['titulo_noticia'];
        $sql="DELETE FROM t_noticia WHERE cod_noticia=$cod_noticia";
        $ejecutar=$obj->update($sql);

        if ($ejecutar){
            $_SESSION['mensaje']="Se eliminó la noticia <b>$titulo_noticia</b> exitosamente";
            redirect(getUrl("LineaTecnologica","LineaTecnologica","consult"));
        } else {
            echo "Ops, ha ocurrido un error";
        }
    }

    }   
?>








