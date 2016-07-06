<html>
<head>
	<title>Личный кабинет</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script src="<?=base_url()?>js/jquery-2.2.0.js"></script>
<script src="<?=base_url()?>js/jquery-ui.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<!-- My FLAT CSS -->
<link rel="stylesheet" href="<?=base_url()?>css/flat-style.css">
</head>
<body>  
  <nav class="navbar navbar-inverse navbar-fixed-top" id='flat-nav' role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
      <a class="navbar-brand" href="<?=base_url()?>">Кррост</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Главная</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Объявления<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href='<?=base_url()?>page'>Добавить</a></li>
            <li><a href='<?=base_url()?>page/editor'>Редактировать</a></li>
          </ul>
        </li>
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Новости<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href='<?=base_url()?>page/add_new'>Добавить</a></li>
            <li><a href="#">Редактировать</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-inverse navbar-right">
        
                <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">О программе<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Версия</a></li>
            <li><a href="#">Что меняется</a></li>
            <li class="divider"></li>
            <li><a href="#">Письмо разработчику</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


	<div class="container" id="flat-container">
		<div class="row">

