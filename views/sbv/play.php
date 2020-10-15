<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Emergência 1 - Curso de Suporte Básico de Vida e DEA</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="assets/images/icons/favicon.ico">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="assets/css/estilo.css">
	<link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet">
    <link href='assets/css/rotating-card.css' rel='stylesheet'>
	<link href="https://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>	
<body>

<div class="container-fluid">

	<nav class="navbar navbar-inverse menu">
	  <div class="container-fluid">
	  	<form action="index.php" method="post" id="breadCurso">
			<input type="hidden" name="pag" value="sbv/curso.php">					
		</form>
	    <div class="navbar-header">
	      	<a class="navbar-brand menu-brand" href="index.php?pag=paginaPrincipal.php" style="margin-left: 20px;">CURSOS</a>
          	<a class="navbar-brand menu-brand" href="javascript:{}" onclick="document.getElementById('breadCurso').submit(); return false;">AULAS</a>
	    	<div class="hidden-lg hidden-md" id="logout-mobile" hidden>
				<a class="btn btn-danger navbar-btn" href="index.php?logout" style="float: right; margin-right:20px;">Sair</a>
	    	</div>
			<div class="hidden-xs hidden-sm" id="logout-desktop" hidden>
				<a class="btn btn-danger navbar-btn" href="index.php?logout" style="float: right; margin-right:20px;">Fazer Logout</a>
	    	</div>
		</div>
	    
	  </div>
	</nav>

		</div>

		<div class="container">

			<div class="row">
			  <div class="col-md-10 col-md-offset-1">
			  	<ol class="breadcrumb">				
				  <li><a href="index.php?pag=paginaPrincipal.php">Cursos</a></li>
				  <li><a href="javascript:{}" onclick="document.getElementById('breadCurso').submit(); return false;">Aulas</a></li>
				  <li class="active"><?php echo('Aula '.$_POST["aula"]) ?></li>
				</ol>
			  	<!--<div class="yt-container">
					   <iframe src="https://www.youtube.com/embed/8Pa9x9fZBtY" frameborder="0" allowfullscreen></iframe>
			    </div>-->
				<style>
					.responsive {
					width: 100%;
					height: auto;
					}
				</style>
				<div class="responsive">
				<?php
					include('views/sbv/aulas/'.$_POST["aula"].'.php');
				?>
				</div>

			    <div class="hidden-xs hidden-sm" style="margin-top: 15px;" id="botoes-desktop">

					<form method="post" action="index.php" id="proxAula">
						<input type="hidden" name="pag" value="sbv/play.php">
						<input type="hidden" name="aula" value="<?php $proxAula = intval($_POST['aula'])+1; 
																if($proxAula==13){$proxAula=12;}
																if($proxAula==15){$proxAula=14;}
																echo $proxAula;?>">                                                           
					</form>
					<form method="post" action="index.php" id="antAula">
						<input type="hidden" name="pag" value="sbv/play.php">
						<input type="hidden" name="aula" value="<?php $proxAula = intval($_POST['aula'])-1;
																if($proxAula==0){$proxAula=1;} 
																echo $proxAula;?>">                                                           
					</form>   

		            <button href="javascript:{}" onclick="document.getElementById('antAula').submit(); return false;" type="button" class="btn btn-labeled btn-danger btn-lg">
		            <i class="fa fa-fast-backward" aria-hidden="true"></i> Anterior
					</button>
		            <button href="javascript:{}" style="margin-left: 10px;" onclick="document.getElementById('proxAula').submit(); return false;" type="button" class="btn btn-labeled btn-success btn-lg">Próxima
			            <i class="fa fa-fast-forward" aria-hidden="true"></i>
			        </button>			
            	
                <button type="button" class="btn btn-labeled btn-default btn-lg" style="float: right;">


                <input type="checkbox" id="checkboxVisto">
                Marcar como completo</button>

				<script>
				$('#checkboxVisto').on('click', function(){
					var checado = $('#checkboxVisto').is(":checked");
					$.ajax({
						data: {checkbox:checado, id_curso:43052, id_aula:<?php echo $_POST['aula'] ?>, id_aluno:<?php echo $_SESSION['id_aluno'] ?>},
						type: "post",
						url: "checkPost.php",
						success: function(data){
							
						}
					})					
				})
				</script>
       
			    </div>

			    <div class="hidden-lg hidden-md" style="margin-top: 15px;" id="botoes-mobile">
            	
		            <center>
		            	<a href="javascript:{}" onclick="document.getElementById('antAula').submit(); return false;" type="button" class="btn btn-danger btn-lg">
		                <i class="fa fa-fast-backward" aria-hidden="true"></i> Anterior</a>

		            <a href="javascript:{}" onclick="document.getElementById('proxAula').submit(); return false;" type="button" class="btn btn-success btn-lg">Próximo <i class="fa fa-fast-forward" aria-hidden="true"></i>
			        </a>
            	<br>

                <button type="button" class="btn btn-default btn-lg" style="float: ;">
                <input type="checkbox" id="checkboxVisto1">
                Marcar como completo</button>
		            </center>
       
			    </div>

				<script>
					$('#checkboxVisto1').on('click', function(){
						var checado = $('#checkboxVisto1').is(":checked");
						$.ajax({
							data: {checkbox:checado, id_curso:43052, id_aula:<?php echo $_POST['aula'] ?>, id_aluno:<?php echo $_SESSION['id_aluno'] ?>},
							type: "post",
							url: "checkPost.php",
							success: function(data){
								
							}
						})					
					})
				</script>

			  </div>
			</div>		  
		</div>
		
</body>
<!-- javaScripts
    ================================================== -->
	<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="assets/js/framework.js"></script>
    <script src="assets/js/simplebar.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/funcoes.js"></script>	
	<!--<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>-->
    

	<script>
	function checkboxVer() {
		var checado = document.getElementById("checkboxVisto").checked;
	}
	function desativarCheck(){
		document.getElementById("checkboxVisto").checked=false;
	}
	function ativarCheck(){
		document.getElementById("checkboxVisto").checked=true;
	}
	function desativarCheck1(){
		document.getElementById("checkboxVisto1").checked=false;
	}
	function ativarCheck1(){
		document.getElementById("checkboxVisto1").checked=true;
	}


	<?php 
		$conexao_db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		$sqlquery = "SELECT assistido FROM aula_aluno WHERE id_aluno = '".$_SESSION['id_aluno']."' AND id_aula = '".$_POST['aula']."' AND id_curso = 43052";
		$resultado_db = $conexao_db->query($sqlquery);
		
		if($resultado_db->num_rows == 1){
			$statusAssistido=intval(($resultado_db->fetch_object())->assistido);
			if($statusAssistido == 0){ ?>
				desativarCheck(); desativarCheck1();
		<?php	}
			else{ ?>
				ativarCheck(); ativarCheck1();
		<?php	}
		}elseif($resultado_db->numrows == 0){
			$conexao_db->query("INSERT INTO aula_aluno (id_aluno, id_aula, id_curso, assistido) VALUES ('" . $_SESSION['id_aluno'] . "', '" . $_POST['aula'] . "', 43052, 0); ");
		}
	?>

	</script>

<!-- subsituir o botão voltar -->
	<script>	
		(function(window, location) {
		history.replaceState(null, document.title, location.pathname+"#!/history");
		history.pushState(null, document.title, "");

		window.addEventListener("popstate", function() {			
			if(location.hash === "#!/history") {			
				//history.replaceState(null, document.title, location.pathname);
				setTimeout(function(){
				//location.replace("index.php?pag=paginaPrincipal.php");
				document.getElementById('breadCurso').submit();
				},0);
			}
		}, false);
		}(window, location));
	</script>
	<?php include('views/scriptTicket.php'); ?>
</html>