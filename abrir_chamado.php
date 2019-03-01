<?php require_once "validador_acesso.php" ?>


<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <title> App Help Desk - Abrir Chamado </title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="shortcut icon" href="img/logo.png">

    <style>
      .card-abrir-chamado {
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

        <div class="card-abrir-chamado">

          <div class="card">

            <div class="card-header text-center text-light bg-secondary">

              <strong> Abertura de chamado </strong>

            </div>

            <div class="card-body">

              <div class="row">

                <div class="col">


                  <!-- Ínicio formulário -->
                  <form action="registra_chamado.php" method="post">

                    <div class="form-group">

                      <label> Título </label>

                      <input name="titulo" type="text" class="form-control" placeholder="Título">

                    </div>
                    
                    <div class="form-group">

                      <label> Categoria </label>

                      <select name="categoria" class="form-control">

                        <option> Criação Usuário </option>

                        <option> Impressora </option>

                        <option> Hardware </option>

                        <option> Software </option>

                        <option> Rede </option>

                      </select>

                    </div>
                    
                    <div class="form-group">

                      <label> Descrição </label>

                      <textarea name="descricao" class="form-control" rows="3"></textarea>

                    </div>

                    <div class="row mt-5">

                      <div class="col-6">

                        <a href="home.php" class="btn btn-lg btn-warning btn-block"> Voltar </a>

                      </div>

                      <div class="col-6">

                        <button class="btn btn-lg btn-info btn-block" type="submit"> Abrir </button>

                      </div>

                    </div>

                  </form>
                  <!-- Fim formulário -->



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
