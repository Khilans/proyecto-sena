<?php
include_once '../model/Foro/ForoModel.php';
    class ForoController{
        
        public function getNewPost(){
            $obj=new ForoModel;

            include_once '../view/ForoJhan/newPost.php';
        }

        public function insertNewPost(){
            $obj= new ForoModel;
            $titulo=$_POST['titulo_foro'];
            $descripcion=$_POST['desc_foro'];
            $imagen=$_POST['imagen_foro'];
        }

        public function post(){
            $obj= new ForoModel;
            $foro_id=$_POST['foro_id'];
            $sql="SELECT f.cod_foro,f.titulo_foro,f.desc_foro,f.fech_ini_foro,f.fech_fin_foro,f.imag_foro,u.usu_nombre,u.usu_apellido FROM t_foro f, t_usuario u WHERE cod_foro=$foro_id AND f.usu_id=u.usu_id ";
            $foro=$obj->consult($sql);
            $sql="SELECT c.cod_foro_com,u.usu_nombre,c.usu_id,u.usu_apellido,c.cod_foro,c.com_foro_com,c.fech_foro_com FROM t_forocomentario c, t_usuario u WHERE cod_foro=$foro_id AND u.usu_id=c.usu_id";
            $comentarios=$obj->consult($sql);
            include_once '../view/ForoJhan/post.php';
        }

        public function sendPost(){
            
        }

        public function sendComment(){
            $obj= new ForoModel;
            $foro_id=$_POST['foro_id'];
            $usu_id=$_SESSION['user_id'];
            $fecha=date("Y/m/d h:i:sa");
            $comentario_id=$obj->autoincrement("t_forocomentario","cod_foro_com");
            $commentario=$_POST['comentario'];
            $sql="INSERT INTO t_forocomentario VALUES($comentario_id,$usu_id,$foro_id,'$commentario','$fecha')";
            $comentar=$obj->insert($sql);
            if($comentar){
                echo "SII";
            }else{
                echo $foro_id;
            }
        }

        public function deleteComment(){
            $obj=new ForoModel;
            $comentario_id=$_GET['id'];
            $sql="DELETE * FROM t_forocomentario WHERE cod_foro_com=$comentario_id";
            $eliminar=$obj->consult($sql);

        }

        public function editComment(){

        }

        public function edit(){

        }

        public function delete(){

        }

        public function feed(){
            $obj= new ForoModel;
            $sql="SELECT * FROM t_foro ";
            $posts=$obj->consult($sql);
            include_once '../view/ForoJhan/feed.php';
        }
    }