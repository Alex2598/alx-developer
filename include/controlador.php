<?php 

if (!isset($_GET['p'])) {
	$contenido = 'include/inicio.php';
	$titulo = 'A L X Developer';
	$descripcion = 'Este sitio esta fuera de servicio.';
}  else if ($_GET['p']=='lenguajes') {
	$contenido = 'include/lenguajes.php';
	$titulo = 'A L X Developer | Lenguajes de Programacion';
	$descripcion = 'Mi nombre es Alejandro López Arreola, estos son los lenguajes de programación que domino.';
} else if ($_GET['p']=='contacto') {
	$contenido = 'include/contacto.php';
	$titulo = 'A L X Developer | Contacto';
	$descripcion = 'Mi nombre es Alejandro López Arreola, puedes comunicarte conmigo y resolvere tus dudas lo antes posible.';
} else {
	$contenido = 'include/404.php';
	$titulo = 'A L X Developer | Pagina no encontrada - ERROR 404';
}

?>