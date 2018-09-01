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
<!-- Centro -->
<div id="fundo">	
	<div class="row container">
		<div class="row" id="backblack">
	            <h5 class="col m5 white-text">Progresso: 1/4</h5>
	            <h5 class="col m7 white-text right-align"><i><b>Cadastre os Jogadores</b></i></h5>
			<div class="progress white">
			    <div class="determinate green" style="width: 25%;"></div>
			</div>
		</div>
		<div class="col m12" id="backblack2">
			<div class="col m12" id="form">
				<form method="post" action="">
					<div class="input-field col m12 s12 white-text">
			          <input id="jogador" name="jogador" type="text" class="validate white-text">
			          <label for="jogador">Insira o nome do jogador:</label>
			        </div>
					<button type="submit" class="waves-effect col m4 waves-light right btn-large green" id="botao"> Adicionar jogador </button>					
				</form>		
			</div>	
		</div>		
		<div class="col m12" id="backblack2">
			<div class="col m3 s12 push-m1 white rounded center-align"> 
				<span> João Gabriel </span> 
				<a href="#"> <i class="material-icons right green-text">close</i> </a>
				<!-- ATRIBUIR FUNÇÃO AO CLICAR NO 'X' -->
			</div>

			<div class="col m3 s12 push-m1 white rounded center-align"> 
				<span> Jarbas </span> 
				<a href="#"> <i class="material-icons right green-text">close</i> </a>
			</div>

			<div class="col m3 s12 push-m1 white rounded center-align"> 
				<span> Magno </span> 
				<a href="#"> <i class="material-icons right green-text">close</i> </a>		
			</div>

			<div class="col m3 s12 push-m1 white rounded center-align"> 
				<span> Carlito </span> 
				<a href="#"> <i class="material-icons right green-text">close</i> </a>
			</div>
			<button type="submit" class="waves-effect col m12 waves-light btn-large disabled" id="botao"> Próxima Etapa <i class="material-icons right"> arrow_forward_ios </i> </button>
		</div>		
	</div>
</div>
</body>
</html>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.min.js" ></script>