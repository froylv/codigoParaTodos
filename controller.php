<?php // Incluimos el modelo
require_once('model.php');

$op = $_REQUEST[op];
if($_REQUEST[enviar]=="Enviar")
	$op = "Enviar";
 
  switch($op)
  {
    case "nuevo":
		// Incluimos la vista
		require('view_new.php');
        break;
        
    case "Enviar":
		$titulo = $_REQUEST[titulo];
		$descripcion = $_REQUEST[descripcion];
		$autor = $_REQUEST[autor];
		$code = $_REQUEST[code];
		$id_lenguaje = $_REQUEST[id_lenguaje];
		
		//SetCode($titulo, $descripcion, $autor, $code, $id_lenguaje);
		$query='INSERT INTO codes ( titulo, descripcion, autor, code, id_lenguaje) VALUES ("'.$titulo.'", "'.$descripcion.'", "'.$autor.'", "'.$code.'", "'.$id_lenguaje.'")';
		an_query($query);
		
		// Recuperamos los registros
		$items = getAllItems();
		// Incluimos la vista
		require('view.php');
	
        break;
    case "detalle":
		$id_code = $_REQUEST[id];

		// Recuperamos los registros
		$row = getOneItems($id_code);		
		
		// Incluimos la vista
		require('view_mostrar.php');
	
        break;
    default:  
		// Recuperamos los registros
		$items = getAllItems();
		// Incluimos la vista
		require('view.php');
  } // Cierra el switch





?>
