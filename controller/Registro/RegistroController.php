<?php
    include_once '../model/Registro/RegistroModel.php';
    class RegistroController{

        public function getRegister(){
            $obj=new RegistroModel;
            $sql="SELECT cod_tipo_doc, nom_tipo_doc FROM t_tipodocumento";
            $tipos_documentos=$obj->consult($sql);
            include_once '../view/usuarios/register.php';
            
        }
        public function postRegister(){
            $obj=new RegistroModel;
            $id=$obj->autoincrement("t_usuario","usu_id");
            $pnombre=$_POST['usu_nombre'];
            if(!isset($_POST['usu_nombre2'])){
                $snombre=null;
            }else
            $snombre=$_POST['usu_nombre2'];
            $apellidos=$_POST['usu_apellido'];
            $tipo_documento=$_POST['cod_tipo_doc'];
            $numero_documento=$_POST['usu_ndocumento'];
            $correo=$_POST['usu_correo'];
            $contraseña=$_POST['usu_pass'];
            $confirma_contraseña=$_POST['confirm'];
            if(filter_var($correo,FILTER_VALIDATE_EMAIL)){
                if($confirma_contraseña==$contraseña){
                    $sql="SELECT usu_correo, usu_ndocumento FROM t_usuario WHERE usu_correo='$correo' OR usu_ndocumento=$numero_documento";
                    $consulta=$obj->consult($sql);
                    if(mysqli_num_rows($consulta)>0){
                        echo "Ya existe un usuario registrado con este correo/documento";
                        $_SESSION['mensaje']="Ya existe un usuario registrado con este correo";
                    }else{
                        $encriptada=encrypt($contraseña);
                        $sql="INSERT INTO t_usuario VALUES ($id,'$pnombre','$snombre','$apellidos','$correo','$encriptada',$numero_documento,2,$tipo_documento,1)";
                        $registro=$obj->insert($sql);
                        if($registro){
                            echo "Se registró exitosamente";
                            $_SESSION['mensaje']="Se registró exitosamente";
                            redirect("index.php");
                        }else{
                            echo "Ocurró un error durante el registro, intenta nuevamente.";
                            $_SESSION['mensaje']="Ocurró un error durante el registro, intenta nuevamente.";
                            echo $tipo_documento;
                            dd($sql);
                        }
                    }
                }else{
                    echo "La contraseña es incorrecta";
                    $_SESSION['mensaje']="La contraseña es incorrecta";
                }
            }else{
                echo "Digite un correo válido";
                $_SESSION['mensaje']="Digite un correo válido";
            }
        }
    }
?>