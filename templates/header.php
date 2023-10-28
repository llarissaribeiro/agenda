<?php

include_once("config/url.php");
include_once("config/process.php");

//limpar mensagem de sessão
if (isset($_SESSION['msg'])) {
  $printMsg = $_SESSION['msg'];
  $_SESSION['msg'] = '';
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agenda de Contatos</title>

  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- FONT AWESOME - ÍCONES -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- CSS -->
  <link rel="stylesheet" href="<?= $BASE_URL ?>/css/style.css">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a class="navbar-brand" href="<?= $BASE_URL ?>index.php">
        <img src="<?= $BASE_URL ?>img/phonebook.png" alt="logo da agenda">
      </a>
      <div>
        <div class="navbar-nav">
          <a class="nav-link active" id="home-link" href="<?= $BASE_URL ?>index.php">Agenda</a>
          <a class="nav-link active" href="<?= $BASE_URL ?>createContact.php">Adicionar Contato</a>
        </div>
      </div>
    </nav>
  </header>