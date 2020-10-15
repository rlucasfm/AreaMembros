<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Emergência 1 - Cursos Online</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="assets/assets/images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="assets/css/estilo.css">
	<link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <link href='assets/css/rotating-card.css' rel='stylesheet' />

	<link href="https://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="assets/form/view.css" media="all">
    <script type="text/javascript" src="assets/form/view.js"></script>
</head>	

<body>

<div class="container-fluid">

	<nav class="navbar navbar-inverse menu">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand menu-brand" href="#" style="margin-left: 20px;">CURSOS</a>
                <a class="btn btn-danger navbar-btn" href="index.php?logout" style="float: right; margin-right:20px;">Fazer Logout</a>
                <a class="btn btn-primary    navbar-btn" href="index.php?pag=paginaPrincipal.php" style="float: right; margin-right:20px;">Lista de Cursos</a>
            </div>
	    </div>
	</nav>

    <div class="row-fluid">
        <img id="top" src="assets/form/top.png" alt="">
        <div id="form_container">
            <form id="form_suporte" class="appnitro"  method="post" action="index.php?pag=enviar.php">
                <div class="form_description">
                    <h2>Fale conosco</h2>
                    <p>Envia uma mensagem para o nosso suporte!</p>
                </div>						
                <ul >                
                <li id="li_1" >
                    <label class="description" for="nome">Nome </label>
                    <div>
                        <input id="nome" name="nome" class="element text medium" type="text" maxlength="255" value=""/> 
                    </div>
                    <p class="guidelines" id="guide_1"><small>Digite seu nome completo</small></p> 
                </li>		
                <li id="li_2" >
                    <label class="description" for="email">Email </label>
                    <div>
                        <input id="email" name="email" class="element text medium" type="text" maxlength="255" value=""/> 
                    </div> 
                </li>		
                <li id="li_3" >
                    <label class="description" for="texto">O que você precisa? </label>
                    <div>
                        <textarea id="texto" name="texto" class="element textarea large"></textarea> 
                    </div> 
                </li>
                
            <li class="buttons">			    
                <input id="saveForm" class="button_text" type="submit" name="submit" value="Enviar" />
            </li>
                </ul>
            </form>	
            <div id="footer">
            
            </div>
        </div>
        <img id="bottom" src="assets/form/bottom.png" alt="">
    </div> <!-- end row -->
</div>


</body>
<!-- javaScripts
    ================================================== -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/js/framework.js"></script>
    <script src="assets/js/simplebar.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/funcoes.js"></script>
</html>