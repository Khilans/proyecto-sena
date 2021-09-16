<?php
    include_once '../model/Trol/TrolModel.php';
    class TrolController{

        public function getInsert()
    {
        $obj = new TrolModel();
        $sql = "SELECT * FROM t_rol";
        $rol = $obj->consult($sql);
        include_once  '../view/Trol/insert.php';
    }

    public function postInsert()
    {
        $obj = new TrolModel();      
        $desc_rol=$_POST['desc_rol'];
        $id = $obj->autoincrement("t_rol", "cod_rol");
        $sql = "INSERT INTO t_rol VALUES($id,'$desc_rol')";     
        $ejecutar = $obj->update($sql);

        if ($ejecutar) {
            $_SESSION['mensaje'] = "Se registró el rol <b>$desc_rol</b> exitosamente";
            redirect(getUrl("Trol", "Trol", "consult"));
        } else {
            echo "Ops, ha ocurrido un error";
        }
    }

    public function consult()
    {
        $obj = new TrolModel();
        $sql = "SELECT * from t_rol";
        $rol = $obj->consult($sql);
        include_once '../view/Trol/consult.php';
    }

     public function getDelete()
    {
        $obj = new TrolModel();
        $cod_rol=$_GET['id'];
        $sql="SELECT * FROM t_rol WHERE cod_rol = $cod_rol";
        $rol=$obj->consult($sql);
        include_once '../view/Trol/delete.php';
    } 

     public function postDelete()
    {
        $obj=new TrolModel();
        $cod_rol=$_POST['cod_rol'];
        $desc_rol=$_POST['desc_rol'];
        $sql="DELETE FROM t_rol WHERE cod_rol = $cod_rol";
        $ejecutar=$obj->delete($sql);

        if ($ejecutar){
            $_SESSION['mensaje']="Se eliminó el rol <b>$desc_rol</b> exitosamente";
            redirect(getUrl("Trol","Trol","consult"));
        } else {
            echo "Ops, ha ocurrido un error";
        }
    } 

    public function getUpdate(){

        $obj=new TrolModel();
        $cod_rol=$_GET['id'];

        $sql="SELECT * FROM t_rol WHERE cod_rol =$cod_rol";
        $rol=$obj->consult($sql);

        include_once '../view/Trol/update.php';
       

    }

    public function postUpdate() {

        $obj=new TrolModel();
        $cod_rol=$_POST['cod_rol'];
        $desc_rol=$_POST['desc_rol'];

        $sql="UPDATE t_rol SET desc_rol='$desc_rol' WHERE cod_rol=$cod_rol";
        $ejecutar=$obj->update($sql);

       if ($ejecutar) {
        $_SESSION['mensaje']="Se editó el rol <b>$desc_rol</b> exitosamente";
           redirect(getUrl("Trol","Trol","consult"));
       }else{
           echo "Ops, ha ocurrido un error";
       }
    }

    }   
?>








