<?php

include_once '../model/Programa/ProgramaModel.php';

class ProgramaController {

    public function getModalInsert()
    {
        $obj = new ProgramaModel();
        $sql = "SELECT * FROM t_programa";
        $programas = $obj-> consult($sql);

        $sql = "SELECT * FROM t_lineatecnologica";
        $lineatecnologica = $obj->consult($sql);

        $sql = "SELECT * FROM t_programanivel";
        $nivel = $obj->consult($sql);
        include_once  '../view/Programa/ModalInsert.php';
    }

    public function postInsert(){

        $obj = new ProgramaModel();

        $lin_tec_cod=$_POST['lin_tec_cod'];
        $id_prog_niv=$_POST['id_prog_niv'];
        $nom_prog = $_POST['nom_prog'];
        $sigla_prog = $_POST['sigla_prog'];
        $desc_prog=$_POST['desc_prog'];
        $duración_prog=$_POST['duracion_prog'];
        $cod_prog=$_POST['cod_prog'];
        $imag_prog=$_FILES['imag_prog']['name'];

        $ruta = "images/$imag_prog";
        move_uploaded_file($_FILES['imag_prog']['tmp_name'], $ruta);
        $id = $obj->autoincrement("t_programa", "id_prog");
        $sql = "INSERT INTO t_programa VALUES($id, $lin_tec_cod, $id_prog_niv, '$nom_prog','$sigla_prog','$desc_prog', '$duración_prog', $cod_prog, '$ruta' )";
        
        $ejecutar = $obj->insert($sql);

        if ($ejecutar) {
            $_SESSION['mensaje'] = "Se registró el programa <b>$nom_prog</b> exitosamente";
            redirect(getUrl("Programa", "Programa", "consult"));
        } else {
            echo "Ops, ha ocurrido un error";
        }
    }
    

    public function consult()
    {
        $obj = new ProgramaModel();

        $sql = "SELECT tp.id_prog, tlt.lin_tec_desc, tpn.nom_prog_niv, tp.nom_prog, tp.sigla_prog, tp.desc_prog, tp.duracion_prog, tp.cod_prog, tp.imag_prog  FROM t_programa tp, t_lineatecnologica tlt , t_programanivel tpn  WHERE tlt.lin_tec_cod =tp.lin_tec_cod AND tpn.id_prog_niv=tp.id_prog_niv";
        $programas = $obj->consult($sql);

        include_once '../view/Programa/consult.php';
    }

    public function getModalUpdate()
    {

        $obj = new ProgramaModel();
        $id_prog=$_GET['id'];

        $sql = "SELECT * FROM t_programa WHERE id_prog=$id_prog";
        $programas = $obj->consult($sql);

        $sql = "SELECT * FROM t_lineatecnologica";
        $lineatecnologica = $obj->consult($sql);

        $sql = "SELECT * FROM t_programanivel";
        $nivel = $obj->consult($sql);

        include_once '../view/Programa/ModalUpdate.php';
    }

    public function postUpdate()
    {
        $obj=new ProgramaModel();

        $id_prog=$_POST['id_prog'];
        $lin_tec_cod=$_POST['lin_tec_cod'];
        $id_prog_niv=$_POST['id_prog_niv'];
        $nom_prog = $_POST['nom_prog'];
        $sigla_prog = $_POST['sigla_prog'];
        $desc_prog=$_POST['desc_prog'];
        $duracion_prog=$_POST['duracion_prog'];
        $cod_prog = $_POST['cod_prog'];
        
        if (isset($_FILES['img_noticia']['name'])) {
            $imag_prog = $_FILES['img_noticia']['name'];
            $ruta = "images/$imag_prog";
            move_uploaded_file($_FILES['img_noticia']['tmp_name'], $ruta);

            if (isset($_POST['img_vieja'])) {
                $img_vieja = $_POST['img_vieja'];
                unlink("$img_vieja");
            }
            $sql = "UPDATE t_programa SET lin_tec_cod=$lin_tec_cod,  id_prog_niv=$id_prog_niv, nom_prog='$nom_prog',  sigla_prog='$sigla_prog', desc_prog='$desc_prog',  duracion_prog='$duracion_prog',  cod_prog=$cod_prog,  imag_prog='$ruta' where id_prog=$id_prog";

        } else {
            $sql = "UPDATE t_programa SET lin_tec_cod=$lin_tec_cod,  id_prog_niv=$id_prog_niv, nom_prog='$nom_prog',  sigla_prog='$sigla_prog', desc_prog='$desc_prog',  duracion_prog='$duracion_prog',  cod_prog=$cod_prog where id_prog=$id_prog";

        }
        $ejecutar = $obj->consult($sql);

        if ($ejecutar) {
            $_SESSION['mensaje']="Se editó el programa <b>$nom_prog</b> exitosamente";
            redirect(getUrl("Programa", "Programa", "consult"));
        } else {
            echo "Ops, ha ocurrido un error inesperado";
          //  dd($sql);
        }

    }

    public function getModalDelete(){

        $obj = new ProgramaModel();

        $id_prog=$_GET['id'];

        $sql="SELECT * FROM t_programa WHERE id_prog=$id_prog";
        $programas=$obj->consult($sql);

        include_once '../view/Programa/ModalDelete.php';
    }

    public function postDelete(){

        $obj=new ProgramaModel();

        $id_prog=$_POST['id_prog'];
        $nom_prog=$_POST['nom_prog'];

        $sql="DELETE FROM t_programa WHERE id_prog=$id_prog";
        $ejecutar=$obj->update($sql);

        if ($ejecutar){
            $_SESSION['mensaje']="Se eliminó la noticia <b>$nom_prog</b> exitosamente";
            redirect(getUrl("Programa","Programa","consult"));
        } else {
            echo "Ops, ha ocurrido un error";
        }

    }


}




?>
