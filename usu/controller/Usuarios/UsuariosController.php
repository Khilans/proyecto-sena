<?php
    include_once '../model/Usuarios/UsuariosModel.php';
    class UsuariosController{

        public function profile(){
            $obj=new UsuariosModel;
            $id=$_SESSION['user_id'];
            $sql="SELECT cod_tipo_doc, nom_tipo_doc FROM t_tipodocumento";
            $tipos_documentos=$obj->consult($sql);
            $sql="SELECT u.usu_nombre, u.usu_nombre2, u.usu_id, u.usu_apellido, td.nom_tipo_doc, r.desc_rol,td.nom_tipo_doc, u.cod_tipo_doc, u.usu_ndocumento, u.usu_correo FROM t_usuario u, t_tipodocumento td, t_rol r WHERE usu_id=$id AND td.cod_tipo_doc=u.cod_tipo_doc AND r.cod_rol=u.cod_rol ";
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
            $sql="SELECT usu_id, usu_ndocumento FROM t_usuario WHERE usu_id=$id";
            $validar=$obj->consult($sql);
            if($validar){
                $datos=mysqli_fetch_array($validar);
                if($ndoc==$datos['usu_ndocumento'] && $id=$datos['usu_id']){
                    $sql="UPDATE t_usuario SET usu_nombre='$nombre1',usu_nombre2='$nombre2',usu_apellido='$apellido',cod_tipo_doc=$tipodoc WHERE usu_id=$id";
                    $actualizar=$obj->update($sql);
                    if($actualizar){
                        redirect(getUrl("Usuarios","Usuarios","consult"));
                    }else{
                        echo "Error al actualizar";
                        dd($_POST);
                    }
                }else{
                    $sql="SELECT usu_id FROM t_usuario WHERE usu_ndocumento=$ndoc";
                    $validación=$obj->consult($sql);
                    if($validación){
                        echo "Duplicidad";
                    }
                }
            }
    }
}
?>