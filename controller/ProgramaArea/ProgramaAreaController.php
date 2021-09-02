<?php
    include_once '../model/ProgramaArea/ProgramaAreaModel.php';
    class ProgramaAreaController{


       

        public function getInsert()
    {

        $obj = new ProgramaAreaModel();
        $sql = "SELECT * FROM t_programa_area";
        $progarea = $obj->consult($sql);

        $sql = "SELECT * FROM t_lineatecnologica";
        $lineatecnologica = $obj->consult($sql);

        include_once  '../view/ProgramaArea/insert.php';
    }

    public function postInsert()
    {
        $obj = new ProgramaAreaModel();

       
        $prog_area_desc=$_POST['prog_area_desc'];
        $lin_tec_cod= $_POST['lin_tec_cod'];
       
        
        $id = $obj->autoincrement("t_programa_area", "prog_area_cod");

        $sql = "INSERT INTO t_programa_area VALUES($id, '$prog_area_desc', $lin_tec_cod)";
       
        $ejecutar = $obj->update($sql);

        if ($ejecutar) {
            $_SESSION['mensaje'] = "Se registró el programa area <b>$prog_area_desc</b> exitosamente";
            redirect(getUrl("ProgramaArea", "ProgramaArea", "consult"));
        } else {
            echo "Ops, ha ocurrido un error";
        }
    }


    public function consult()
    {
        $obj = new ProgramaAreaModel();

        $sql = "SELECT p.prog_area_cod, p.prog_area_desc, l.lin_tec_cod  FROM t_programa_area p, t_lineatecnologica l WHERE l.lin_tec_cod =p.lin_tec_cod ";
        $progarea = $obj->consult($sql);

        include_once '../view/ProgramaArea/consult.php';
    }


    public function getDelete()
    {

        $obj = new ProgramaAreaModel();

        $cod_noticia=$_GET['cod_noticia'];

        $sql="SELECT * FROM t_noticia WHERE cod_noticia=$cod_noticia";
        $noticias=$obj->consult($sql);

        include_once '../view/Noticia/delete.php';
    }

    public function postDelete()
    {
        $obj=new ProgramaAreaModel();

        $cod_noticia=$_POST['cod_noticia'];
        $titulo_noticia=$_POST['titulo_noticia'];

        $sql="DELETE FROM t_noticia WHERE cod_noticia=$cod_noticia";
        $ejecutar=$obj->update($sql);

        if ($ejecutar){
            $_SESSION['mensaje']="Se eliminó la noticia <b>$titulo_noticia</b> exitosamente";
            redirect(getUrl("Noticia","Noticia","consult"));
        } else {
            echo "Ops, ha ocurrido un error";
        }

    }

    public function getUpdate()
    {

        $obj = new ProgramaAreaModel();
        $cod_noticia=$_GET['cod_noticia'];

        $sql = "SELECT * FROM t_noticia WHERE cod_noticia=$cod_noticia";
        $noticias = $obj->consult($sql);

        $sql = "SELECT * FROM t_estado";
        $estados = $obj->consult($sql);

        $sql = "SELECT * FROM t_tiponoticia";
        $tipo_noticias = $obj->consult($sql);

       

        include_once '../view/Noticia/update.php';
    }

    public function postUpdate()
    {
        $obj = new ProgramaAreaModel();

        $cod_noticia = $_POST['cod_noticia'];
        $cod_estado = $_POST['cod_estado'];
        $cod_tipo_noti = $_POST['cod_tipo_noti'];
        $desc_noticia=$_POST['desc_noticia'];

        if (isset($_FILES['img_noticia']['name'])) {
            $img_noticia = $_FILES['img_noticia']['name'];
            $ruta = "images/$img_noticia";
            move_uploaded_file($_FILES['img_noticia']['tmp_name'], $ruta);

            if (isset($_POST['img_vieja'])) {
                $img_vieja = $_POST['img_vieja'];
                unlink("$img_vieja");
            }
            $sql = "UPDATE t_noticia SET desc_noticia='$desc_noticia', cod_tipo_noti=$cod_tipo_noti,cod_estado=$cod_estado,
            img_noticia='$ruta' WHERE cod_noticia=$cod_noticia";
        } else {
            $sql = "UPDATE t_noticia SET desc_noticia='$desc_noticia', cod_tipo_noti=$cod_tipo_noti,cod_estado=$cod_estado,img_noticia='$ruta' WHERE
            cod_noticia=$cod_noticia";
        }
        $ejecutar = $obj->consult($sql);

        if ($ejecutar) {
            $_SESSION['mensaje']="Se editó la noticia <b>$desc_noticia</b> exitosamente";
            redirect(getUrl("Noticia", "Noticia", "consult"));
        } else {
            echo "Ops, ha ocurrido un error inesperado";
            
        }
    }
    }   
?>








