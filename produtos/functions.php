<?php

  require_once('../config.php');
  require_once(DBAPI);

  $produtos = null;
  $produto = null;

  /**
   *  Listagem de Clientes
   */
  function index() {
    global $produtos;
    $produtos = find_all('produtos');
  }

  /**
   *  Cadastro de Clientes
   */
  function add() {

    if (!empty($_POST['produtos'])) { 
      $produto = $_POST['produtos'];

      save('produtos', $produto);
      header('location: index.php');
    }
  }

  /**
   *	Atualizacao/Edicao de Cliente
  */
  function edit() {

    if (isset($_GET['id'])) {

      $id = $_GET['id'];

      if (isset($_POST['produto'])) {

        $produto = $_POST['produto'];

        update('produtos', $id, $produto);
        header('location: index.php');
      } else {

        global $produto;
        $produto = find('produtos', $id);
      } 
    } else {
      header('location: index.php');
    }
  }

  /**
   *  Visualização de um Cliente
   */
  function view($id = null) {
    global $produto;
    $produto = find('produtos', $id);
  }

  /**
   *  Exclusão de um Cliente
   */
  function delete($id = null) {

    global $produto;
    $produto = remove('produtos', $id);

    header('location: index.php');
  }

?>