<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Emergência 1 - Matrícula</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../assets/assets/images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/estilo.css">
	<link href="../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link href='../assets/css/rotating-card.css' rel='stylesheet' />

    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="../assets/formMatricula/view.css" media="all">
    <script type="text/javascript" src="../assets/formMatricula/view.js"></script>
	<script src="../assets/js/jquery-1.10.2.js" type="text/javascript"></script>


</head>	
<body>
    
<!-- INICIO DO FORMULÁRIO -->
<img id="top" src="../assets/formMatricula/top.png" alt="">
	<div id="form_container">
	
		<h1><a>Matrícula Manual</a></h1>
		<form id="matriculaManual" class="appnitro"  method="post" action="index.php?pag=matriculaManual/matricula.php">
					<div class="form_description">
			<h2>Matrícula Manual</h2>
			<p>Matricula Manual de alunos.</p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">Nome Completo </label>
		<div>
			<input id="nome" name="nome" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_1"><small>Digite seu nome completo</small></p> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">Email </label>
		<div>
			<input id="email" name="email" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_3" >
		<label class="description" for="element_3">Cursos para cadastrar </label><br>
		<span>
			<input id="aph" name="aph" class="element radio" type="checkbox" value="1" />
                <label class="choice" for="aph">APH</label>

                <input id="injetaveis" name="injetaveis" class="element radio" type="checkbox" value="1" />
                <label class="choice" for="injetaveis">Injetáveis</label>

                <input id="aphmotora" name="aphmotora" class="element radio" type="checkbox" value="1" />
                <label class="choice" for="aphmotora">APH Motoristas</label>

                <input id="aeromedico" name="aeromedico" class="element radio" type="checkbox" value="1" />
                <label class="choice" for="aeromedico">Transporte Aeromédico</label>

                <input id="sbv" name="sbv" class="element radio" type="checkbox" value="1" />
                <label class="choice" for="sbv">SBV</label>

                <input id="instrutor" name="instrutor" class="element radio" type="checkbox" value="1" />
                <label class="choice" for="instrutor">Instrutor</label>

		</span> 
		</li>
                <li class="buttons">		    
                    <input id="saveForm" class="button_text" type="submit" name="submit" value="Cadastrar" />
                </li>
			</ul>
		</form>	
	</div>
	<img id="bottom" src="../assets/formMatricula/bottom.png" alt="">


<!-- FIM DO FORMULÁRIO -->


</body>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../assets/js/framework.js"></script>
    <script src="../assets/js/simplebar.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/funcoes.js"></script>
    <script src="../assets/run_prettify.js"></script>
</html>