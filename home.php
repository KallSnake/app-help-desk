<?php 

require_once "validador_acesso.php"; 


// print_r($_SESSION);


?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <title> App Help Desk - Página Inicial </title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="shortcut icon" href="img/logo.png">

    <style>
      .card-home {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">

      <a class="navbar-brand" href="logoff.php">

        <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">

        App Help Desk

      </a>


      <ul class="navbar-nav">
        
        <li class="nav-item">
          
          <span style="font-size: 2em;">

            <a href="logoff.php" class="nav-link"> <i class="fas fa-sign-out-alt text-danger"></i> </a>

          </span>

        </li>

      </ul>


    </nav>

    <div class="container">

      <div class="row">

        <div class="card-home">

          <div class="card">

            <div class="card-header text-center text-light bg-secondary">

              <strong> Menu </strong>

            </div>

            <div class="card-body">

              <div class="row">


                <div class="col-6 d-flex justify-content-center">


                  <a href="abrir_chamado.php">

                    <img src="img/formulario_abrir_chamado.png" width="70" height="70">

                  </a>


                </div>
                


                <div class="col-6 d-flex justify-content-center">


                  <a href="consultar_chamado.php">

                    <img src="img/formulario_consultar_chamado.png" width="70" height="70">

                  </a>


                </div>


              </div>

            </div>

          </div>

        </div>

    </div>



    <!-- INICIO FOOTER -->
    <footer>
      
      <div class="container text-md-center text-dark mt-5">
        
        <strong> 

        <p> &copy;2019. Alguns direitos reservados. <a href="https://kallsnake.github.io" class="nav-link"> Por: Kall Snake </a> </p>

        </strong>

      </div>

    </footer>
    <!-- FIM FOOTER -->

    

  </body>

</html>
