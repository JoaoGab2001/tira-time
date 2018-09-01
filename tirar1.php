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
	            <h5 class="col m5 white-text">Progresso: 2/4</h5>
	            <h5 class="col m7 white-text right-align"><i><b>Selecione os Goleiros</b></i></h5>
			<div class="progress white">
			    <div class="determinate green" style="width: 50%;"></div>
			</div>
		</div>
		<div class="col m12" id="backblack2">
			<div class="col m12" id="form">
				<form method="post" action="">				  				   
				    <div class="col m3 s12 push-m1 white rounded center-align"> 
				    	<label>
					    	<input type="checkbox" />
					    	<span class="black-text"> João Gabriel </span> 
					    </label>
				    </div>
				    <div class="col m3 s12 push-m1 white rounded center-align"> 
				    	<label>
					    	<input type="checkbox" />
					    	<span class="black-text"> Jarbas </span> 
					    </label>
				    </div>
				    <div class="col m3 s12 push-m1 white rounded center-align"> 
				    	<label>
					    	<input type="checkbox" />
					    	<span class="black-text"> Magno </span> 
					    </label>
				    </div>
				    <div class="col m3 s12 push-m1 white rounded center-align"> 
				    	<label>
					    	<input type="checkbox" />
					    	<span class="black-text"> Carlito </span> 
					    </label>
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