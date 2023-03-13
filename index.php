<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <title>Sorveteria</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-lightblue bg-dark">
          <a class="navbar-brand" href="#">BrIceCream</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Início</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Sugestões de novos sabores!
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="?page=sorveteria-consultar">Consultar</a>
                  <a class="dropdown-item" href="?page=sorveteria-cadastrar">Cadastrar</a>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-lg-12 mt-5">
                    <?php
                        include("config.php");

                        switch (@$_REQUEST["page"]) {
                            //sorveteria 
                            case 'sorveteria-cadastrar':
                              include("sorveteria-cadastrar.php");
                            break;
                            case 'sorveteria-consultar':
                              include("sorveteria-consultar.php");
                            break;
                            case 'sorveteria-salvar':
                              include("sorveteria-salvar.php");
                            break;
                            //vendedor
                            default:
                               include("main.php");
                        }   
                    ?>
                </div>
            </div>
        </div>


        <script src="js/jquery-3.5.1.slim.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>

    </body>
</html>