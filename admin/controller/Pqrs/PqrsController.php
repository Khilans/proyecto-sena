<?php

    include_once '../model/Pqrs/PqrsModel.php';

    class PqrsController {
        
        public function consult(){
            $obj = new PqrsModel();

            $sql = "SELECT tp.cod_pqrsf, ttp.desc_pqrsf_tipo , tu.usu_nombre, te.desc_estado , tp.pqrsf_desc , tp.pqrsf_fecha FROM t_pqrsf tp, t_pqrsftipo ttp, t_estado te, t_usuario tu WHERE ttp.cod_pqrsf_tipo =tp.cod_pqrsf_tipo AND te.id_estado=tp.id_estado AND tu.usu_id=tp.usu_id";
            $pqrsf = $obj->consult($sql);

            include_once '../view/Pqrs/consult.php';
        }

        

        
    }

?>