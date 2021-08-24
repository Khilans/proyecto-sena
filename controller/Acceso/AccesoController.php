<?php
    include_once '../model/Acceso/AccesoModel.php';

    class AccesoController{

        public function login(){
            $obj= new AccesoModel;
            $documento=$_POST['usu_ndocumento'];
            $contraseña=$_POST['usu_pass'];
            $sql="SELECT * FROM t_usuario WHERE usu_ndocumento=$documento";
            $usuario=$obj->consult($sql);
            if(mysqli_num_rows($usuario)>0){
                $usu_pass=mysqli_fetch_array($usuario);
                $verify=password_verify($contraseña,$usu_pass['usu_pass']);
                if($verify){
                    foreach ($usuario as $user) {
                        $_SESSION['user_id']=$user['usu_id'];
                    }
                    echo "Sesion iniciada correctamente";
                }else{
                    echo "Correo y/o contraseña incorrectos";
                    redirect("loginn.php");
                }
            }else{
                echo "No se encuentra registrado";
            }
        }

        public function logout(){
            session_destroy();
            redirect("index.php");
        }
    }
?>