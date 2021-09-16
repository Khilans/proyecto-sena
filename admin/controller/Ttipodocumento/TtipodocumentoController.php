<?php
    include_once '../model/Ttipodocumento/TtipodocumentoModel.php';
    class TtipodocumentoController{

        public function getInsert()
    {
        $obj = new TtipodocumentoModel();
        $sql = "SELECT * FROM t_tipodocumento";
        $tipodocumento = $obj->consult($sql);
        include_once  '../view/Ttipodocumento/insert.php';
    }

    public function postInsert()
    {
        $obj = new TtipodocumentoModel();      
        $nom_tipo_doc=$_POST['nom_tipo_doc'];
        $id = $obj->autoincrement("t_tipodocumento", "cod_tipo_doc");
        $sql = "INSERT INTO t_tipodocumento VALUES($id,'$nom_tipo_doc')";     
        $ejecutar = $obj->update($sql);

        if ($ejecutar) {
            $_SESSION['mensaje'] = "Se registró el documento <b>$nom_tipo_doc</b> exitosamente";
            redirect(getUrl("Ttipodocumento", "Ttipodocumento", "consult"));
        } else {
            echo "Ops, ha ocurrido un error";
        }
    }

    public function consult()
    {
        $obj = new TtipodocumentoModel();
        $sql = "SELECT * from t_tipodocumento";
        $tipodocumento = $obj->consult($sql);
        include_once '../view/Ttipodocumento/consult.php';
    }

     public function getDelete()
    {
        $obj = new TtipodocumentoModel();
        $cod_tipo_doc=$_GET['id'];
        $sql="SELECT * FROM t_tipodocumento WHERE cod_tipo_doc = $cod_tipo_doc";
        $tipodocumento=$obj->consult($sql);
        include_once '../view/Ttipodocumento/delete.php';
    } 

     public function postDelete()
    {
        $obj=new TtipodocumentoModel();
        $cod_tipo_doc=$_POST['cod_tipo_doc'];
        $nom_tipo_doc=$_POST['nom_tipo_doc'];
        $sql="DELETE FROM t_tipodocumento WHERE cod_tipo_doc = $cod_tipo_doc";
        $ejecutar=$obj->delete($sql);

        if ($ejecutar){
            $_SESSION['mensaje']="Se eliminó el documento <b>$nom_tipo_doc</b> exitosamente";
            redirect(getUrl("Ttipodocumento","Ttipodocumento","consult"));
        } else {
            echo "Ops, ha ocurrido un error";
        }
    } 

    public function getUpdate(){

        $obj=new TtipodocumentoModel();
        $cod_tipo_doc=$_GET['id'];

        $sql="SELECT * FROM t_tipodocumento WHERE cod_tipo_doc =$cod_tipo_doc";
        $tipodocumento=$obj->consult($sql);

        include_once '../view/Ttipodocumento/update.php';


    }

    public function postUpdate() {

        $obj=new TtipodocumentoModel();
        $cod_tipo_doc=$_POST['cod_tipo_doc'];
        $nom_tipo_doc=$_POST['nom_tipo_doc'];

        $sql="UPDATE t_tipodocumento SET nom_tipo_doc='$nom_tipo_doc' WHERE cod_tipo_doc=$cod_tipo_doc";
        $ejecutar=$obj->update($sql);

       if ($ejecutar) {
        $_SESSION['mensaje']="Se editó el documento <b>$nom_tipo_doc</b> exitosamente";
           redirect(getUrl("Ttipodocumento","Ttipodocumento","consult"));
       }else{
           echo "Ops, ha ocurrido un error";
       }
    }

    }   
?>








