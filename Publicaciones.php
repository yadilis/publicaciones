<?php
require_once("conexion.php")
class Publicaciones extends conexion
{
public  function store($usuario,$descripcion,$estado,$imagen)

{
	$fecha=date('Y-m-d');
	$hora=date('H:i:s');
	
	$sql="INSERT INTO publicaciones
	(pub_usuario,
		pub_fecha,
		pub_hora,
		pub_descripcion,
		pub_estado,
		pub_imagen)
	values('$usuario',
		'$fecha',
		'$hora',
		'$descripcion',
		'$estado',
		'$imagen')RETURNING*";
		return $this->connection->query($sql);
	}
	public function last_id(){
		$result $this->conection->query("SELECT LAST_INSERT_ID() AS pub_id");
		return $result->fercg_all(MYSQLI_ASSOC);



	}
	public function show($pub_id){
		$result $this->connection->query("SELECT * FROM publicaciones where pub_id=$pub_id");
		return $result->ferch_all(MYSQLI_ASSOC);

	}



}



?>