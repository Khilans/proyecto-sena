<?php
    include_once '../model/Usuarios/UsuariosModel.php';
    use PHPMAILER\PHPMAILER\PHPMailer;
    use PHPMAILER\PHPMAILER\Exception;
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
            $sql="SELECT cod_tipo_doc, nom_tipo_doc FROM t_tipodocumento";
            $tipos_documentos=$obj->consult($sql);
            $sql="SELECT u.usu_nombre, u.usu_nombre2, u.usu_id, u.usu_apellido, td.nom_tipo_doc, r.desc_rol,td.nom_tipo_doc, u.cod_tipo_doc, u.usu_ndocumento, u.usu_correo FROM t_usuario u, t_tipodocumento td, t_rol r WHERE usu_id=$id AND td.cod_tipo_doc=u.cod_tipo_doc AND r.cod_rol=u.cod_rol ";
            $usuario=$obj->consult($sql);
            include_once '../view/usuarios/modalProfile.php';
        }

        public function getUpdateModal(){
            $obj=new UsuariosModel;
            $id=$_GET['id'];
            $sql="SELECT cod_tipo_doc, nom_tipo_doc FROM t_tipodocumento";
            $tipos_documentos=$obj->consult($sql);
            $sql="SELECT u.usu_nombre, u.usu_nombre2, u.usu_id, u.usu_apellido, td.nom_tipo_doc, u.cod_tipo_doc, u.usu_ndocumento, u.usu_correo FROM t_usuario u, t_tipodocumento td WHERE u.usu_id=$id AND td.cod_tipo_doc=u.cod_tipo_doc ";
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

        
        public function mail(){
            include_once 'PHPMailer/src/Exception.php';
            include_once 'PHPMailer/src/PHPMailer.php';
            include_once 'PHPMailer/src/SMTP.php';
            $i=0;
            $mail=new PHPMailer();
            $mensaje= "<p>0101110101101010010101</p>";
                try{
                    $mail->SMTPDebug=2;
                    $mail->isSMTP();
                    $mail->Host="smtp.gmail.com";
                    $mail->SMTPAuth=true;
                    $mail->Username="lauracrud908@gmail.com";
                    $mail->Password="lauracrud";
                    $mail->SMTPSecura="TLS";
                    $mail->Port=587;

                    //Información del destinatario y remitente
                    //Remitente
                    $mail->setFrom("lauracrud908@gmail.com");
                    //Destinatario
                    $mail->addAddress("jjmarin465@misena.edu.co");
                    $mail->addAddress("jcmarroquin6@misena.edu.co");
                    $mail->addAddress("jsrodriguez3032@misena.edu.co");
                    $mail->addAddress("sebibof@gmail.com");

                    //Contenido
                    $mail->isHTML(true);
                    $mail->Subject="111110000010101010101010101010000011110010101110001011001001";
                    $mail->Body=$mensaje;

                    //Enviar correo
                    $mail->send();

                } catch (Exception $e){
                    echo "No se pudo enviar el correo";
                    echo "ERROR: ".$mail->ErrorInfo;
                }
        }
    }