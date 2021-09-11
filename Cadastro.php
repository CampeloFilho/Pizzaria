<!DOCTYPE html>
  <html>
    <head>
      <!-- Importar fonte do ícone do Google-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Informe ao navegador que o site é otimizado para celular-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!--Informe ao navegador para que o site use caracteres especiais-->
      <meta charset="UTF-8">
      <title>Cadastro</title>
    </head>

    <body>
        <nav>
            <div class="nav-wrapper deep-purple darken-1">
                <a href="#" class="brand-logo center">Cadastro</a>
            </div>
        </nav>
        
        <div class="container">
            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                            <label for="first_name">First Name</label>
                        </div>
                        <div class="input-field col s6">
                          <input id="last_name" type="text" class="validate">
                          <label for="last_name">Last Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                          <input disabled value="I am not editable" id="disabled" type="text" class="validate">
                          <label for="disabled">Disabled</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                          <input id="password" type="password" class="validate">
                          <label for="password">Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                          <input id="email" type="email" class="validate">
                          <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            This is an inline input field:
                            <div class="input-field inline">
                                <input id="email" type="email" class="validate">
                                <label for="email" data-error="wrong" data-success="right">Email</label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
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
      
    </body>
  </html>