<?php
    include_once '../model/ProgramaNivel/ProgramaNivelModel.php';
    class ProgramaNivelController{

        public function getInsert()
    {
        $obj = new ProgramaNivelModel();
        $sql = "SELECT * FROM t_programanivel";
        $nivel = $obj->consult($sql);
        include_once  '../view/ProgramaNivel/insert.php';
    }

    public function postInsert()
    {
        $obj = new ProgramaNivelModel();      
        $nom_prog_niv=$_POST['nom_prog_niv'];
        $id = $obj->autoincrement("t_programanivel", "id_prog_niv");
        $sql = "INSERT INTO t_programanivel VALUES($id,'$nom_prog_niv')";     
        $ejecutar = $obj->update($sql);

        if ($ejecutar) {
            $_SESSION['mensaje'] = "Se registró el nivel <b>$nom_prog_niv</b> exitosamente";
            redirect(getUrl("ProgramaNivel", "ProgramaNivel", "consult"));
        } else {
            echo "Ops, ha ocurrido un error";
        }
    }

    public function consult()
    {
        $obj = new ProgramaNivelModel();
        $sql = "SELECT * from t_programanivel";
        $nivel = $obj->consult($sql);
        include_once '../view/ProgramaNivel/consult.php';
    }

     public function getDelete()
    {
        $obj = new ProgramaNivelModel();
        $id_prog_niv=$_GET['id_prog_niv'];
        $sql="SELECT * FROM t_programanivel WHERE id_prog_niv = $id_prog_niv";
        $nivel=$obj->consult($sql);
        include_once '../view/ProgramaNivel/delete.php';
    } 

     public function postDelete()
    {
        $obj=new ProgramaNivelModel();
        $id_prog_niv=$_POST['id_prog_niv'];
        $nom_prog_niv=$_POST['nom_prog_niv'];
        $sql="DELETE FROM t_programanivel WHERE id_prog_niv = $id_prog_niv";
        $ejecutar=$obj->delete($sql);

        if ($ejecutar){
            $_SESSION['mensaje']="Se eliminó el nivel <b>$nom_prog_niv</b> exitosamente";
            redirect(getUrl("ProgramaNivel","ProgramaNivel","consult"));
        } else {
            echo "Ops, ha ocurrido un error";
        }
    } 

    public function getUpdate(){

        $obj=new ProgramaNivelModel();
        $id_prog_niv=$_GET['id_prog_niv'];

        $sql="SELECT * FROM t_programanivel WHERE id_prog_niv =$id_prog_niv";
        $nivel=$obj->consult($sql);

        include_once '../view/ProgramaNivel/update.php';


    }

    public function postUpdate() {

        $obj=new ProgramaNivelModel();
        $id_prog_niv=$_POST['id_prog_niv'];
        $nom_prog_niv=$_POST['nom_prog_niv'];

        $sql="UPDATE t_programanivel SET nom_prog_niv='$nom_prog_niv' WHERE id_prog_niv=$id_prog_niv";
        $ejecutar=$obj->update($sql);

       if ($ejecutar) {
        $_SESSION['mensaje']="Se editó el nivel <b>$nom_prog_niv</b> exitosamente";
           redirect(getUrl("ProgramaNivel","ProgramaNivel","consult"));
       }else{
           echo "Ops, ha ocurrido un error";
       }
    }

    }   
?>








