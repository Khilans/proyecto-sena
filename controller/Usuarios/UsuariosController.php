<?php
    include_once '../model/Usuarios/UsuariosModel.php';

    class UsuariosController{

        public function consult(){
            $obj=new UsuariosModel;
            $sql="SELECT usu_nombre, usu_nombre2, usu_apellido, cod_tipo_doc,usu_ndocumento, usu_correo FROM t_usuario WHERE id_estado=1";
            $usuarios=$obj->consult($sql);
            include_once '../view/usuarios/consult.php';
        }

        public function profile(){
            $obj=new UsuariosModel;
            $id=$_SESSION['user_id'];
            $sql="SELECT * FROM t_usuario WHERE usu_id=$id";
            $usuario=$obj->consult($sql);
            include_once '../view/usuarios/profile.php';
        }

        public function getUpdateProfile(){

        }

        public function postUpdateProfile(){

        }

        public function state(){

        }
    }
?>