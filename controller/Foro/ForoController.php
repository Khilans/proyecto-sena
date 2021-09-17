<?php
include_once '../model/Foro/ForoModel.php';
    class ForoController{

     
        
        public function getNewPost(){
            $obj=new ForoModel;
            $sql="SELECT * FROM t_tema";
            $temas=$obj->consult($sql);
            include_once '../view/ForoJhan/newPost.php';
        }

        public function insertNewPost(){
            $obj= new ForoModel;
            $id=$obj->autoincrement("t_foro","cod_foro");
            $usu_id=$_SESSION['user_id'];
            $titulo=$_POST['titulo_foro'];
            $descripcion=$_POST['desc_foro'];
            $imag_foro = $_FILES['imagen_foro']['name'];
            $ruta = "images/$imag_foro";
            move_uploaded_file($_FILES['imagen_foro']['tmp_name'], $ruta);
            $tema=$_POST['tema_foro'];
            $fecha_inicio=hora();
            $fecha_final=$_POST['fecha_final'];
            $sql="INSERT INTO t_foro VALUES($id,'$titulo','$descripcion','$fecha_inicio','$fecha_final','$ruta',$usu_id,$tema,1)";
            $ejecutar=$obj->insert($sql);
            if($ejecutar){
                redirect(getUrl("Foro","Foro","feed"));
            }else{
                echo "Ocurrió un error";
                dd($sql);
            }
            
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

        public function getEditForo(){
            $obj=new ForoModel;
            $foro_id=$_GET[''];
        }

        public function delete(){

        }

        

        public function feed(){
            $obj= new ForoModel;
            $sql="SELECT f.cod_foro,f.titulo_foro,f.desc_foro,f.fech_ini_foro,f.fech_fin_foro,f.imag_foro,f.usu_id,u.usu_nombre,u.usu_apellido FROM t_foro f,t_usuario u WHERE f.usu_id=u.usu_id";
            $posts=$obj->consult($sql);
            include_once '../view/ForoJhan/feed.php';
        }
    }