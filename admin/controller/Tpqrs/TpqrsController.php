<?php
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

