<?php

  require_once('../config.php');
  require_once(DBAPI);

  $customers = null;
  $customer = null;

  /**
   *  Listagem de Clientes
   */
  function index() {
    global $customers;
    $customers = find_all('customers');
  }

  /**
   *  Cadastro de Clientes
   */
  function add() {

    if (!empty($_POST['customer'])) {
      
      $today = 
        date_create('now', new DateTimeZone('America/Sao_Paulo'));

      $customer = $_POST['customer'];
      $customer['modified'] = $customer['created'] = $today->format("Y-m-d");
      
      save('customers', $customer);
      header('location: index.php');
    }
  }

  /**
   *	Atualizacao/Edicao de Cliente
  */
  function edit() {

    $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));

    if (isset($_GET['id'])) {

      $id = $_GET['id'];

      if (isset($_POST['customer'])) {

        $customer = $_POST['customer'];
        $customer['modified'] = $now->format("Y-m-d");

        update('customers', $id, $customer);
        header('location: index.php');
      } else {

        global $customer;
        $customer = find('customers', $id);
      } 
    } else {
      header('location: index.php');
    }
  }

  /**
   *  Visualização de um Cliente
   */
  function view($id = null) {
    global $customer;
    $customer = find('customers', $id);
  }

  /**
   *  Exclusão de um Cliente
   */
  function delete($id = null) {

    global $customer;
    $customer = remove('customers', $id);

    header('location: index.php');
  }

  function formataData ($data, $formato){
    date_default_timezone_set("America/Sao_Paulo");
    $datatemp = strtotime($data);
    $datatemp = date($formato, $datatemp); //"d/m/Y - H:i:s"
    return $datatemp;
  }
  
  function formataTelefone ($fone){
    date_default_timezone_set("America/Sao_Paulo");
    $fonetemp = "(" . substr($fone, 0, 2) . ")" . substr($fone, 2, 5) . "-" .
      substr($fone, 7);
    return $fonetemp;
  }
  //182.322.428-84
  //24.019.696/0001-66
  function formataCPF ($cpfcnpj){
    date_default_timezone_set("America/Sao_Paulo");

    $count = strlen($cpfcnpj);

    if($count == 11)
    {
      $cpf = substr($cpfcnpj, 0, 3) . "." . substr($cpfcnpj, 3, 3) . "." .
        substr($cpfcnpj, 6, 3) . "-" . substr($cpfcnpj, 9);
      return $cpf;
    }
    else if($count == 14)
    {
      $cnpj = substr($cpfcnpj, 0, 2) . "." . substr($cpfcnpj, 2, 3) . "." .
        substr($cpfcnpj, 5, 3) . "/" . substr($cpfcnpj, 8, 4) . "-" . substr($cpfcnpj, 12, 2);
      return $cnpj;
    }
    else
    {
      return "CPF/CPNJ Inválido";
    }
  }
?>