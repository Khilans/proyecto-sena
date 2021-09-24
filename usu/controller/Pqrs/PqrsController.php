<?php

    include_once '../model/Pqrs/PqrsModel.php';

    class PqrsController {

        public function getSend(){
            $obj=new PqrsModel;
            $sql="SELECT * FROM t_pqrsftipo";
            $tipoPQRSF=$obj->consult($sql);
            
            include_once '../view/Pqrs/send.php';
        }

        public function postSend(){
            $obj=new PqrsModel;
            
           
            $cod_pqrsf_tipo=$_POST['tipopqrsf'];
            $nombre=$_POST['nombre'];
            $correo=$_POST['correo'];
            $usu_id=$_POST['usu_id'];
            $pqrsf_desc=$_POST['pqrsf_desc'];
            
            $id = $obj->autoincrement("t_pqrsf", "cod_pqrsf");


            if ($_POST['tipopqrsf'] == 5){
                $sql = "INSERT INTO t_pqrsf VALUES($id,$cod_pqrsf_tipo,$usu_id,6,'$pqrsf_desc','$correo','$nombre', NOW())";
            }else{
                $sql = "INSERT INTO t_pqrsf VALUES($id,$cod_pqrsf_tipo,$usu_id,5,'$pqrsf_desc','$correo','$nombre', NOW())";
            }

            $ejecutar = $obj->update($sql);

            if ($ejecutar) {
                $_SESSION['mensaje'] = "Se envío tu <b>PQRSF</b> exitosamente";
                redirect(getUrl("Pqrs", "Pqrs", "getSend"));
            } else {
                echo "Ops, error ";
                dd($sql);
            }  
        }

        public function getSendU(){
            $obj=new PqrsModel;
            $sql="SELECT * FROM t_pqrsftipo";
            $tipoPQRSF=$obj->consult($sql);
            
            include_once '../view/Pqrs/sendU.php';
        }

        public function postSendU(){
            $obj=new PqrsModel;
            
           
            $cod_pqrsf_tipo=$_POST['tipopqrsf'];
            $nombre=$_POST['nombre']; 
            $correo=$_POST['correo']; 
            $pqrsf_desc=$_POST['pqrsf_desc'];
            $pqrsf_fecha=hora();
            
           /*  dd($_POST);  */
            
           
           $id = $obj->autoincrement("t_pqrsf", "cod_pqrsf");

            $sql = "INSERT INTO t_pqrsf VALUES($id,$cod_pqrsf_tipo,NULL,1,'$pqrsf_desc','$correo','$nombre','$pqrsf_fecha')";
       
            $ejecutar = $obj->update($sql);

            if ($ejecutar) {
                $_SESSION['mensaje'] = "Se registró tu <b>$cod_pqrsf_tipo</b> exitosamente";
                redirect(getUrl("Pqrs", "Pqrs", "getSendU"));
            } else {
                echo "Ops, error ";
               
            }  
        }


        
    }

?>