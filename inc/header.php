<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CRUD com Bootstrap</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--mudamos abaixo-->
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap/bootstrap.css">

      <style>
        body {
          padding-top: 70px;
          padding-bottom: 20px;
        }

        .btn-light {
          background-color : #999999;
          color: #FFFFFF;
        }

        .btn-light:hover {
          background-color : #888888;
          color: #FFFFFF;
        }

        #actions {
          margin-top:10px;
        }

        h2 {
          margin-top:10px;
        }
      </style>

    <link rel="stylesheet" href="<?php echo BASEURL; ?>css\style.css">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css\awesome\all.css">
    <!--mudamos acima-->
</head>
<body>
  
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left: 8%">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?php echo BASEURL; ?>index.php"><i class="fas fa-house-user"></i>  Início</a>
            </li>

            <!--Dropdown de Clientes-->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-users"></i>  Clientes
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="<?php echo BASEURL; ?>customers">Gerenciar Clientes</a></li>
                <li><a class="dropdown-item" href="<?php echo BASEURL; ?>customers/add.php">Novo Cliente</a></li>
                <!--<li><hr class="dropdown-divider"></li>-->
              </ul>
            </li>

            <!--Dropdown de Produtos-->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-dolly-flatbed"></i>  Produtos
              </a>
              <ul class="dropdown-menu" aria-Labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="<?php echo BASEURL; ?>produtos">Visualizar Todos</a></li>
                  <li><a class="dropdown-item" href="<?php echo BASEURL; ?>produtos/add.php">Novo Produto</a></li>
              </ul>
            </li>
          </ul>
        </div>

  </div>
</nav>


<main class="container">
