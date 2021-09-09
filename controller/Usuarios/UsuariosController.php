<?php
    include_once '../model/Usuarios/UsuariosModel.php';

    class UsuariosController{

        public function consult(){
            $obj=new UsuariosModel;
            $sql="SELECT u.usu_nombre, u.usu_id, u.usu_nombre2, u.usu_apellido, td.nom_tipo_doc, u.usu_ndocumento, u.usu_correo FROM t_usuario u, t_tipodocumento td WHERE id_estado=1 AND td.cod_tipo_doc=u.cod_tipo_doc ";
            $usuarios=$obj->consult($sql);
            include_once '../view/usuarios/consult.php';
        }

        public function profile(){
            $obj=new UsuariosModel;
            $id=$_SESSION['user_id'];
            $sql="SELECT * FROM t_usuario WHERE usu_id=$id";
            $usuario=$obj->consult($sql);
            include_once '../view/usuarios/Modal.php';
        }

        public function getUpdateModal(){
            $obj=new UsuariosModel;
            $id=$_GET['id'];
            $sql="SELECT u.usu_nombre, u.usu_nombre2, u.usu_id, u.usu_apellido, td.nom_tipo_doc, u.cod_tipo_doc, u.usu_ndocumento, u.usu_correo FROM t_usuario u, t_tipodocumento td WHERE usu_id=$id AND td.cod_tipo_doc=u.cod_tipo_doc ";
            $usuarios=$obj->consult($sql);
            include_once '../view/usuarios/modalUpdate.php';
        }

        public function postUpdate(){
            $obj=new UsuariosModel;
            $id=$_POST['usu_id'];
            $nombre1=$_POST['usu_nombre'];
            $nombre2=$_POST['usu_nombre2'];
            $apellido=$_POST['usu_apellido'];
            $tipodoc=$_POST['cod_tipo_doc'];
            $ndoc=$_POST['usu_ndocumento'];
            $sql="UPDATE t_usuario SET usu_nombre='$nombre1',usu_nombre2='$nombre2',usu_apellido='$apellido',cod_tipo_doc=$tipodoc,usu_ndocumento=$ndoc WHERE usu_id=$id";
            $actualizar=$obj->update($sql);
            if($actualizar){
                redirect(getUrl("Usuarios","Usuarios","consult"));
            }else{
                echo "Paila";
            }
        }

        public function getDeleteModal(){
            $obj=new UsuariosModel;
            $id=$_GET['id'];
            $sql="SELECT u.usu_nombre, u.usu_nombre2, u.usu_id, u.usu_apellido, td.nom_tipo_doc, u.cod_tipo_doc, u.usu_ndocumento, u.usu_correo FROM t_usuario u, t_tipodocumento td WHERE usu_id=$id AND td.cod_tipo_doc=u.cod_tipo_doc ";
            $usuarios=$obj->consult($sql);
            include_once '../view/usuarios/modalDelete.php';
        }

        public function postDelete(){
            $obj=new UsuariosModel;
            $id=$_GET['id'];
            $sql="UPDATE t_usuario SET id_estado=2 WHERE usu_id=$id";
            $ejecutar=$obj->update($sql);
            if($ejecutar){
                redirect(getUrl("Usuarios","Usuarios","consult"));
            }else{
                echo "Fallo al actualizar el estado";
            }
        }

        public function state(){

        }
    }