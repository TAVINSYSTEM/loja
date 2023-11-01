<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title><?= $configuration['app_name'] ?: 'Super Loja' ?></title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" type="image/png" href="<?= base_url(); ?>assets/img/favicon.png"/>
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-responsive.min.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/matrix-style.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/matrix-media.css" />
  <link href="<?= base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/fullcalendar.css" />
  <?php if ($configuration['app_theme'] == 'white') { ?>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/tema.css" />
  <?php } ?>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
  <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery-1.12.4.min.js"></script>
  <script type="text/javascript" src="<?= base_url(); ?>assets/js/shortcut.js"></script>
  <script type="text/javascript" src="<?= base_url(); ?>assets/js/funcoesGlobal.js"></script>

 
</head>

<body>
  <!--Header-part-->
  <div id="header">
    <h1><a href=""> <?= $configuration['app_name'] ?: 'MINHA LOJA' ?> </a></h1>
  </div>
  <!--close-Header-part-->
  <!--top-Header-menu-->
  <div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
     
     
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-user-cog"></i> <?= $this->session->userdata('nome') ?> <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li class=""><a title="Meu Perfil" href="<?= site_url('mapos/minhaConta'); ?>"><i class="fas fa-user"></i> <span class="text">Meu Perfil</span></a></li>
          <li class="divider"></li>
          <li class=""><a title="Sair do Sistema" href="<?= site_url('login/sair'); ?>"><i class="fas fa-sign-out-alt"></i> <span class="text">Sair do Sistema</span></a></li>
        </ul>
      </li>
    </ul>
  </div>
  <!--start-top-serch-->
  <div id="search">
    <form action="<?= site_url('mapos/pesquisar') ?>">
      <input type="text" name="termo" placeholder="Pesquisar..." />
      <button type="submit" class="tip-bottom" title="Pesquisar"><i class="fas fa-search fa-white"></i></button>
    </form>
  </div>
  <!--close-top-serch-->
