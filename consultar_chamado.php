<?php require_once "validador_acesso.php" ?>

<?php

// chamados
$chamados = array();

// abrindo o arquivo.hd
// mode "r" // ler o arquivo
$arquivo = fopen('../../../app_help_desk/arquivo.hd', 'r'); 

// echo $arquivo;


do {



  $registro = fgets($arquivo);

  // echo $registro;

  $chamados[] = $registro;



} while ( !feof($arquivo) ); // feof => testa pelo fim de um arquivo (com o fim EOL => Endo Of Line)


// fechando o arquivo aberto
fclose($arquivo);


/*
echo "<pre>";
print_r($chamados);
echo "</pre>";
*/


?>


<html>
  <head>
    <meta charset="utf-8" />
    <title> App Help Desk - Consultar Chamado </title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="shortcut icon" href="img/logo.png">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">

      <a class="navbar-brand" href="home.php">

        <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">

        App Help Desk

      </a>


      <ul class="navbar-nav">
        
        <li class="nav-item">

          <a href="logoff.php" class="nav-link"> <i class="fas fa-sign-out-alt fa-2x text-danger"></i> </a>

        </li>

      </ul>
      

    </nav>

    <div class="container">

      <div class="row">

        <div class="card-consultar-chamado">

          <div class="card">

            <div class="card-header text-center text-light bg-secondary">

              <strong> Consulta de chamado </strong>

            </div>
            
            <div class="card-body">

              
              <!-- 
              <div class="card mb-3 bg-light">

                <div class="card-body">

                  <h5 class="card-title"> Título do chamado... </h5>

                  <h6 class="card-subtitle mb-2 text-muted"> Categoria </h6>

                  <p class="card-text"> Descrição do chamado... </p>

                </div>

              </div>
              -->


              <?php foreach($chamados as $chamado) { ?>



                <?php


                $chamado_dados = explode("#", $chamado);


                // print_r($chamado_dados);


                if ( $_SESSION["perfil_id"] == 2 ) {

                  //
                  if ( $_SESSION["id"] != $chamado_dados[0] ) {

                    continue;

                  }

                }



                if ( count($chamado_dados) < 3 ) {

                  continue;

                }


                /*
                echo "<pre>";
                print_r($chamado_dados);
                echo "</pre>";
                */


                ?>



                <div class="card mb-3 bg-light">

                <div class="card-body">

                  <h5 class="card-title"> <?= $chamado_dados[1] ?> </h5>

                  <h6 class="card-subtitle mb-2 text-muted"> <?= $chamado_dados[2] ?> </h6>

                  <p class="card-text"> <?= $chamado_dados[3] ?>. </p>

                </div>

              </div>

              <?php } ?>


              

              <div class="row mt-5">

                <div class="col-6">

                  <a href="home.php" class="btn btn-lg btn-warning btn-block"> Voltar </a>

                </div>

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