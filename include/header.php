<?php include 'php/script.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title><?php print($titulo); ?></title>
	<link rel="stylesheet" type="text/css" href="css/materialize.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="shortcut icon" type="image/x-icon" href="imagenes/icono.ico" />
	<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
	<meta name="author" content="Alejandro López A.">
	<meta name="description" content='<?php print($descripcion); ?>'>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta lang="es">
</head>
<body style="overflow-x: hidden;">
		
		<div class="navbar-fixed">
		<div id="power"></div>
		<img id="power" style="position: fixed; z-index:99; top: 0; right: 0; border: 0;" src="imagenes/power.png" alt="Power by A L X Developer">
			<nav >
				<div class="nav-wrapper grey darken-4">
					<a href="/" class="brand-logo center text-logo-nav">
						<span class="logotipo" id="logo-official" style="display: none;">
				      	<i class="material-icons" style="margin-left: -15%; margin-right:-3px; margin-top: 0; margin-bottom:0;"><img alt="Logo A L X Developer" id="imagen-logo" src="imagenes/logo.png"  style="margin: 10px;"></i>
						 <spans style="margin-left: -13px;" >A L X D e v e l o p e r</span>
				       </span>
					</a>
				      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
					      <ul class="left hide-on-med-and-down">
						      <?php $objet = new Menu(); echo $objet->Navigation(); ?>
					      </ul>
					      
				    </div>
				  </nav>
			</div>

				<ul class="side-nav" id="mobile-demo">
				         <?php $objet = new Menu(); echo $objet->Navigation(); ?>
	      		  </ul>

			