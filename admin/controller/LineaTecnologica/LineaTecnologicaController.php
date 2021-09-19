<?php
    include_once '../model/LineaTecnologica/LineaTecnologicaModel.php';
    class LineaTecnologicaController{

        public function getModalInsert()
    {
        $obj = new LineaTecnologicaModel();
        $sql = "SELECT * FROM t_lineatecnologica";
        $linea = $obj->consult($sql);
        include_once  '../view/LineaTecnologica/ModalInsert.php';
    }

    public function postInsert()
    {
        $obj = new LineaTecnologicaModel();      
        $lin_tec_desc=$_POST['lin_tec_desc'];
       /*  $usu_id= $_POST['usu_id']; */ 
        $id = $obj->autoincrement("t_lineatecnologica", "lin_tec_cod");
        $sql = "INSERT INTO t_lineatecnologica VALUES($id,'$lin_tec_desc')";     
        $ejecutar = $obj->update($sql);

        if ($ejecutar) {
            $_SESSION['mensaje'] = "Se registró la linea tecnologica <b>$lin_tec_desc</b> exitosamente";
            redirect(getUrl("LineaTecnologica", "LineaTecnologica", "consult"));
        } else {
            echo "Ops, ha ocurrido un error";
        }
    }

    public function consult()
    {
        $obj = new LineaTecnologicaModel();
        $sql = "SELECT * from t_lineatecnologica";
        $lineatecnologica = $obj->consult($sql);
        include_once '../view/LineaTecnologica/consult.php';
    }

     public function getModalDelete()
    {
        $obj = new LineaTecnologicaModel();
        $lin_tec_cod=$_GET['id'];
        $sql="SELECT * FROM t_lineatecnologica WHERE lin_tec_cod = $lin_tec_cod";
        $lineatecnologica=$obj->consult($sql);
        include_once '../view/LineaTecnologica/ModalDelete.php';
    } 

     public function postDelete()
    {
        $obj=new LineaTecnologicaModel();
        $lin_tec_cod=$_POST['lin_tec_cod'];
        $lin_tec_desc=$_POST['lin_tec_desc'];
        $sql="DELETE FROM `t_lineatecnologica` WHERE lin_tec_cod = $lin_tec_cod";
        $ejecutar=$obj->delete($sql);

        if ($ejecutar){
            $_SESSION['mensaje']="Se eliminó la linea tecnologica <b>$lin_tec_desc</b> exitosamente";
            redirect(getUrl("LineaTecnologica","LineaTecnologica","consult"));
        } else {
            echo "Ops, ha ocurrido un error";
        }
    } 

    public function getModalUpdate(){

        $obj=new LineaTecnologicaModel();
        $lin_tec_cod=$_GET['id'];

        $sql="SELECT * FROM t_lineatecnologica WHERE lin_tec_cod =$lin_tec_cod";
        $lineatecnologica=$obj->consult($sql);

        include_once '../view/LineaTecnologica/ModalUpdate.php';


    }

    public function postUpdate() {

        $obj=new LineaTecnologicaModel();
        $lin_tec_cod=$_POST['lin_tec_cod'];
        $lin_tec_desc=$_POST['lin_tec_desc'];

        $sql="UPDATE t_lineatecnologica SET lin_tec_desc='$lin_tec_desc' WHERE lin_tec_cod=$lin_tec_cod";
        $ejecutar=$obj->update($sql);

       if ($ejecutar) {
        $_SESSION['mensaje']="Se editó la linea tecnologica <b>$lin_tec_desc</b> exitosamente";
           redirect(getUrl("LineaTecnologica","LineaTecnologica","consult"));
       }else{
           echo "Ops, ha ocurrido un error";
       }
    }

    }   
?>








