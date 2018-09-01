<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title> Tira Times - Sorteando Times</title>

	<?php include_once "includes/metatags.html";?>

	<link href='css/estilo-sorteia.css' type="text/css" rel="stylesheet" />
	<link rel="icon" type="imagem/png" href="imagens/icone.png" />
 
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<!-- Menu -->
<div class="navbar-fixed">
	<nav>
		<div class="nav-wrapper">
		  <a href="index.php" class="brand-logo">Tira Times</a>
		  <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
		  <ul id="nav-mobile" class="right hide-on-med-and-down">
		    <li class="waves-effect"><a href="index.php">Início</a></li>
		    <li class="waves-effect active"><a href="tirar.php">Tirar Times</a></li>
		  </ul>
		</div>
	</nav>
</div>
<ul class="sidenav" id="mobile-demo">
    <li class="active"><a href="index.php" class='ativado'>Início</a></li>
    <li><a href="tirar.php">Tirar Times</a></li>
</ul>
<!-- Fim do Menu  -->
<!-- Corpo -->
<div id="fundo">	
	<div class="row container">
		<div class="row" id="backblack"> <!-- Parte do pregresso com fundo preto transparente -->
	            <h5 class="col m5 white-text">Progresso: 4/4</h5>
	            <h5 class="col m7 white-text right-align"><i><b>Times Sorteados</b></i></h5>
			<div class="progress white">
			    <div class="determinate green" style="width: 100%;"></div>
			</div>
		</div>
		<div class="col m12" id="backblack2"> <!-- Parte preta e transparente embaixo da barra de progresso (onde engloba todos os jogadores) -->
			<div class="col m6" id="form">
				<h3 class="header white-text"> Time 1 </h3>
				<div class="col m5 s12 white rounded center-align"> 
		    		<span> Carlito </span>
		    		<span class="badge white-text rounded-badge green">GOL</span>
			    </div>
			    <div class="col m5 s12 white rounded center-align"> 
		    		<span> Luan </span>		    		
			    </div>
			    <div class="col m5 s12 white rounded center-align"> 
		    		<span> Jorge </span>
			    </div>
			    <div class="col m5 s12 white rounded center-align"> 
		    		<span> Anderson </span>
			    </div>
			    <div class="col m5 s12 white rounded center-align"> 
		    		<span> Sidney </span>
			    </div>
			</div>
			<div class="col m6" id="form">
				<h3 class="header white-text"> Time 2 </h3>
				<div class="col m5 s12 white rounded center-align"> 
		    		<span> João Afonso </span> 
		    		<span class="badge white-text green rounded-badge">GOL</span>
			    </div>
			    <div class="col m5 s12 white rounded center-align"> 
		    		<span> Jarbas </span>
			    </div>
			    <div class="col m5 s12 white rounded center-align"> 
		    		<span> João Gabriel </span>
			    </div>
			    <div class="col m5 s12 white rounded center-align"> 
		    		<span> Magno </span>
			    </div>
			    <div class="col m5 s12 white rounded center-align"> 
		    		<span> Neves </span>
			    </div>
			</div>		
		</div>		
	</div>
</div>
</body>
</html>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.min.js" ></script>