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


</head>	
<body>

<div class="container-fluid">

	<nav class="navbar navbar-inverse menu">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand menu-brand" href="#" style="margin-left: 20px;">CURSOS</a>
                <a class="btn btn-danger navbar-btn" href="index.php?logout" style="float: right; margin-right:20px;">Fazer Logout</a>
                <a class="btn btn-primary navbar-btn" href="index.php?pag=paginaPrincipal.php" style="float: right; margin-right:20px;">Lista de Cursos</a>
            </div>
	    </div>
	</nav>
    <div class="row-fluid">
        <center>
            <h1>Seu ticket foi enviado com sucesso!</h1>
        </center>
    </div> <!-- end row -->
</div>

<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$texto = $_POST['texto'];

$arquivo = "
  <style type='text/css'>
  body {
  margin:0px;
  font-family:Verdane;
  font-size:12px;
  color: #666666;
  }
  a{
  color: #666666;
  text-decoration: none;
  }
  a:hover {
  color: #FF0000;
  text-decoration: none;
  }
  </style>
    <html>
        <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
            <tr>
                <td>
                    <tr>
                    <td width='500'>Nome:$nome</td>
                    </tr>
                    <tr>
                    <td width='320'>E-mail:<b>$email</b></td>
                    </tr>
                    <tr>
                    <td width='320'>Texto:<b>$texto</b></td>
                    </tr>
                </td>
            </tr>
        </table>
    </html>
  ";

  // emails para quem será enviado o formulário
  $emailenviar = "atendimento@emergencia1.com";
  $destino = $emailenviar;
  $assunto = "Contato pelo Site";

  // É necessário indicar que o formato do e-mail é html
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: '.$nome.' <$email>';
  //$headers .= "Bcc: $EmailPadrao\r\n";

  $enviaremail = mail($destino, $assunto, $arquivo, $headers);
  if($enviaremail){
  $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
  echo " <meta http-equiv='refresh' content='10;URL=contato.php'>";
  } else {
  $mgm = "ERRO AO ENVIAR E-MAIL!";
  echo "";
  }
?>

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