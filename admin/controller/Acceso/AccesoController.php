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
                        $_SESSION['nombre']=$user['usu_nombre'];
                    }
                    $_SESSION['mensaje']="Sesión iniciada exitosamente";
                    redirect("index.php");
                }else{
                    $_SESSION['mensaje']="Correo y/o contraseñas incorrectos";
                    redirect("login.php");
                }
            }else{
                $_SESSION['mensaje']="No se encuentra registrado";
                redirect("login.php");

            }
        }

        public function logout(){
            session_destroy();
            redirect("login.php");
        }
    }
?>