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
            $id=$_SESSION['user_id'];
            $sql="SELECT usu_nombre, usu_id, usu_nombre2, usu_apellido, usu_correo, cod_tipo_doc, usu_ndocumento, cod_rol FROM t_usuario WHERE usu_id=$id";
            $usuarios=$obj->consult($sql);
            include_once '../view/usuarios/modalUpdate.php';
        }

        public function postUpdateModal(){

        }

        public function state(){

        }
    }
?>