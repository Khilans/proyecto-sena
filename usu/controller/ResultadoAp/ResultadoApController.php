<?php

    include_once '../model/ResultadoAp/ResultadoApModel.php';

    class ResultadoApController {

        public function getInsert(){

             $obj = new ResultadoApModel();
            $sql = "SELECT * FROM t_resultado_aprendizaje";
            $resultados= $obj->consult($sql); 

            include_once  '../view/ResultadoAp/insert.php';
        }

        public function postInsert(){
            $obj = new ResultadoApModel();

       
            
            $res_apr_desc = $_POST['res_apr_desc'];
            /* $cod_comp = $_POST['cod_comp']; */
            
            $id = $obj->autoincrement("t_resultado_aprendizaje", "res_apr_cod");

            $sql = "INSERT INTO t_resultado_aprendizaje VALUES($id, '$res_apr_desc', 1)";
       
            $ejecutar = $obj->update($sql);

            if ($ejecutar) {
                $_SESSION['mensaje'] = "Se registró el resultado <b>$res_apr_desc</b> exitosamente";
                redirect(getUrl("resultadoAP", "resultadoAP", "consult"));
            } else {
                echo "Ops, ha ocurrido un error";
            }
        }

        public function consult(){

            $obj = new ResultadoApModel();

            $sql = "SELECT tra.res_apr_cod, tra.res_apr_desc,  tc.cod_comp FROM t_resultado_aprendizaje tra, t_competencias tc WHERE tc.cod_comp=tra.cod_comp";
            $resultados = $obj->consult($sql);

            include_once '../view/ResultadoAp/consult.php';

        }

        public function getDelete(){

            $obj = new ResultadoApModel();

            $res_apr_cod=$_GET['res_apr_cod'];

            $sql="SELECT * FROM t_resultado_aprendizaje WHERE res_apr_cod=$res_apr_cod";
            $resultados=$obj->consult($sql);

            include_once '../view/ResultadoAp/delete.php';
        }

        public function postDelete(){
            $obj = new ResultadoApModel();

            $res_apr_cod=$_POST['res_apr_cod'];
            $res_apr_desc = $_POST['res_apr_desc'];

            $sql="DELETE FROM t_resultado_aprendizaje WHERE res_apr_cod=$res_apr_cod";
            $ejecutar=$obj->update($sql);

            if ($ejecutar){
                $_SESSION['mensaje']="Se eliminó el resultado <b>$res_apr_desc</b> exitosamente";
                redirect(getUrl("ResultadoAp","ResultadoAp","consult"));
            } else {
                echo "Ops, ha ocurrido un error";
            }
        }    

        public function getUpdate(){

        $obj = new ResultadoApModel();
        $res_apr_cod=$_GET['res_apr_cod'];

        $sql = "SELECT * FROM t_resultado_aprendizaje WHERE res_apr_cod=$res_apr_cod";
        $resultados = $obj->consult($sql);

        /* $sql = "SELECT * FROM t_competencias";
        $competencias = $obj->consult($sql);
 */
        include_once '../view/ResultadoAp/update.php';
    }

    public function postUpdate(){
        $obj=new ResultadoApModel();

        $res_apr_cod=$_POST['res_apr_cod'];
        $res_apr_desc=$_POST['res_apr_desc'];
        /* $cod_comp=$_POST['cod_comp']; */

        $sql = "UPDATE t_resultado_aprendizaje SET res_apr_desc='$res_apr_desc' /* cod_comp=$cod_comp  */ WHERE res_apr_cod=$res_apr_cod";
        $ejecutar = $obj -> consult($sql);

        if ($ejecutar) {
            $_SESSION['mensaje']="Se editó el resultado <b>$res_apr_desc</b> exitosamente";
            redirect(getUrl("ResultadoAp", "ResultadoAp", "consult"));
        } else {
            echo "Ops, ha ocurrido un error inesperado";
            
        }

    }

    
}

?>