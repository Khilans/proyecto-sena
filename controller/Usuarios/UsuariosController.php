<?php
    include_once '../model/Usuarios/UsuariosModel.php';
    use PHPMAILER\PHPMAILER\PHPMailer;
    use PHPMAILER\PHPMAILER\Exception;
    class UsuariosController{

        public function profile(){
            $obj=new UsuariosModel;
            $id=$_SESSION['user_id'];
            $sql="SELECT cod_tipo_doc, FROM t_tipodocumento";
            $tipo_documentos=$obj->consult($sql);
            $sql="SELECT u.usu_nombre, u.usu_nombre2, u.usu_id, u.usu_apellido, r.desc_rol,td.nom_tipo_doc, u.cod_tipo_doc, u.usu_ndocumento, u.usu_correo FROM t_usuario u, t_tipodocumento td, t_rol r WHERE usu_id=$id AND td.cod_tipo_doc=u.cod_tipo_doc AND r.cod_rol=u.cod_rol ";
            $usuario=$obj->consult($sql);
            include_once '../view/usuarios/modalProfile.php';
        }

        public function getUpdateModal(){
            $obj=new UsuariosModel;
            $id=$_GET['id'];
            $sql="SELECT u.usu_nombre, u.usu_nombre2, u.usu_id, u.usu_apellido, td.nom_tipo_doc, u.cod_tipo_doc, u.usu_ndocumento, u.usu_correo FROM t_usuario u, t_tipodocumento td, t_rol r WHERE usu_id=$id AND td.cod_tipo_doc=u.cod_tipo_doc";
            $usuarios=$obj->consult($sql);
            include_once '../view/usuarios/modalUpdate.php';
        }

        public function postUpdateProfile(){
            $obj=new UsuariosModel;
            $id=$_POST['usu_id'];
            $nombre1=$_POST['usu_nombre'];
            $nombre2=$_POST['usu_nombre2'];
            $apellido=$_POST['usu_apellido'];
            $tipodoc=$_POST['cod_tipo_doc'];
            $ndoc=$_POST['usu_ndocumento'];
            $sql="SELECT usu_id, usu_ndocumento FROM t_usuario WHERE usu_ndocumento=$ndoc && usu_id=$id";
            $validate=$obj->consult($sql);
            $sql="SELECT usu_id FROM t_usuario WHERE usu_ndocumento=$ndoc";
            $validar=$obj->consult($sql);
            
           if($validate){
            $sql="UPDATE t_usuario SET usu_nombre='$nombre1',usu_nombre2='$nombre2',usu_apellido='$apellido',cod_tipo_doc=$tipodoc,usu_ndocumento=$ndoc WHERE usu_id=$id";
            $actualizar=$obj->update($sql);
            if($actualizar){
                redirect("index.php");
            }else{
                echo "Paila";
            }
           }else{
                if(mysqli_num_rows($validar)>0){
                    echo "Hay un usuario registrado con este número de documento";
                }else{
                    $sql="UPDATE t_usuario SET usu_nombre='$nombre1',usu_nombre2='$nombre2',usu_apellido='$apellido',cod_tipo_doc=$tipodoc,usu_ndocumento=$ndoc WHERE usu_id=$id";
                    $actualizar=$obj->update($sql);
                    if($actualizar){
                        redirect(getUrl("Usuarios","Usuarios","consult"));
                    }else{
                        echo "Paila";
                    }
            }
           }
        }
    }
?>