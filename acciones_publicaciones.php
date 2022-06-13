<?

require_once('Publicaaciones.php');
$Publicaciones=  new Publicaciones();
$datos=$_REQUEST;
 $datos=$datos['user'];
  $desc=$datos['desc'];
    $estado=$datos['est'];
    $img=null;


$Publicaciones->store($user;$desc,$estado,$img);
$last=$Publicaciones->last_id();
//busco el registro completo
$registro=$Publicaciones->show($last[0]['pub_id']);
echo json_encode($registro);
  
?>