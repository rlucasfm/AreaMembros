<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Emergência 1 - Giftcard</title>
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
    
    <link rel="stylesheet" type="text/css" href="assets/formMatricula/view.css" media="all">
    <script type="text/javascript" src="assets/formMatricula/view.js"></script>
	<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>


</head>	
<body>
    
<!-- INICIO DO FORMULÁRIO -->
<img id="top" src="assets/formMatricula/top.png" alt="">
	<div id="form_container">
	
		<h1><a>Matrícula por Giftcard</a></h1>
		<form id="matriculaGiftcard" class="appnitro"  method="post">
					<div class="form_description">
			<h2>Matrícula por Giftcard</h2>
			<p>Resgate seu giftcard para ter acesso aos cursos.</p>
		</div>						
		<ul>
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
            <li id="li_1" >
            <label class="description" for="element_3">Giftcard </label>
            <div>
                <input id="gift" name="gift" class="element text medium" type="text" maxlength="255" value=""/> 
            </div><p class="guidelines" id="guide_2"><small>Digite o código do Giftcard</small></p> 
            </li> 
            </li>
            <li class="buttons">
                <div id='status'></div>		    
                <input type="button" class="btn btn-primary" id="submit" value="Cadastrar" />
                <button type="button" class="btn btn-success" id="voltar">Voltar</button>
            </li>
		</ul>
		</form>	
	</div>
	<img id="bottom" src="assets/formMatricula/bottom.png" alt="">

    <script>
$("#submit").on("click", function(){
  var nome = $("#nome").val();
  var email = $("#email").val();
  var gift = $("#gift").val();
  
  $.ajax({
    data: {nome:nome, email:email, gift:gift},
    type: "post",
    url: "views/matriculaManual/matriculaGiftcard.php",
    success: function(data){
      $("#status").html(data);
    }
  });
});
</script>

<script>
$("#voltar").on("click", function(){
    window.location.href = 'index.php';
})
</script>
<!-- FIM DO FORMULÁRIO -->


</body>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/js/framework.js"></script>
    <script src="assets/js/simplebar.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/funcoes.js"></script>
</html>