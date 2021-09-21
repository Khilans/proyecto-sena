<?php
include_once '../model/Foro/ForoModel.php';
    class ForoController{

        public function getModalDelete(){
            $obj=new ForoModel;
            $foro_id=$_GET['id'];
            $sql="SELECT * FROM t_tema";
            $temas=$obj->consult($sql);
            $sql="SELECT * FROM t_foro WHERE cod_foro=$foro_id";
            $foros=$obj->consult($sql);
            include_once '../view/ForoJhan/modalDelete.php';
            
        }

        public function postModalDelete(){
            $obj= new ForoModel;
            $id_foro=$_POST['id_foro'];
            $sql="UPDATE t_foro SET id_estado=2 WHERE cod_foro=$id_foro";
            $inhabilitar=$obj->consult($sql);
            if($inhabilitar){
                redirect(getUrl("Foro","Foro","consult"));
            }
        }

        public function consult(){
            $obj=new ForoModel;
            $sql="SELECT f.cod_foro,f.titulo_foro,f.desc_foro,f.fech_ini_foro,f.fech_fin_foro,f.imag_foro,f.id_estado,u.usu_nombre,u.usu_apellido,e.desc_estado FROM t_foro f,t_usuario u, t_estado e WHERE f.usu_id=u.usu_id AND f.id_estado=e.id_estado";
            $foros=$obj->consult($sql);
            include_once '../view/ForoJhan/consult.php';  
        }
        
        public function newPost(){
            $obj=new ForoModel;

            include_once '../view/ForoJhan/newPost.php';
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

        public function getEditForo(){
            $obj=new ForoModel;
            $foro_id=$_GET['id'];
            $sql="SELECT * FROM t_tema";
            $temas=$obj->consult($sql);
            $sql="SELECT * FROM t_foro WHERE cod_foro=$foro_id";
            $foros=$obj->consult($sql);
            include_once '../view/ForoJhan/modalUpdate.php';
        }

        public function postEditForo(){
            $obj= new ForoModel;
            $cod_foro=$_POST['id_foro'];
            $cod_tema=$_POST['cod_tema'];
            $titulo=$_POST['titulo_foro'];
            $fech_fin_foro=$_POST['fech_fin_foro'];
            $desc_foro=$_POST['desc_foro'];
            if (isset($_FILES['imag_nueva']['name'])) {
                $imag_oferta = $_FILES['imag_nueva']['name'];
                $ruta = "images/$imag_oferta";
                move_uploaded_file($_FILES['imag_nueva']['tmp_name'], $ruta);
    
                if (isset($_POST['imag_vieja'])) {
                    $imag_vieja = $_POST['imag_vieja'];
                    unlink("$imag_vieja");
                }
            
                $sql = "UPDATE t_foro SET titulo_foro='$titulo', desc_foro='$desc_foro', fech_fin_foro='$fech_fin_foro', cod_tema=$cod_tema, imag_foro='$ruta' WHERE cod_foro=$cod_foro";
    
            } else {
                $sql = "UPDATE t_foro SET titulo_foro='$titulo', desc_foro='$desc_foro', fech_fin_foro='$fech_fin_foro', cod_tema=$cod_tema  WHERE cod_foro=$cod_foro";
            }
            $ejecutar = $obj->consult($sql); 
            if($ejecutar){
                redirect(getUrl("Foro","Foro","feed"));
            }else{
                dd($sql);
            }
        }

        public function feed(){
            $obj= new ForoModel;
            $sql="SELECT * FROM t_foro ";
            $posts=$obj->consult($sql);
            include_once '../view/ForoJhan/feed.php';
        }
    }