<?php
//echo ($_GET["login"]);
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <title> App Help Desk - Login </title>

      <meta name="description" content="App Help desk">
      <meta name="author" content="KallSnake">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="shortcut icon" href="img/logo.png">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">

      <a class="navbar-brand" href="index.php">

        <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">

        App Help Desk

      </a>

    </nav>

    <div class="container">

      <div class="row">

        <div class="card-login">

          <div class="card">

            <div class="card-header text-info text-center">

              <i class="fas fa-lock fa-3x"></i>

            </div>

            <div class="card-body">


              <!-- Forma de envio dos dados (action=, method= e name=) -->
              <form action="valida_login.php" method="post">

                <div class="form-group">

                  <input name="email" type="email" class="form-control" placeholder="E-mail">

                </div>

                <div class="form-group">

                  <input name="senha" type="password" class="form-control" placeholder="Senha">

                </div>


                <!-- dando erro na tag de impressao verificar se ta abilitado
                <? if ( isset($_GET['login']) ) { ?>

                  <div class="text-danger"> 

                    Usuário ou senha inválido(s)

                  </div>
                   
                <? } ?>
  
                -->

                <?php

                if ( isset($_GET['login']) && $_GET["login"] == "erro" ) { // echo ($_GET["login"]); ?>
                
                <div class="text-danger"> 

                    Usuário ou senha inválido(s)

                </div>

                <?php } ?>



                <?php

                if ( isset($_GET['login']) && $_GET["login"] == "erro2" ) { ?>
                
                <div class="text-danger"> 

                    Faça login antes de acessar as páginas protegidas

                </div>

                <?php } ?>


                <button class="btn btn-lg btn-info btn-block" type="submit"> Entrar </button>

              </form>


            </div>

          </div>

        </div>

    </div>


    <!-- INICIO FOOTER -->
    <footer>
      
      <div class="container text-center text-dark mt-5">
        
        <strong> 

        <p> &copy;2019. Alguns direitos reservados. <a href="https://kallsnake.github.io" class="nav-link"> Por: Kall Snake </a> </p>

        </strong>

      </div>

    </footer>
    <!-- FIM FOOTER -->


  </body>


</html>
