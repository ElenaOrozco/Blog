<?php 
require 'admin/config.php';
require 'functions.php';

//cargamos o usamos la bd
$conexion = conexion($bd_config);

$id_articulo = id_articulo($_GET['id']);
//print_r($id_articulo);

if (!$conexion) {
	header ('Location: error.php');

}

//si le agregan codigo que no es
if (empty($id_articulo)) {
	header('Location: index.php');
	//echo "no empty";
}

$post = obtener_post_por_id($conexion, $id_articulo);

//print_r($post);
if (!$post) {
	header('Location: index.php');
	//echo "no hay post";
}

//print_r($post);

$post = $post[0];

require 'views/single.view.php';


 ?>