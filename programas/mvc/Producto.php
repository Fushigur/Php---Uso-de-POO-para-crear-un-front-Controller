<?php
	class Producto{
		
		public static function get($id){
			echo "Obtener el producto con id: $id";
		}

		public static function post($datos){
			echo "Agregar producto con los datos: ";
			print_r("$datos");
		}

		public static function put($satos){
			echo "Modificar producto con los datos: ";
			print_r($datos);
		}

		public static function delete($id){
			echo "Eliminar producto por su id: $id"
		}
	    
	}
?>

















