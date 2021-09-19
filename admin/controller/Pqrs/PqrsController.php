<?php

    include_once '../model/Pqrs/PqrsModel.php';

    class PqrsController {
        
        public function consult(){
            $obj = new PqrsModel();

            $sql = "SELECT p.cod_pqrsf, t.desc_pqrsf_tipo, p.usu_id, e.desc_estado, p.nombre, p.correo, p.pqrsf_fecha, p.pqrsf_desc FROM t_pqrsf AS p, t_pqrsftipo AS t, t_estado AS e WHERE t.cod_pqrsf_tipo = p.cod_pqrsf_tipo AND e.id_estado = p.id_estado";
            $pqrsf = $obj->consult($sql);

            include_once '../view/Pqrs/consult.php';
        }

        

        
    }

?>