<?php
    include_once '../model/Registro/RegistroModel.php';
    class RegistroController{
        public function register(){
            $obj=new RegistroModel;
            $id=$obj->autoincrement("t_usuario","usu_id");
            $pnombre=$_POST['pnombre'];
            $snombre=$_POST['snombre'];
            $apellidos=$_POST['apellidos'];
            $tipo_documento=$_POST['tdocumento'];
            $numero_documento=$_POST['ndocumento'];
            $correo=$_POST['correo'];
            $contraseña=$_POST['contraseña'];
            $confirma_contraseña=$_POST['confirm'];
            if($confirma_contraseña==$contraseña){
                $sql="SELECT * FROM t_usuario WHERE usu_correo='$correo'";
                $consulta=$obj->consult($sql);
                if(mysqli_num_rows($consulta)>0){
                    echo "Ya existe un usuario registrado con este correo";
                    $_SESSION['mensaje']="Ya existe un usuario registrado con este correo";
                }else{
                    $encriptada=encrypt($contraseña);
                    $sql="INSERT INTO t_usuario VALUES ($id,'$pnombre','$snombre','$apellidos','$correo','$encriptada',$numero_documento,2,$tipo_documento)";
                    $registro=$obj->insert($sql);
                    if($registro){
                        echo "Se registró exitosamente";
                        $_SESSION['mensaje']="Se registró exitosamente";
                    }else{
                        echo "Ocurró un error durante el registro, intenta nuevamente.";
                        $_SESSION['mensaje']="Ocurró un error durante el registro, intenta nuevamente.";
                    }
                }
            }else{
                echo "La contraseña es incorrecta";
                $_SESSION['mensaje']="La contraseña es incorrecta";
            }
        }
    }
?>