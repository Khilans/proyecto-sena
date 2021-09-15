<?php
include_once '../model/Oferta/OfertaModel.php';
class OfertaController{

    public function getInsert()
    {
        $obj = new OfertaModel();
        $sql = "SELECT * FROM t_oferta";
        $oferta = $obj->consult($sql);

        $sql = "SELECT * FROM t_estado";
        $estados = $obj->consult($sql);

        include_once  '../view/Oferta/insert.php';
    }

    public function postInsert()
    {
        $obj = new OfertaModel();

        $usu_id=$_SESSION['user_id'];
        $desc_oferta = $_POST['desc_oferta'];
        $fech_ini_oferta = $_POST['fech_ini_oferta'];
        $fech_fin_oferta = $_POST['fech_fin_oferta'];
        $imag_oferta = $_FILES['imag_oferta']['name'];

        $id_estado = $_POST['id_estado'];

        $ruta = "images/$imag_oferta";
        move_uploaded_file($_FILES['imag_oferta']['tmp_name'], $ruta);
        $id = $obj->autoincrement("t_oferta", "id_oferta");

        $sql = "INSERT INTO t_oferta VALUES($id, $usu_id, $id_estado, '$desc_oferta', '$fech_ini_oferta', '$fech_fin_oferta', '$ruta')";

        $ejecutar = $obj->insert($sql);

        if ($ejecutar) {
            $_SESSION['mensaje'] = "Se registró la oferta <b>$desc_oferta</b> exitosamente";
            redirect(getUrl("Oferta", "Oferta", "consult"));
        } else {
            echo "Ops, ha ocurrido un error";
            
        }
    }

    public function consult()
    {
        $obj = new OfertaModel();

         $sql = "SELECT o.id_oferta, u.usu_nombre, o.desc_oferta, o.fech_ini_oferta, o.fech_fin_oferta, o.imag_oferta, te.desc_estado FROM t_oferta o, t_estado te, t_usuario u WHERE te.id_estado=o.id_estado AND u.usu_id = o.usu_id";

        $oferta = $obj->consult($sql);

        include_once '../view/Oferta/consult.php';
    }


       public function getDelete()
       {

        $obj = new OfertaModel();

        $id_oferta = $_GET['id_oferta'];

        $sql = "SELECT * FROM t_oferta WHERE id_oferta=$id_oferta";
        $oferta = $obj->consult($sql);

        include_once '../view/Oferta/delete.php';
    }

    public function postDelete()
    {
        $obj = new OfertaModel();

        $id_oferta = $_POST['id_oferta'];
        $desc_oferta=$_POST['desc_oferta'];

        $sql = "DELETE FROM t_oferta WHERE id_oferta=$id_oferta";
        $ejecutar = $obj->update($sql);

        if ($ejecutar) {
            $_SESSION['mensaje'] = "Se eliminó la oferta <b>$desc_oferta</b> exitosamente";
            redirect(getUrl("Oferta", "Oferta", "consult"));
        } else {
            echo "Ops, ha ocurrido un error";
        }
    }
    
    public function getUpdate()
    {

        $obj = new OfertaModel();
        $id_oferta = $_GET['id_oferta'];

        $sql = "SELECT * FROM t_oferta WHERE id_oferta=$id_oferta";
        $oferta = $obj->consult($sql);

        $sql = "SELECT * FROM t_estado";
        $estados = $obj->consult($sql);

        include_once '../view/Oferta/update.php';
    } 



      public function postUpdate()
    {
        $obj = new OfertaModel();

        $id_oferta = $_POST['id_oferta'];
        $desc_oferta = $_POST['desc_oferta'];
        $fech_ini_oferta = $_POST['fech_ini_oferta'];
        $fech_fin_oferta = $_POST['fech_fin_oferta'];
        $id_estado = $_POST['id_estado'];

        if (isset($_FILES['img_noticia']['name'])) {
            $imag_oferta = $_FILES['img_noticia']['name'];
            $ruta = "images/$imag_oferta";
            move_uploaded_file($_FILES['img_noticia']['tmp_name'], $ruta);

            if (isset($_POST['img_vieja'])) {
                $img_vieja = $_POST['img_vieja'];
                unlink("$img_vieja");
            }
        
            $sql = "UPDATE t_oferta SET id_estado=$id_estado, desc_oferta='$desc_oferta', fech_ini_oferta='$fech_ini_oferta', fech_fin_oferta='$fech_fin_oferta', imag_oferta='$ruta' where id_oferta=$id_oferta";

        } else {
            $sql = "UPDATE t_oferta SET id_estado=$id_estado, desc_oferta='$desc_oferta', fech_ini_oferta='$fech_ini_oferta', fech_fin_oferta='$fech_fin_oferta' where id_oferta=$id_oferta";

        }
        $ejecutar = $obj->consult($sql);

        if ($ejecutar) {
            $_SESSION['mensaje'] = "Se editó la oferta <b>$desc_oferta</b> exitosamente";
            redirect(getUrl("Oferta", "Oferta", "consult"));
        } else {
            echo "Ops, ha ocurrido un error inesperado";
        }
    }  
}
