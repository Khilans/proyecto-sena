<?php
    session_start();
if($_SESSION['rol']!=1){
    redirect("../../web/index.php");
}

    function encrypt($pass){
        $result=password_hash($pass,PASSWORD_DEFAULT);
        return $result;
    }
    function dd($var)
    {
        echo "<pre>";
        die(print_r($var));
    }
    function hora(){
        $unixTime = time();
        $timeZone = new \DateTimeZone('America/Bogota');
        $time = new \DateTime();
        $time->setTimestamp($unixTime)->setTimezone($timeZone);
        $formattedTime = $time->format('Y/m/d');

        return $formattedTime;
    }

    function redirect($url){ //Redirecciona con JS en lugar de header
        echo "<script type='text/javascript'>"."window.location.href='$url'"."</script>";
    }

    function getUrl($modulo,$controlador,$funcion,$parametros=false,$pagina=false){
        if($pagina==false){
            $pagina="index";
        }
        $url="$pagina.php?modulo=$modulo&controlador=$controlador&funcion=$funcion";
        

        if($parametros!=false){
            foreach ($parametros as $key => $valor) {
                $url.="&$key=$valor";
            }
            
        }
        return $url;
    }

    function resolve(){ //Construye la URL cuando seleccionamos una opción en el navbar
        //modulo= carpeta
        //controlador= archivo
        //funcion= metodo del controlador
        $modulo=ucwords($_GET['modulo']);//ucwords funcion que hace mayúscula la primera letra de la palabra
        $controlador=ucwords($_GET['controlador']);
        $funcion=$_GET['funcion'];

        if (is_dir("../controller/$modulo")){
            if (file_exists("../controller/$modulo/".$controlador."Controller.php")){
                include_once "../controller/$modulo/".$controlador."Controller.php";
                $nombreClase=$controlador."Controller";
                $objClase=new $nombreClase();
                if (method_exists($objClase,$funcion)){
                    $objClase->$funcion();
                }else{
                    echo "El método especificado no existe";
                }
            }else{
                echo "El controlador especificado no existe";
                
            }
        }else {
            $_SESSION['error']="El módulo especificado no existe.";
            include_once '../view/partials/error404.php';
        }
    }
?>