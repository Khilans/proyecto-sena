<?php
 include_once '../model/Tpqrs/TpqrsModel.php';

    class TpqrsController {
 

        public function getInsert(){

            $obj = new TpqrsModel();

            $sql = "SELECT * FROM t_pqrsftipo";
            $Tipo_pqrs = $obj->consult($sql);

            include_once  '../view/Tpqrs/insert.php';
        }

        public function postInsert(){
            $obj = new TpqrsModel();
    
            $desc_pqrsf_tipo = $_POST['desc_pqrsf_tipo'];
            $id=$obj->autoincrement("t_pqrsftipo","cod_pqrsf_tipo");
            
           
            $sql="INSERT INTO t_pqrsftipo VALUES($id,'$desc_pqrsf_tipo')";
           
            $ejecutar=$obj->update($sql);
    
            if ($ejecutar) {
                $_SESSION['mensaje']="Se registró el tipo pqrsf <b>$desc_pqrsf_tipo</b> exitosamente";
                redirect(getUrl("Tpqrs","Tpqrs","consult"));
            } else {
                echo "Ops, ha ocurrido un error";
            }
        }

        public function consult(){
            
            $obj = new TpqrsModel();

            $sql = "SELECT * from t_pqrsftipo";
            $Tipo_pqrs = $obj->consult($sql);

            include_once '../view/Tpqrs/consult.php';
            
        }

        public function getUpdate(){

            $obj=new TpqrsModel();

            $cod_pqrsf_tipo=$_GET['id'];

            $sql="SELECT * FROM t_pqrsftipo WHERE cod_pqrsf_tipo=$cod_pqrsf_tipo";
            $Tipo_pqrs=$obj->consult($sql);

            include_once '../view/Tpqrs/update.php';

        }

        public function postUpdate() {

            $obj=new TpqrsModel();
            $cod_pqrsf_tipo=$_POST['cod_pqrsf_tipo'];
            $desc_pqrsf_tipo=$_POST['desc_pqrsf_tipo'];

            $sql="UPDATE t_pqrsftipo SET desc_pqrsf_tipo='$desc_pqrsf_tipo' WHERE cod_pqrsf_tipo=$cod_pqrsf_tipo";
            $ejecutar=$obj->update($sql);
    
           if ($ejecutar) {
            $_SESSION['mensaje']="Se editó el tipo de pqrsf <b>$desc_pqrsf_tipo</b> exitosamente";
               redirect(getUrl("Tpqrs","Tpqrs","consult"));
           }else{
               echo "Ops, ha ocurrido un error";
               dd($sql);
           }
        }

        public function getDelete(){
            $obj=new TpqrsModel();

            $cod_pqrsf_tipo=$_GET['id'];

            $sql="SELECT * FROM t_pqrsftipo WHERE cod_pqrsf_tipo=$cod_pqrsf_tipo";
            $Tipo_pqrs=$obj->consult($sql);

            include_once '../view/Tpqrs/delete.php';

        } 

        public function postDelete(){

            $obj=new TpqrsModel();
    
            $cod_pqrsf_tipo=$_POST['cod_pqrsf_tipo'];
            $desc_pqrsf_tipo=$_POST['desc_pqrsf_tipo'];
    
            $sql="DELETE FROM t_pqrsftipo WHERE cod_pqrsf_tipo=$cod_pqrsf_tipo";
            $ejecutar=$obj->update($sql);

            if($ejecutar) {
                $_SESSION['mensaje']="Se eliminó el tipo de pqrsf <b>$desc_pqrsf_tipo</b> exitosamente";
                redirect(getUrl("Tpqrs","Tpqrs","consult"));
            }else{
                echo "Ops, ha ocurrido un error";
                
            }
    
    
        }


    }

?>

