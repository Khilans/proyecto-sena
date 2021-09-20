<?php

    include_once '../model/Pqrs/PqrsModel.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    class PqrsController {
        
        public function consult(){
            $obj = new PqrsModel();

            $sql = "SELECT p.cod_pqrsf, t.desc_pqrsf_tipo, p.usu_id, e.desc_estado, p.nombre, p.correo, p.pqrsf_fecha, p.pqrsf_desc FROM t_pqrsf AS p, t_pqrsftipo AS t, t_estado AS e WHERE t.cod_pqrsf_tipo = p.cod_pqrsf_tipo AND e.id_estado = p.id_estado";
            $pqrsf = $obj->consult($sql);

            include_once '../view/Pqrs/consult.php';
        }

        public function getAnswer(){
            $obj = new PqrsModel();

            $cod_pqrsf=$_GET['id'];
            $sql="SELECT cod_pqrsf,nombre,correo  FROM t_pqrsf WHERE cod_pqrsf=$cod_pqrsf";
            $respuesta=$obj->consult($sql);

            include_once  '../view/Pqrs/Answer.php';
            
        }


        public function mail(){
            include_once 'PHPMailer/src/Exception.php';
            include_once 'PHPMailer/src/PHPMailer.php';
            include_once 'PHPMailer/src/SMTP.php';
            

            $mail=new PHPMailer();

            $cod_pqrsf=$_POST['cod_pqrsf'];
            $correo=$_POST['correo'];
            $nombre=$_POST['nombre'];
            $asunto=$_POST['asunto'];
            $desc_resp_pqrsf=$_POST['desc_resp_pqrsf'];
    

            $mensaje=$desc_resp_pqrsf;
                try{
                    $mail->SMTPDebug=2;
                    $mail->isSMTP();
                    $mail->Host="smtp.gmail.com";
                    $mail->SMTPAuth=true;
                    $mail->Username="SENATELgestion@gmail.com";
                    $mail->Password="senatel12";
                    $mail->SMTPSecura="TLS";
                    $mail->Port=587;

                    //Información del destinatario y remitente
                    //Remitente
                    $mail->setFrom("SENATELgestion@gmail.com");
                    //Destinatario
                    $mail->addAddress($correo,$nombre);
                    

                    //Contenido
                    $mail->isHTML(true);
                    $mail->Subject=$asunto;
                    $mail->Body=$mensaje;

                    //Enviar correo
                    $mail->send();

                } catch (Exception $e){
                    echo "No se pudo enviar el correo";
                    echo "ERROR: ".$mail->ErrorInfo;
                }

                $obj=new PqrsModel();

                $id=$obj->autoincrement("t_respuestapqrsf","cod_resp_pqrsf");

                $sql="INSERT INTO t_respuestapqrsf VALUES ($id,'$desc_resp_pqrsf',NOW(),$cod_pqrsf)";
                $ejecutar=$obj->insert($sql);

        }


        public function consultRes(){
            $obj = new PqrsModel();

            $sql = "SELECT r.cod_resp_pqrsf, r.desc_resp_pqrsf, r.fech_resp_pqrsf, p.cod_pqrsf FROM t_respuestapqrsf AS r, t_pqrsf AS p WHERE p.cod_pqrsf = r.cod_pqrsf";
            $respuesta = $obj->consult($sql);

            include_once '../view/Pqrs/Respuestas.php';
        }


        
    }

?>