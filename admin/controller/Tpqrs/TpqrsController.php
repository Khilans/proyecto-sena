<?php
<<<<<<< HEAD
 require_once "../modelo/tipo_pqrs.php";

$tipo_pqrs=new tipo_pqrs();

$idtipo_pqrs=isset($_POST["idtipo_pqrs"])? limpiarCadena($_POST["idtipo_pqrs"]):"";
$nombre=isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";

switch ($_GET["op"])
{
  case 'guardaryeditar':
  if(empty($idtipo_pqrs))
  {
    $rspta=$tipo_pqrs->insertar($nombre);
    echo  $rspta?"tipo_pqrs  Se registro con exito":"tipo_pqrs no se pudo registrar";
  }
  else
   {
     $rspta=$tipo_pqrs->editar($idtipo_pqrs,$nombre);
     echo  $rspta?"tipo_pqrs se Actualizo con Exito !":"tipo_pqrs no se pudo Actualizar";

    }
    break;

  case 'desactivar':
        $rspta=$tipo_pqrs->desactivar($idtipo_pqrs);
        echo  $rspta?"tipo_pqrs desactivada con Exito!":"tipo_pqrs no se pudo desactivar";

      break;

  case 'activar':
           $rspta=$tipo_pqrs->activar($idtipo_pqrs);
           echo  $rspta ? "tipo_pqrs activada con Exito!":"tipo_pqrs no se pudo activar";
      break;
  case 'mostrar':
       $rspta=$tipo_pqrs->mostrar($idtipo_pqrs);
          echo  json_encode($rspta);
      break;

  case 'listar':
      $rspta=$tipo_pqrs->listar();
      $data= Array();

      while ($reg=$rspta->fetch_object())
       {
           $data[]= array(
            "0" =>($reg->condicion)?'<button  type="button" class="btn btn-warning" onclick="mostrar('.$reg->idtipo_pqrs.')"><i class="fa fa-pencil"></i></button>'.' <button class="btn btn-danger" onclick="desactivar('.$reg->idtipo_pqrs.')"><i class="fa fa-close"></i></button>':
                           					'<button type="button" class="btn btn-warning" onclick="mostrar('.$reg->idtipo_pqrs.')"><i class="fa fa-pencil"></i></button>'.' <button class="btn btn-primary" onclick="activar('.$reg->idtipo_pqrs.')"><i class="fa fa-check"></i></button>',
            "1" =>$reg->nombre,
            "2"=>($reg->condicion)?'<span class="label bg-green">Activado</span>':'<span class="label bg-red">Desactivado</span>'
           );
       }
       $results = array(
         "sEcho"=>1,
         "iTotalRecords"=>count($data),
         "iTotalDisplayRecords"=>count($data),
         "aaData"=>$data
       );

          echo json_encode($results);
        break;

}
?>

=======

    include_once '../model/Tpqrs/TpqrsModel.php';

    class TpqrsController {
 

        public function getInsert(){

            $obj = new TpqrsModel();

            $sql = "SELECT * FROM t_pqrsftipo";
            $Tipo_pqrs = $obj->consult($sql);

            include_once  '../view/Tpqrs/insert.php';
        }

        public function postInsert(){
            $obj = new TpqrsModel();
    
            $desc_pqrsf_tipo = $_POST['desc_pqrsf_tipo'];
            $id=$obj->autoincrement("t_pqrsftipo","cod_pqrsf_tipo");
            
           
            $sql="INSERT INTO t_pqrsftipo VALUES($id,'$desc_pqrsf_tipo')";
           
            $ejecutar=$obj->update($sql);
    
            if ($ejecutar) {
                $_SESSION['mensaje']="Se registró el tipo pqrsf <b>$desc_pqrsf_tipo</b> exitosamente";
                redirect(getUrl("Tpqrs","Tpqrs","consult"));
            } else {
                echo "Ops, ha ocurrido un error";
            }
        }

        public function consult(){
            
            $obj = new TpqrsModel();

            $sql = "SELECT * from t_pqrsftipo";
            $Tipo_pqrs = $obj->consult($sql);

            include_once '../view/Tpqrs/consult.php';
            
        }

        public function getUpdate(){

            $obj=new TpqrsModel();

            $cod_pqrsf_tipo=$_GET['id'];

            $sql="SELECT * FROM t_pqrsftipo WHERE cod_pqrsf_tipo=$cod_pqrsf_tipo";
            $Tipo_pqrs=$obj->consult($sql);

            include_once '../view/Tpqrs/update.php';

        }

        public function postUpdate() {

            $obj=new TpqrsModel();
            $cod_pqrsf_tipo=$_POST['cod_pqrsf_tipo'];
            $desc_pqrsf_tipo=$_POST['desc_pqrsf_tipo'];

            $sql="UPDATE t_pqrsftipo SET desc_pqrsf_tipo='$desc_pqrsf_tipo' WHERE cod_pqrsf_tipo=$cod_pqrsf_tipo";
            $ejecutar=$obj->update($sql);
    
           if ($ejecutar) {
            $_SESSION['mensaje']="Se editó el tipo de pqrsf <b>$desc_pqrsf_tipo</b> exitosamente";
               redirect(getUrl("Tpqrs","Tpqrs","consult"));
           }else{
               echo "Ops, ha ocurrido un error";
               dd($sql);
           }
        }

        public function getDelete(){
            $obj=new TpqrsModel();

            $cod_pqrsf_tipo=$_GET['id'];

            $sql="SELECT * FROM t_pqrsftipo WHERE cod_pqrsf_tipo=$cod_pqrsf_tipo";
            $Tipo_pqrs=$obj->consult($sql);

            include_once '../view/Tpqrs/delete.php';

        } 

        public function postDelete(){

            $obj=new TpqrsModel();
    
            $cod_pqrsf_tipo=$_POST['cod_pqrsf_tipo'];
            $desc_pqrsf_tipo=$_POST['desc_pqrsf_tipo'];
    
            $sql="DELETE FROM t_pqrsftipo WHERE cod_pqrsf_tipo=$cod_pqrsf_tipo";
            $ejecutar=$obj->update($sql);

            if($ejecutar) {
                $_SESSION['mensaje']="Se eliminó el tipo de pqrsf <b>$desc_pqrsf_tipo</b> exitosamente";
                redirect(getUrl("Tpqrs","Tpqrs","consult"));
            }else{
                echo "Ops, ha ocurrido un error";
                
            }
    
    
        }


    }

?>
>>>>>>> 9aecbc786d905ed820fa5b7de7ce1093466331f8
