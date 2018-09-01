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
	            <h5 class="col m5 white-text">Progresso: 3/4</h5>
	            <h5 class="col m7 white-text right-align"><i><b>Avalie os Jogadores</b></i></h5>
			<div class="progress white">
			    <div class="determinate green" style="width: 75%;"></div>
			</div>
		</div>
		<div class="col m12" id="backblack2"> <!-- Parte preta e transparente embaixo da barra de progresso (onde engloba todos os jogadores) -->
			<div class="col m12" id="form">
				<form method="post" action="">				  				   
				    <div class="col m4 s12 push-m2 white rounded center-align"> <!-- Div que engloba os jogadores -->
			    		<span> João Gabriel </span> 
				    	<i class="material-icons right green-text">star_border</i> 
				    	<!-- QUANDO AVALIAR O JOGADOR MUDAR O 'START_BORDER' PARA 'STAR' -->
				    	<i class="material-icons right green-text">star_border</i>
				    	<i class="material-icons right green-text">star_border</i>
				    </div>
				    <div class="col m4 s12 push-m2 white rounded center-align"> 
			    		<span> Jarbas </span> 
				    	<i class="material-icons right green-text">star_border</i>
				    	<i class="material-icons right green-text">star_border</i>
				    	<i class="material-icons right green-text">star_border</i>
				    </div>
				    <div class="col m4 s12 push-m2 white rounded center-align"> 
			    		<span> Magno </span> 
				    	<i class="material-icons right green-text">star_border</i>
				    	<i class="material-icons right green-text">star_border</i>
				    	<i class="material-icons right green-text">star_border</i>
				    </div>
				    <div class="col m4 s12 push-m2 white rounded center-align"> 
			    		<span> Carlito </span> 
				    	<i class="material-icons right green-text">star_border</i>
				    	<i class="material-icons right green-text">star_border</i>
				    	<i class="material-icons right green-text">star_border</i>
				    </div>
				    <div class="col m4 s12 push-m2 white rounded center-align"> 
			    		<span> João Gabriel </span> 
				    	<i class="material-icons right green-text">star_border</i>
				    	<i class="material-icons right green-text">star_border</i>
				    	<i class="material-icons right green-text">star_border</i>
				    </div>
				    <div class="col m4 s12 push-m2 white rounded center-align"> 
			    		<span> Jarbas </span> 
				    	<i class="material-icons right green-text">star_border</i>
				    	<i class="material-icons right green-text">star_border</i>
				    	<i class="material-icons right green-text">star_border</i>
				    </div>
				    <div class="col m4 s12 push-m2 white rounded center-align"> 
			    		<span> Magno </span> 
				    	<i class="material-icons right green-text">star_border</i>
				    	<i class="material-icons right green-text">star_border</i>
				    	<i class="material-icons right green-text">star_border</i>
				    </div>
				    <div class="col m4 s12 push-m2 white rounded center-align"> 
			    		<span> Carlito </span> 
				    	<i class="material-icons right green-text">star_border</i>
				    	<i class="material-icons right green-text">star_border</i>
				    	<i class="material-icons right green-text">star_border</i>
				    </div>	
				    <div class="col m4 s12 push-m2 white rounded center-align"> 
			    		<span> João Gabriel </span> 
				    	<i class="material-icons right green-text">star_border</i>
				    	<i class="material-icons right green-text">star_border</i>
				    	<i class="material-icons right green-text">star_border</i>
				    </div>
				    <div class="col m4 s12 push-m2 white rounded center-align"> 
			    		<span> Jarbas </span> 
				    	<i class="material-icons right green-text">star_border</i>
				    	<i class="material-icons right green-text">star_border</i>
				    	<i class="material-icons right green-text">star_border</i>
				    </div>
				    <div class="col m4 s12 push-m2 white rounded center-align"> 
			    		<span> Magno </span> 
				    	<i class="material-icons right green-text">star_border</i>
				    	<i class="material-icons right green-text">star_border</i>
				    	<i class="material-icons right green-text">star_border</i>
				    </div>
				    <div class="col m4 s12 push-m2 white rounded center-align"> 
			    		<span> Carlito </span> 
				    	<i class="material-icons right green-text">star_border</i>
				    	<i class="material-icons right green-text">star_border</i>
				    	<i class="material-icons right green-text">star_border</i>
				    </div>	
				    <div class="col m4 s12 push-m2 white rounded center-align"> 
			    		<span> João Gabriel </span> 
				    	<i class="material-icons right green-text">star_border</i>
				    	<i class="material-icons right green-text">star_border</i>
				    	<i class="material-icons right green-text">star_border</i>
				    </div>
				    <div class="col m4 s12 push-m2 white rounded center-align"> 
			    		<span> Jarbas </span> 
				    	<i class="material-icons right green-text">star_border</i>
				    	<i class="material-icons right green-text">star_border</i>
				    	<i class="material-icons right green-text">star_border</i>
				    </div>
				    <div class="col m4 s12 push-m2 white rounded center-align"> 
			    		<span> Magno </span> 
				    	<i class="material-icons right green-text">star_border</i>
				    	<i class="material-icons right green-text">star_border</i>
				    	<i class="material-icons right green-text">star_border</i>
				    </div>
				    <div class="col m4 s12 push-m2 white rounded center-align"> 
			    		<span> Carlito </span> 
				    	<i class="material-icons right green-text">star_border</i>
				    	<i class="material-icons right green-text">star_border</i>
				    	<i class="material-icons right green-text">star_border</i>
				    </div>			  
						<button type="submit" class="waves-effect col m12 s12 waves-light btn-large green" id="botao"> Próxima Etapa <i class="material-icons right"> arrow_forward_ios </i> </button>
				</form>		
			</div>	
		</div>		
	</div>
</div>
</body>
</html>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.min.js" ></script>