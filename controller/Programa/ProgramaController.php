<?php

include_once '../model/Programa/ProgramaModel.php';

class ProgramaController {

    public function getInsert()
    {

        $obj = new ProgramaModel();
        $sql = "SELECT * FROM t_lineatecnologica";
        $lineatecnologica = $obj->consult($sql);

        
        $sql = "SELECT * FROM t_programanivel";
        $nivel = $obj->consult($sql);

        

        include_once  '../view/Programa/insert.php';
    }

    public function postInsert(){

        $obj = new ProgramaModel();

    
        $lin_tec_cod=$_POST['lin_tec_cod'];
        $nom_prog = $_POST['nom_prog'];
        $desc_prog=$_POST['desc_prog'];
        $id_prog_niv=$_POST['id_prog_niv'];
        
        $id = $obj->autoincrement("t_programa", "id_prog");

        $sql = "INSERT INTO t_programa VALUES($id, $lin_tec_cod, $id_prog_niv, '$nom_prog', '' , '$desc_prog', '', '','')";
       
        $ejecutar = $obj->update($sql);

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

        $sql = "SELECT tp.id_prog, tlt.	lin_tec_desc, tpn.nom_prog_niv , tp.nom_prog, tp.desc_prog  FROM t_programa tp, t_lineatecnologica tlt , t_programanivel tpn  WHERE tlt.lin_tec_cod =tp.lin_tec_cod AND tpn.id_prog_niv=tp.id_prog_niv";
        $programas = $obj->consult($sql);

        include_once '../view/Programa/consult.php';
    }

    public function getUpdate()
    {

        $obj = new ProgramaModel();
        $id_prog=$_GET['id_prog'];

        $sql = "SELECT * FROM t_programa WHERE id_prog=$id_prog";
        $programas = $obj->consult($sql);

        $sql = "SELECT * FROM t_lineatecnologica";
        $lineatecnologica = $obj->consult($sql);

        $sql = "SELECT * FROM t_programanivel";
        $nivel = $obj->consult($sql);

        include_once '../view/Programa/update.php';
    }

    public function postUpdate(){
        $obj=new ProgramaModel();

        $id_prog=$_POST['id_prog'];
        $nom_prog = $_POST['nom_prog'];
        $desc_prog=$_POST['desc_prog'];
        $lin_tec_cod=$_POST['lin_tec_cod'];

        $sql = "UPDATE t_programa SET desc_prog='$desc_prog', lin_tec_cod=$lin_tec_cod, nom_prog='$nom_prog' WHERE id_prog=$id_prog";
        $ejecutar = $obj -> consult($sql);

        if ($ejecutar) {
            $_SESSION['mensaje']="Se editó el programa <b>$nom_prog</b> exitosamente";
            redirect(getUrl("Programa", "Programa", "consult"));
        } else {
            echo "Ops, ha ocurrido un error inesperado";
            
        }

    }

    public function getDelete(){

        $obj = new ProgramaModel();

        $id_prog=$_GET['id_prog'];

        $sql="SELECT * FROM t_programa WHERE id_prog=$id_prog";
        $programas=$obj->consult($sql);

        include_once '../view/Programa/delete.php';
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
