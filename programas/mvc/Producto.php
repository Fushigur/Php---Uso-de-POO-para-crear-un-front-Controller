/*
Author: Gutierrez Perez Claudio Habraham

Date: 25/03/2025

Description:

Php - Uso de POO para crear un front Controller

Modificar el código proporcionado en la carpeta de la unidad 2, del proyecto llamado "mvc"
para que las funciones sean métodos de una clase llamada Producto. Usar una función php para llamar al método correspondiente 
de la clase Producto, dependiendo del método http usado en la solicitud
 */
<?php
	class Producto{
		
		public static function get($id){
			echo "Obtener el producto con id: $id";
		}

		public static function post($datos){
			echo "Agregar producto con los datos: <br/>";
			print_r($datos);
		}

		public static function put($datos) {
			echo "Modificar producto con los datos: <br/>";
			print_r($datos);
		}		

		public static function delete($id){
			echo "Eliminar producto por su id: $id";
		}
	    
	}
?>