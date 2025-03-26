<?php
require_once("Producto.php");

echo "Hola Mundo<br/>";

$request_method = $_SERVER['REQUEST_METHOD'];

//Obtenemos el PATH_INFO (por ejemplo: /producto/2)
$path = $_GET['PATH_INFO'] ?? '';
echo "PAHT_INFO: $path<br/>";
echo "Metodo: $request_method<br/>";

//Dividir el path en segmentos
$parameters = explode('/',trim($path, '/'));
$recurso = $parameters[0] ?? null;
$id = $parameters[1] ?? null;

echo "<hr><br/><br/>";

$data = json_decode(file_get_contents("php://input"),true); //Para POST y PUT

if ($recurso === 'producto'){

	switch($request_method){
		case 'GET':
			if ($id){
				echo Producto::get($id);
			} else {
				echo "Falta el ID para GET";
			}
			break;
		case 'POST':
			echo Producto::post($data);
			break;
		case 'PUT':
			echo Producto::put($data);
			break;
		case 'DELETE':
			if($id){
				echo Producto::delete($id);
			}else{
				echo "Falta el ID del Producto para el DELETE"
			}
			break;
		default:
		echo "Metodo no permitido";
	}

}else{
	echo "Recurso no valido";
}
?> 