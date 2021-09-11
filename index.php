<!DOCTYPE html>
  <html>
    <head>
      <!-- Importar fonte do ícone do Google-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Informe ao navegador que o site é otimizado para celular-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!--Informa ao navegador para usar palavras especiais-->
      <meta charset="UTF-8"/>
      <title>Home - Raimundo Nonato</title>
    </head>

    <body>
        <nav>
            <div class="nav-wrapper deep-purple darken-1">
                <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li><a href="Cadastro.php">Cadastro</a></li>
                    <li><a href="Promocoes.html">Promoções</a></li>
                    <li><a href="Cardapio.php">Cardápio</a></li>
                </ul>
            </div>
        </nav>
        
        <div class="carousel">
            <a class="carousel-item" href="#one!"><img src="img/Pizza01.png"></a>
            <a class="carousel-item" href="#two!"><img src="img/Pizza02.png"></a>
            <a class="carousel-item" href="#three!"><img src="img/Pizza03.png"></a>
            <a class="carousel-item" href="#four!"><img src="img/Pizza04.png"></a>
            <a class="carousel-item" href="#five!"><img src="img/Pizza05.png"></a>
        </div>
            
        <footer class="page-footer deep-purple darken-1">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">EEEP Joaquim Antônio Albano</h5>
                <p class="grey-text text-lighten-4">Aluno: Raimundo Nonato</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Contatos</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Whatsapp: 85991297998</a></li>
                  <li><a class="grey-text text-lighten-3" src="mailto:campelofilho013@gmail.com">E-mail</a></li>
                  <li><a class="grey-text text-lighten-3" href="https://www.instagram.com/campelofilho_/">Instagram</a></li>
                  <li><a class="grey-text text-lighten-3" href="https://m.facebook.com/campelo.filho.52">Facebook</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Todos os direitos reservados: Raimundo Nonato
             </div>
          </div>
        </footer>
        
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script>
            $(document).ready(function(){
            $('.carousel').carousel();
            });
        </script>
        
    </body>
  </html>