<section>
	<div class="parallax-container">
           <div class="container grey darken-4 white-text center" style="position: relative; top: 25%;">
                <h1 class="text_parts" style="padding: 15px;">¿Te puedo ayudar?</h1>
            </div>
      			     <div class="parallax"><img src="imagenes/img4.png"></div>
    </div>
    <div class="container">
    	<div class="row">
			<h2 class="center">Preguntame lo que quieras!</h2>
      <a href="#developers"><h4 class="center">¿Ya eres desarrollador?</h4></a>
			<form  id="form">
                    <div class="row">
                      <div class="input-field col s6">
                        <input placeholder="Nombre" id="name" name="name" type="text" class="validate">
                        <label for="name">Nombre</label>
                      </div>
                      <div class="input-field col s6">
                        <input placeholder="Correo electronico" id="email" name="email" type="email" class="validate">
                        <label for="email" data-error="Correo electronico incorrecto" data-success="Correo electronico correcto">Correo electronico</label>
                        <blockquote style="border-left: 5px solid #212121;">Te recomiendo poner un correo electronico activo, ya que allí recibiras mi respuesta. <i class="em em-wink"></i></blockquote>
                        <p></p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <textarea placeholder="Escriba su mensaje" id="message" name="message" class="materialize-textarea"></textarea>
                        <label for="message">Escriba su mensaje</label>
                      </div>
                    </div>
                    
                    <input class="btn waves-effect waves-light grey darken-4 " type="button" onclick="javascript:SendMessage();" value="Enviar">
                  </form>

    		<h2 class="center">También puedes encontrarme en...</h2>
    		<p class="center"><a href="https://twitter.com/ale_developerjr" target="black"><img align="Twitter Page" src="imagenes/twitter.png"></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.instagram.com/alejadro.lopez.arreola/" target="black"><img alt="Instagram Page" src="imagenes/instagram.png"></a></p>


    	</div>

     

      <div id="modal2" class="modal">
            <div class="modal-content">
              <h4>Tu mensaje me ha sido enviado correctamente.</h4>
              <h5>Espera mi respuesta muy pronto. Revisa tu correo electronico en unas horas.</h5>
            </div>
            <div class="modal-footer">
              <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
              
            </div>
        </div>

        <div id="modal3" class="modal">
            <div class="modal-content">
              <h4>Por favor, completa todos los campos.</h4>
            </div>
            <div class="modal-footer">
              <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
             </div>
        </div>
    </div>

    <script type="text/javascript">


          function validarEmail( email ) {
           expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
          if ( !expr.test(email) ){
            return false;
          } else{
            return true;
          }
          }
          
          function SendMessage(){

            nombre = document.getElementById('name').value;
            correo = document.getElementById('email').value;
            mensaje = document.getElementById('message').value;

            if (nombre.length == 0 || correo.length == 0 || mensaje.length == 0) {
              $('#modal3').modal('open');
            } else if(!validarEmail(correo)){
              alert("Por favor, ingrese correo electronico valido.");
            } else{
              $.ajax({
                type: 'POST',
                url: 'php/send.php',
                data: $('#form').serialize(),


                success:function(respuesta){
                    if (respuesta==0) {
                        alert("Variables no definidas.")
                    } else  if(respuesta==1){
                      $('#modal2').modal('open');
                        document.getElementById("form").reset();
                    } else if(respuesta==2){
                        alert("Var. correo no definida.");
                    } else{
                      alert("Otro error "+respuesta);
                    }
                }


            });
            }

          }

        </script>
</section>

<section>
   <div class="parallax-container"  id="developers">
            <div class="container  grey darken-4 white-text center" style="position: relative; top: 25%;">
              <h2 style="padding: 15px;" class="text_parts">Para desarrolladores</h2>
            </div>
            <div class="parallax"><img  src="imagenes/img6.jpg"></div>
      </div>

      <div class="container">
        <h2 class="center">¿Eres programador Junior?</h2>
        
       <div class="row">
          <div class="col s12 m6">
              <h4 class="center">Puedes trabajar conmigo y juntos formar un equipo.</h4>
              <p style="text-align: justify;">Si tienes conocimientos en alguno de los <a href="/lenguajes">lenguajes</a> 
              que yo conozco y estas interezado en trabajar conmigo, 
              enviame un correo en el apartado de arriba con una descripción
              del tiempo que tienes como programdor y los lenguajes que sabes,
              así como algunas de las herramientas que usas para programar.
              </p>
          </div>

          <div class="col s12 m6">
            <h2 class="header">C.A.R. Hoare</h2>
              <div class="card horizontal">
                <div class="card-image">
                  <img alt="C.A.R. Hoare" src="imagenes/p1.jpg">
                </div>
                <div class="card-stacked">
                  <div class="card-content">
                    <p style="text-align:justify;">Hay dos formas de construir un diseño de software. Una forma es hacerlo tan simple que es obvio que no hay deficiencias. Y la otra es hacerlo tan complicado que no hay deficiencias obvias.</p>
                  </div>
                  <div class="card-action">
                    <a class="black-text" href="https://es.wikipedia.org/wiki/C._A._R._Hoare" target="black">Leer más</a>
                  </div>
                </div>
              </div>
          </div>
       </div>
      </div>
</section>

