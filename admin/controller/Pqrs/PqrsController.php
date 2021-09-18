<?php

    include_once '../model/Pqrs/PqrsModel.php';

    class PqrsController {
        
        public function consult(){
            $obj = new PqrsModel();

            $sql = "SELECT tp.cod_pqrsf, ttp.desc_pqrsf_tipo , tu.usu_nombre, tu.usu_correo, te.desc_estado , tp.pqrsf_desc , tp.pqrsf_fecha FROM t_pqrsf tp, t_pqrsftipo ttp, t_estado te, t_usuario tu WHERE ttp.cod_pqrsf_tipo =tp.cod_pqrsf_tipo AND te.id_estado=tp.id_estado AND tu.usu_id=tp.usu_id";
            $pqrsf = $obj->consult($sql);

            include_once '../view/Pqrs/consult.php';
        }

        public function getModalInsert(){

            $obj = new PqrsModel();

            $sql = "SELECT tp.cod_pqrsf, ttp.desc_pqrsf_tipo , tu.usu_nombre, te.desc_estado , tp.pqrsf_desc , tp.pqrsf_fecha FROM t_pqrsf tp, t_pqrsftipo ttp, t_estado te, t_usuario tu ";
            $pqrsf = $obj->consult($sql);

            $sql = "SELECT * FROM t_estado";
            $estados = $obj->consult($sql);

             $sql = "SELECT * FROM t_pqrsftipo";
            $tipopqrs = $obj->consult($sql); 

            include_once  '../view/Pqrs/send.php';
        }

        public function postInsert(){
            $obj = new PqrsModel();
       

            $desc_pqrsf=$_POST['desc_pqrsf'];
            $usu_nombre=$_POST['usu_nombre'];
            $usu_correo=$_POST['usu_correo'];
            $desc_estado=$_POST['desc_estado'];
            $pqrsf_desc=$_POST['pqrsf_desc'];
            $pqrsf_fecha=$_POST['pqrsf_fecha'];
    
            $id = $obj->autoincrement("t_pqrsf", "cod_pqrsf");

            $sql = "INSERT INTO t_pqrsf VALUES($id, '$desc_pqrsf_tipo', $usu_id,1, '$pqrsf_desc','$pqrsf_fecha')";
       
            $ejecutar = $obj->update($sql);

            if ($ejecutar) {
                $_SESSION['mensaje'] = "Se registró  <b></b> exitosamente";
                redirect(getUrl("Pqrsf", "Pqrsf", "consult"));
            } else {
                echo "Ops, error ";
            }
        } 

    }

?>