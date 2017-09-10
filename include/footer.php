
	<footer class="page-footer grey darken-4">
          <div class="container">
            <div class="row">
              <div class="col l6 s12 center">
              <img alt="Logo A L X Developer" src="imagenes/logo.png" class="center" style="width: 50px; margin: 10px;">
                <h5 class="white-text text-logo-nav center">A L X D e v e l o p e r</h5>
                <ul>
                <h5 class="white-text">Mis redes sociales</h5>
                  <li><a href="https://twitter.com/ale_developerjr" target="black"><img alt="Twitter Page" src="imagenes/twitter.png" style="width: 10%;"></a>
                  <a href="https://www.instagram.com/alejadro.lopez.arreola/" target="black"><img alt="Instagram Page" src="imagenes/instagram.png" style="width: 10%;"></a></li>
                </ul>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Menú</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="/lenguajes">Lenguajes</a></li>
                  <li><a class="grey-text text-lighten-3" href="/contacto">Contacto</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2017  <span class="text-logo-nav">A L X D e v e l o p e r</span>
            </div>
          </div>
    </footer>
	  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript">
          $( document ).ready(function(){
          $('.button-collapse').sideNav();
          $('.parallax').parallax();
          $('.materialboxed').materialbox();
          $('.carousel.carousel-slider').carousel({fullWidth: true});
         });
          $(document).ready(function(){
              var URLactual = window.location.pathname;
              if(URLactual === 'lenguajes'){
                 $("logo-official").removeClass("logotipo");
                 document.getElementById("logo-official").style.display = "block";
              } else if(URLactual === 'contacto'){
                  $("logo-official").removeClass("logotipo");
                  document.getElementById("logo-official").style.display = "block";
              }else{
                var scroll;

                $(window).scroll(function(){
                  scroll = $(window).scrollTop();
                    if(scroll >= 620){
                      $('.logotipo').css({"display": "block"});
                    } else if(scroll >= 244){
                      $('.logotipo').css({"display": "none"});
                    }
                });
              }
              


        });
      </script>

</body>
</html>