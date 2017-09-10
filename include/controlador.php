<?php

if (!isset($_GET['p'])) {
    $contenido   = 'include/inicio.php';
    $titulo      = 'A L X Developer';
    $descripcion = 'Mi nombre es Alejandro López Arreola, soy desarrollador Junior, conoce un poco sobre mí.';
    $palabras    = 'A L X Developer, Programación, Información, Contacto';
} else if ($_GET['p'] == 'lenguajes') {
    $contenido   = 'include/lenguajes.php';
    $titulo      = 'A L X Developer | Lenguajes de Programación';
    $descripcion = 'Mi nombre es Alejandro López Arreola, estos son los lenguajes de programación que he aprendido.';
    $palabras    = 'A L X Developer, Lenguajes, Programación, Java, Javascript, CSS3, HTML5, Android';
} else if ($_GET['p'] == 'contacto') {
    $contenido   = 'include/contacto.php';
    $titulo      = 'A L X Developer | Contacto';
    $descripcion = 'Mi nombre es Alejandro López Arreola, esta es mi información y medio de contacto.';
    $palabras    = 'A L X Developer, Contacto, Equipo, Programador, Junior, Trabajo';
} else {
    $contenido   = 'include/404.php';
    $titulo      = 'A L X Developer | Pagina no encontrada - ERROR 404';
    $descripcion = 'A L X Developer | Pagina no encontrada - ERROR 404';
    $palabras    = '';
}
