<?php
include_once '../model/Competencia/CompetenciaModel.php';

class CompetenciaController
{

    public function getModalInsert()
    {
        $obj = new CompetenciaModel();
        $sql = "SELECT * FROM t_competencia";
        $competencia = $obj->consult($sql);
        
        $sql = "SELECT * FROM t_programa";
        $programa = $obj-> consult($sql); 

        include_once  '../view/Competencia/ModalInsert.php';
    }

    public function postInsert()
    {
        $obj = new CompetenciaModel();
        $cod_competencia=$_POST['cod_competencia'];
        $desc_competencia = $_POST['desc_competencia'];
        $id_prog = $_POST['id_prog']; 
        $id = $obj->autoincrement("t_competencia", "id_competencia");
        $sql = "INSERT INTO t_competencia VALUES($id, $cod_competencia, '$desc_competencia',$id_prog)";
        $ejecutar = $obj->update($sql);

        if ($ejecutar) {
            $_SESSION['mensaje'] = "Se registró el nivel <b>$desc_competencia</b> exitosamente";
            redirect(getUrl("Competencia", "Competencia", "consult"));
        } else {
            echo "Ops, ha ocurrido un error";
        }
    }

    public function consult()
    {
        $obj = new CompetenciaModel();
        $sql = "SELECT * from t_competencia";
        $competencia = $obj->consult($sql);
        
        $sql = "SELECT * FROM t_programa";
        $programa = $obj-> consult($sql);
        include_once '../view/Competencia/consult.php'; 
    }

    public function getModalDelete()
    {
        $obj = new CompetenciaModel();
        $id_competencia = $_GET['id'];
        $sql = "SELECT * FROM t_competencia WHERE id_competencia = $id_competencia";
        $competencia = $obj->consult($sql);
        include_once '../view/Competencia/modalDelete.php';
    }

    public function postDelete()
    {
        $obj = new CompetenciaModel();
        $id_competencia = $_POST['id_competencia'];
        $desc_competencia = $_POST['desc_competencia'];
        $sql = "DELETE FROM t_competencia WHERE id_competencia = $id_competencia";
        $ejecutar = $obj->update($sql);

        if ($ejecutar) {
            $_SESSION['mensaje'] = "Se eliminó el nivel <b>$desc_competencia</b> exitosamente";
            redirect(getUrl("Competencia", "Competencia", "consult"));
        } else {
            echo "Ops, ha ocurrido un error";
        }
    }

    public function getModalUpdate()
    {

        $obj = new CompetenciaModel();
        $id_competencia = $_GET['id'];

        $sql = "SELECT * FROM t_competencia WHERE id_competencia =$id_competencia";
        $competencia = $obj->consult($sql);

        include_once '../view/Competencia/ModalUpdate.php';
    }

    public function postUpdate()
    {

        $obj = new CompetenciaModel();
        $id_competencia = $_POST['id_competencia'];
        $cod_competencia = $_POST['cod_competencia'];
        $desc_competencia = $_POST['desc_competencia'];

        $sql = "UPDATE t_competencia SET  cod_competencia=$cod_competencia,desc_competencia='$desc_competencia' WHERE id_competencia=$id_competencia";
        $ejecutar = $obj->consult($sql);

        if ($ejecutar) {
            $_SESSION['mensaje'] = "Se editó el nivel <b>$desc_competencia</b> exitosamente";
            redirect(getUrl("Competencia", "Competencia", "consult"));
        } else {
            echo "Ops, ha ocurrido un error";
        }
    }
}
