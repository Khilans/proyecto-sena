<?php

    include_once '../model/Pqrs/PqrsModel.php';

    class PqrsController {
        
        public function consult(){
            $obj=new PqrsModel;

            $sql = "SELECT tp.cod_pqrsf, ttp.desc_pqrsf_tipo , tu.usu_nombre, te.desc_estado , tp.pqrsf_desc , tp.pqrsf_fecha FROM t_pqrsf tp, t_pqrsftipo ttp, t_estado te, t_usuario tu WHERE ttp.cod_pqrsf_tipo =tp.cod_pqrsf_tipo AND te.id_estado=tp.id_estado AND tu.usu_id=tp.usu_id";
            $Pqrs = $obj->consult($sql);

            include_once '../view/Pqrs/consult.php';
        }

        public function getInsert(){
            $obj=new PqrsModel;
            $sql="SELECT * FROM t_pqrsftipo";
            $tipoPQRSF=$obj->consult($sql);
            
            include_once '../view/Pqrs/send.php';
        }

        public function postInsert(){
            $obj=new PqrsModel;

           
            $cod_pqrsf_tipo=$_POST['tipopqrsf'];
            $usu_id=$_POST['usu_id'];
            $pqrsf_desc=$_POST['pqrsf_desc'];
            $pqrsf_fecha=hora();
            
           /*  dd($_POST); */
           
            $id = $obj->autoincrement("t_pqrsf", "cod_pqrsf");
            $sql = "INSERT INTO t_pqrsf VALUES($id,$cod_pqrsf_tipo,$usu_id,1,'$pqrsf_desc','$pqrsf_fecha')";
       
            $ejecutar = $obj->update($sql);
            if ($ejecutar) {
                $_SESSION['mensaje'] = "Se registró tu <b>$cod_pqrsf_tipo</b> exitosamente";

                redirect(getUrl("Pqrs", "Pqrs", "getSend"));

            } else {
                echo "Ops, error ";
                /* dd($sql); */
            }  
        }


        
    }

?>