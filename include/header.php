<?php include 'php/script.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title><?php print($titulo); ?></title>
	<link rel="stylesheet" type="text/css" href="css/materialize.css">
	<link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="shortcut icon" type="image/x-icon" href="imagenes/icono.ico" />
	<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
	<meta name="author" content="Alejandro López A.">
	<meta name="description" content='<?php print($descripcion); ?>'>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta lang="es">
	<style type="text/css">
		.text-logo-nav{
			font-family: 'Quantum';
 			src: url('fonts/Quantum.otf');
		}

		

		@media screen and (min-width: 921px) {
             .text-logo-nav span{
             	font-size: 1em;
             }

             #imagen-logo{
             	width: 60%;
             }

             .text-logo-dos{
              font-family: 'Asap Medium';
              src: url('fonts/Asap-Medium.otf');
            }


          
         }

          @media screen and (min-width: 522px) {
          	#imagen-logo{
          		width: 45%;
          	}
          	
          }

          @media screen and (min-width: 622px) {
          	#imagen-logo{
          		margin-right:20px;
          		width: 60%;
          		
          	}
      
          }

         @media screen and (max-width: 521px) {
             .text-logo-nav span{
             	font-size: 0.7em;
             }

             #imagen-logo{
             	width: 50%;
             }

             #power{
             	display: none;
             }

              #inicio{
				font-size: 0.40em;
			 }

			#logo{
				width: 10%;
			}

			#sub_title, .text_parts{
				font-size: 1.8em;
			}

			.valores{
				font-size: 1em;
			}
          
         }


	</style>
</head>
<body>
		
		<div class="navbar-fixed">
		<div id="power"></div>
		<img id="power" style="position: fixed; z-index:99; top: 0; right: 0; border: 0;" src="imagenes/power.png" alt="Power by A L X Developer">
			<nav >
				<div class="nav-wrapper grey darken-4">
					<a href="http://alx-developer.esy.es" class="brand-logo center text-logo-nav">
						<span id="logotipo" style="display: none; ">
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

			