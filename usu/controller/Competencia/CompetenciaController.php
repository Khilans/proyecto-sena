<?php
    include_once '../model/Competencia/CompetenciaModel.php';

    class CompetenciaController{
        public function consult(){
            $obj=new CompetenciaModel;

            $sql="SELECT * FROM t_competencia ";
            $competencia=$obj->consult($sql);
            
        }
    }

?>