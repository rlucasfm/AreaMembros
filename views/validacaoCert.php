<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Emergência 1 - Validar Certificado</title>
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
</head>	

<body>
    <span class="login100-form-title p-b-41">
        <img src="assets/images/logo-2.png" width="20%">
    </span>      
    <center>
        <form action="views/buscaCert.php" method="get">
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email"><br><br>
            <input type="submit" value="Procurar" class="btn btn-primary">
            <a href="index.php" type="button" class="btn btn-primary">Voltar</a>
        </form>
        
    </center>
</body>
<!-- javaScripts
    ================================================== -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/js/framework.js"></script>
    <script src="assets/js/simplebar.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/funcoes.js"></script>
    <script src="assets/run_prettify.js"></script>
</html>