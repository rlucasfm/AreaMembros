<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Emergência 1 - Editar Alunos </title>
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

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 


</head>	
<body>
<br>
<center>
<div class="mx-auto">
    <form method="post" class="form-inline">
        <div class="form-group">
            <label for="nome" class="col-4 col-form-label">Nome do aluno</label> 
            <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fa fa-address-book-o"></i>
                </div>
                </div> 
                <input id="nome" name="nome" placeholder="Nome" type="text" class="form-control">
            </div>
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-4 col-form-label">E-mail do aluno</label> 
            <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fa fa-address-book-o"></i>
                </div>
                </div> 
                <input id="email" name="email" placeholder="Email" type="text" class="form-control">
            </div>
            </div>
        </div>
    </form>
    <br>
    <center>
        <button class="btn btn-primary" id="submitform">Buscar</button>
    </center>    
</div>
</center>
<br><br>
<center>
    <table id="resultado" class="table"></table>
</center>

</body>

<script>
    $("#submitform").click(function() {
        $.ajax({
        url : "editarAluno/query_aluno.php",
        type : 'post',
        data : {
            nome  : $("#nome").val(),
            email : $("#email").val()
        },
        beforeSend : function(){
            $("#resultado").html("ENVIANDO...");
        }
        })
        .done(function(msg){
            $("#resultado").html(msg);
        });
    });
    </script>

</html>