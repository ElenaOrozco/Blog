<?php 
require 'admin/config.php';
require 'functions.php';

$conexion = conexion($bd_config);
if ( !$conexion) {
	header ('Location: error.php');

}

$posts = obtener_post($blog_config['post_por_pagina'], $conexion);
//obtener_post();

//print_r($post);
//echo pagina_actual();

//si no hay posts
if ( !$posts) {
	header ('Location: error.php');

}

require 'views/index.view.php';


 ?>