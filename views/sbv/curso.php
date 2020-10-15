<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Emergência 1 - Curso de Suporte Básico de Vida e DEA</title>
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
<style>
.sublink{
    border: 0;
    padding: 0;
    display: inline;
    background: none;
    text-decoration: underline;
    color: blue;
}
button:hover {
    cursor: pointer;
}
</style>
<div class="container-fluid">
    <!--<img src="assets/images/topo-injetaveis.jpg" width="100%">-->

	<nav class="navbar navbar-inverse menu">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand menu-brand" href="index.php?pag=paginaPrincipal.php" style="margin-left: 20px;">CURSOS</a>
          <a class="navbar-brand menu-brand" href="#">AULAS</a>
	      <a class="btn btn-danger navbar-btn" href="index.php?logout" style="float: right; margin-right:20px;">Fazer Logout</a>
	    </div>
	    <ul class="nav navbar-nav" style="display: none;">
	      <li class="active"><a href="#">Home</a></li>
	      <li><a href="#">Link</a></li>
	      <li><a href="#">Link</a></li>
	    </ul>
	    
	  </div>
	</nav>

	    <div class="row-fluid">

            

            <div class="main-wrap">

                <div class="progress progress-striped active">
              <div class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="<?php $conexao_db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
                                                                                                $sqlquery = "SELECT * FROM aula_aluno WHERE id_aluno = '".$_SESSION['id_aluno']."' AND id_curso = 43052 AND assistido = 1";
                                                                                                $resultado_db = $conexao_db->query($sqlquery); 
                                                                                                $aulasAssistidas = $resultado_db->num_rows;
                                                                                                echo ceil(($aulasAssistidas/14)*100);?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ceil(($aulasAssistidas/14)*100); ?>%">
                <span class="sr-only">45% Complete</span>
              </div>
            </div>


            <table class="table table-striped">
                        <tr>
                            <td class="primeiro">
                                <center>
                                <form method="post" action="index.php" id="aula1">
                                    <input type="hidden" name="pag" value="sbv/play.php">
                                    <input type="hidden" name="aula" value="1">                                
                                    <a  href="javascript:{}" onclick="document.getElementById('aula1').submit(); return false;">
                                        <i class="fa fa-play-circle fa-2x" style="color: #C7CBD4; margin-top: 5px;"></i>
                                    </a>                            
                                </form>  
                                </center>                           
                            </td>
                            <td class="segundo">                                
                                <a href="javascript:{}" onclick="document.getElementById('aula1').submit(); return false;">Introdução ao Curso</a>                            
                            </td>
                            <td class="terceiro">
                                <center>
                                <i class="fa fa-check-circle fa-2x" style="color: <?php $conexao_db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
                                                                                        $sqlquery = "SELECT assistido FROM aula_aluno WHERE id_aluno = '".$_SESSION['id_aluno']."' AND id_aula = 1 AND id_curso = 43052";
                                                                                        $resultado_db = $conexao_db->query($sqlquery);
                                                                                        
                                                                                        if($resultado_db->num_rows == 1){
                                                                                            $statusAssistido=intval(($resultado_db->fetch_object())->assistido);
                                                                                            if($statusAssistido==0){
                                                                                                echo("#C7CBD4");
                                                                                            }else{
                                                                                                echo("green");
                                                                                            }                                                                                            
                                                                                        }elseif($resultado_db->num_rows == 0){
                                                                                            echo("#C7CBD4");
                                                                                        }
                                                                                    ?>;margin-top: 5px;"></i>
                                </center>
                            </td>
                      </tr>

                      <tr>
                            <td>
                                <center>
                                <form method="post" action="index.php" id="aula2">
                                    <input type="hidden" name="pag" value="sbv/play.php">
                                    <input type="hidden" name="aula" value="2">                                
                                    <a  href="javascript:{}" onclick="document.getElementById('aula2').submit(); return false;">
                                        <i class="fa fa-file-pdf-o fa-2x" style="color: #C7CBD4; margin-top: 5px;"></i>
                                    </a>                            
                                </form>
                                </center>
                            </td>
                        <td>                            
                            <a href="javascript:{}" onclick="document.getElementById('aula2').submit(); return false;">Suporte Básico de Vida</a>
                        </td>
                        <td>
                            <center>
                               <i class="fa fa-check-circle fa-2x" style="color: <?php  $sqlquery = "SELECT assistido FROM aula_aluno WHERE id_aluno = '".$_SESSION['id_aluno']."' AND id_aula = 2 AND id_curso = 43052";
                                                                                        $resultado_db = $conexao_db->query($sqlquery);
                                                                                        
                                                                                        if($resultado_db->num_rows == 1){
                                                                                            $statusAssistido=intval(($resultado_db->fetch_object())->assistido);
                                                                                            if($statusAssistido==0){
                                                                                                echo("#C7CBD4");
                                                                                            }else{
                                                                                                echo("green");
                                                                                            }                                                                                            
                                                                                        }elseif($resultado_db->num_rows == 0){
                                                                                            echo("#C7CBD4");
                                                                                        }
                                                                                    ?>;margin-top: 5px;"></i>
                            </center>
                        </td>
                      </tr>

                      <tr>
                            <td>
                                <center>
                                    <form method="post" action="index.php" id="aula3">
                                    <input type="hidden" name="pag" value="sbv/play.php">
                                    <input type="hidden" name="aula" value="3">                                
                                    <a  href="javascript:{}" onclick="document.getElementById('aula3').submit(); return false;">
                                        <i class="fa fa-play-circle fa-2x" style="color: #C7CBD4; margin-top: 5px;"></i>
                                    </a>                            
                                </form>
                                </center>
                            </td>
                        <td>
                            
                            <a href="javascript:{}" onclick="document.getElementById('aula3').submit(); return false;">Localização do coração e Fisiologia da respiração.</a>
                        </td>
                        <td>
                            <center>
                               <i class="fa fa-check-circle fa-2x" style="color: <?php  $sqlquery = "SELECT assistido FROM aula_aluno WHERE id_aluno = '".$_SESSION['id_aluno']."' AND id_aula = 3 AND id_curso = 43052";
                                                                                        $resultado_db = $conexao_db->query($sqlquery);
                                                                                        
                                                                                        if($resultado_db->num_rows == 1){
                                                                                            $statusAssistido=intval(($resultado_db->fetch_object())->assistido);
                                                                                            if($statusAssistido==0){
                                                                                                echo("#C7CBD4");
                                                                                            }else{
                                                                                                echo("green");
                                                                                            }                                                                                            
                                                                                        }elseif($resultado_db->num_rows == 0){
                                                                                            echo("#C7CBD4");
                                                                                        }
                                                                                    ?>;margin-top: 5px;"></i>
                            </center>
                        </td>
                      </tr>

                      <tr>
                            <td>
                                <center>
                                 <form method="post" action="index.php" id="aula4">
                                    <input type="hidden" name="pag" value="sbv/play.php">
                                    <input type="hidden" name="aula" value="4">                                
                                    <a  href="javascript:{}" onclick="document.getElementById('aula4').submit(); return false;">
                                        <i class="fa fa-play-circle fa-2x" style="color: #C7CBD4; margin-top: 5px;"></i>
                                    </a>                            
                                </form>
                                </center>
                            </td>
                        <td>
                            
                            <a href="javascript:{}" onclick="document.getElementById('aula4').submit(); return false;">Parada Cardíaca vs. Infarto</a>
                        </td>
                        <td>
                            <center>
                               <i class="fa fa-check-circle fa-2x" style="color: <?php  $sqlquery = "SELECT assistido FROM aula_aluno WHERE id_aluno = '".$_SESSION['id_aluno']."' AND id_aula = 4 AND id_curso = 43052";
                                                                                        $resultado_db = $conexao_db->query($sqlquery);
                                                                                        
                                                                                        if($resultado_db->num_rows == 1){
                                                                                            $statusAssistido=intval(($resultado_db->fetch_object())->assistido);
                                                                                            if($statusAssistido==0){
                                                                                                echo("#C7CBD4");
                                                                                            }else{
                                                                                                echo("green");
                                                                                            }                                                                                            
                                                                                        }elseif($resultado_db->num_rows == 0){
                                                                                            echo("#C7CBD4");
                                                                                        }
                                                                                    ?>;margin-top: 5px;"></i>
                            </center>
                        </td>
                      </tr>

                      <tr>
                            <td>
                                <center>
                                 <form method="post" action="index.php" id="aula5">
                                    <input type="hidden" name="pag" value="sbv/play.php">
                                    <input type="hidden" name="aula" value="5">                                
                                    <a  href="javascript:{}" onclick="document.getElementById('aula5').submit(); return false;">
                                        <i class="fa fa-play-circle fa-2x" style="color: #C7CBD4; margin-top: 5px;"></i>
                                    </a>                            
                                </form>
                                </center>
                            </td>
                        <td>
                            
                            <a href="javascript:{}" onclick="document.getElementById('aula5').submit(); return false;">Cadeia de Sobrevivência</a>
                        </td>
                        <td>
                            <center>
                               <i class="fa fa-check-circle fa-2x" style="color: <?php  $sqlquery = "SELECT assistido FROM aula_aluno WHERE id_aluno = '".$_SESSION['id_aluno']."' AND id_aula = 5 AND id_curso = 43052";
                                                                                        $resultado_db = $conexao_db->query($sqlquery);
                                                                                        
                                                                                        if($resultado_db->num_rows == 1){
                                                                                            $statusAssistido=intval(($resultado_db->fetch_object())->assistido);
                                                                                            if($statusAssistido==0){
                                                                                                echo("#C7CBD4");
                                                                                            }else{
                                                                                                echo("green");
                                                                                            }                                                                                            
                                                                                        }elseif($resultado_db->num_rows == 0){
                                                                                            echo("#C7CBD4");
                                                                                        }
                                                                                    ?>;margin-top: 5px;"></i>
                            </center>
                        </td>
                      </tr>

                </table>

            
                <table class="table table-striped">

                      <tr>
                            <td class="primeiro">
                                <center>
                                <form method="post" action="index.php" id="aula6">
                                    <input type="hidden" name="pag" value="sbv/play.php">
                                    <input type="hidden" name="aula" value="6">                                
                                    <a  href="javascript:{}" onclick="document.getElementById('aula6').submit(); return false;">
                                        <i class="fa fa-play-circle fa-2x" style="color: #C7CBD4; margin-top: 5px;"></i>
                                    </a>                            
                                </form>
                                </center>
                            </td>
                        <td class="segundo">                            
                            <a href="javascript:{}" onclick="document.getElementById('aula6').submit(); return false;">Como identificar uma Parada Cardiopulmonar - PCR</a>
                        </td>
                        <td class="terceiro"
                            <center>
                               <i class="fa fa-check-circle fa-2x" style="color: <?php  $sqlquery = "SELECT assistido FROM aula_aluno WHERE id_aluno = '".$_SESSION['id_aluno']."' AND id_aula = 6 AND id_curso = 43052";
                                                                                        $resultado_db = $conexao_db->query($sqlquery);
                                                                                        
                                                                                        if($resultado_db->num_rows == 1){
                                                                                            $statusAssistido=intval(($resultado_db->fetch_object())->assistido);
                                                                                            if($statusAssistido==0){
                                                                                                echo("#C7CBD4");
                                                                                            }else{
                                                                                                echo("green");
                                                                                            }                                                                                            
                                                                                        }elseif($resultado_db->num_rows == 0){
                                                                                            echo("#C7CBD4");
                                                                                        }
                                                                                    ?>;margin-top: 5px;"></i>
                            </center>
                        </td>
                      </tr>

                      <tr>
                            <td>
                                <center>
                                    <form method="post" action="index.php" id="aula7">
                                    <input type="hidden" name="pag" value="sbv/play.php">
                                    <input type="hidden" name="aula" value="7">                                
                                    <a  href="javascript:{}" onclick="document.getElementById('aula7').submit(); return false;">
                                        <i class="fa fa-play-circle fa-2x" style="color: #C7CBD4; margin-top: 5px;"></i>
                                    </a>                            
                                </form>
                                </center>
                            </td>
                        <td>
                            
                            <a href="javascript:{}" onclick="document.getElementById('aula7').submit(); return false;">Regras de RCP no Adulto e Criança e Bebê</a>
                        </td>
                        <td>
                            <center>
                               <i class="fa fa-check-circle fa-2x" style="color: <?php  $sqlquery = "SELECT assistido FROM aula_aluno WHERE id_aluno = '".$_SESSION['id_aluno']."' AND id_aula = 7 AND id_curso = 43052";
                                                                                        $resultado_db = $conexao_db->query($sqlquery);
                                                                                        
                                                                                        if($resultado_db->num_rows == 1){
                                                                                            $statusAssistido=intval(($resultado_db->fetch_object())->assistido);
                                                                                            if($statusAssistido==0){
                                                                                                echo("#C7CBD4");
                                                                                            }else{
                                                                                                echo("green");
                                                                                            }                                                                                            
                                                                                        }elseif($resultado_db->num_rows == 0){
                                                                                            echo("#C7CBD4");
                                                                                        }
                                                                                    ?>;margin-top: 5px;"></i>
                            </center>
                        </td>
                      </tr>

                      <tr>
                            <td>
                                <center>
                                 <form method="post" action="index.php" id="aula8">
                                    <input type="hidden" name="pag" value="sbv/play.php">
                                    <input type="hidden" name="aula" value="8">                                
                                    <a  href="javascript:{}" onclick="document.getElementById('aula8').submit(); return false;">
                                        <i class="fa fa-play-circle fa-2x" style="color: #C7CBD4; margin-top: 5px;"></i>
                                    </a>                            
                                </form>
                                </center>
                            </td>
                        <td>
                            
                            <a href="javascript:{}" onclick="document.getElementById('aula8').submit(); return false;">Componentes da RCP de alta qualidade</a>
                        </td>
                        <td>
                            <center>
                               <i class="fa fa-check-circle fa-2x" style="color: <?php  $sqlquery = "SELECT assistido FROM aula_aluno WHERE id_aluno = '".$_SESSION['id_aluno']."' AND id_aula = 8 AND id_curso = 43052";
                                                                                        $resultado_db = $conexao_db->query($sqlquery);
                                                                                        
                                                                                        if($resultado_db->num_rows == 1){
                                                                                            $statusAssistido=intval(($resultado_db->fetch_object())->assistido);
                                                                                            if($statusAssistido==0){
                                                                                                echo("#C7CBD4");
                                                                                            }else{
                                                                                                echo("green");
                                                                                            }                                                                                            
                                                                                        }elseif($resultado_db->num_rows == 0){
                                                                                            echo("#C7CBD4");
                                                                                        }
                                                                                    ?>;margin-top: 5px;"></i>
                            </center>
                        </td>
                      </tr>

                </table>

<!-- SEGUNDO MÓDULO -->
                <table class="table table-striped">
                        <tr>
                            <td class="primeiro">
                                <center>
                                <form method="post" action="index.php" id="aula9">
                                    <input type="hidden" name="pag" value="sbv/play.php">
                                    <input type="hidden" name="aula" value="9">                                
                                    <a  href="javascript:{}" onclick="document.getElementById('aula9').submit(); return false;">
                                        <i class="fa fa-play-circle fa-2x" style="color: #C7CBD4; margin-top: 5px;"></i>
                                    </a>                            
                                </form>  
                                </center>                           
                            </td>
                            <td class="segundo">                                
                                <a href="javascript:{}" onclick="document.getElementById('aula9').submit(); return false;">DEA - Desfibrilador Externo Automático</a>                            
                            </td>
                            <td class="terceiro">
                                <center>
                                <i class="fa fa-check-circle fa-2x" style="color: <?php $conexao_db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
                                                                                        $sqlquery = "SELECT assistido FROM aula_aluno WHERE id_aluno = '".$_SESSION['id_aluno']."' AND id_aula = 9 AND id_curso = 43052";
                                                                                        $resultado_db = $conexao_db->query($sqlquery);
                                                                                        
                                                                                        if($resultado_db->num_rows == 1){
                                                                                            $statusAssistido=intval(($resultado_db->fetch_object())->assistido);
                                                                                            if($statusAssistido==0){
                                                                                                echo("#C7CBD4");
                                                                                            }else{
                                                                                                echo("green");
                                                                                            }                                                                                            
                                                                                        }elseif($resultado_db->num_rows == 0){
                                                                                            echo("#C7CBD4");
                                                                                        }
                                                                                    ?>;margin-top: 5px;"></i>
                                </center>
                            </td>
                      </tr>

                      <tr>
                            <td>
                                <center>
                                <form method="post" action="index.php" id="aula10">
                                    <input type="hidden" name="pag" value="sbv/play.php">
                                    <input type="hidden" name="aula" value="10">                                
                                    <a  href="javascript:{}" onclick="document.getElementById('aula10').submit(); return false;">
                                        <i class="fa fa-play-circle fa-2x" style="color: #C7CBD4; margin-top: 5px;"></i>
                                    </a>                            
                                </form>
                                </center>
                            </td>
                        <td>                            
                            <a href="javascript:{}" onclick="document.getElementById('aula10').submit(); return false;">Rítimos da PCR</a>
                        </td>
                        <td>
                            <center>
                               <i class="fa fa-check-circle fa-2x" style="color: <?php  $sqlquery = "SELECT assistido FROM aula_aluno WHERE id_aluno = '".$_SESSION['id_aluno']."' AND id_aula = 10 AND id_curso = 43052";
                                                                                        $resultado_db = $conexao_db->query($sqlquery);
                                                                                        
                                                                                        if($resultado_db->num_rows == 1){
                                                                                            $statusAssistido=intval(($resultado_db->fetch_object())->assistido);
                                                                                            if($statusAssistido==0){
                                                                                                echo("#C7CBD4");
                                                                                            }else{
                                                                                                echo("green");
                                                                                            }                                                                                            
                                                                                        }elseif($resultado_db->num_rows == 0){
                                                                                            echo("#C7CBD4");
                                                                                        }
                                                                                    ?>;margin-top: 5px;"></i>
                            </center>
                        </td>
                      </tr>

                      <tr>
                            <td>
                                <center>
                                    <form method="post" action="index.php" id="aula11">
                                    <input type="hidden" name="pag" value="sbv/play.php">
                                    <input type="hidden" name="aula" value="11">                                
                                    <a  href="javascript:{}" onclick="document.getElementById('aula11').submit(); return false;">
                                        <i class="fa fa-play-circle fa-2x" style="color: #C7CBD4; margin-top: 5px;"></i>
                                    </a>                            
                                </form>
                            </center>
                            </td>
                        <td>
                            
                            <a href="javascript:{}" onclick="document.getElementById('aula11').submit(); return false;">Situações especiais do uso do DEA</a>
                        </td>
                        <td>
                            <center>
                               <i class="fa fa-check-circle fa-2x" style="color: <?php  $sqlquery = "SELECT assistido FROM aula_aluno WHERE id_aluno = '".$_SESSION['id_aluno']."' AND id_aula = 11 AND id_curso = 43052";
                                                                                        $resultado_db = $conexao_db->query($sqlquery);
                                                                                        
                                                                                        if($resultado_db->num_rows == 1){
                                                                                            $statusAssistido=intval(($resultado_db->fetch_object())->assistido);
                                                                                            if($statusAssistido==0){
                                                                                                echo("#C7CBD4");
                                                                                            }else{
                                                                                                echo("green");
                                                                                            }                                                                                            
                                                                                        }elseif($resultado_db->num_rows == 0){
                                                                                            echo("#C7CBD4");
                                                                                        }
                                                                                    ?>;margin-top: 5px;"></i>
                            </center>
                        </td>
                      </tr>




                      <tr>
                            <td>
                                <center>
                                    <form method="post" action="index.php" id="aula12">
                                    <input type="hidden" name="pag" value="sbv/play.php">
                                    <input type="hidden" name="aula" value="12">                                
                                    <a  href="javascript:{}" onclick="document.getElementById('aula12').submit(); return false;">
                                        <i class="fa fa-play-circle fa-2x" style="color: #C7CBD4; margin-top: 5px;"></i>
                                    </a>                            
                                </form>
                            </center>
                            </td>
                        <td>
                            
                            <a href="javascript:{}" onclick="document.getElementById('aula12').submit(); return false;">OVACE</a>
                        </td>
                        <td>
                            <center>
                               <i class="fa fa-check-circle fa-2x" style="color: <?php  $sqlquery = "SELECT assistido FROM aula_aluno WHERE id_aluno = '".$_SESSION['id_aluno']."' AND id_aula = 12 AND id_curso = 43052";
                                                                                        $resultado_db = $conexao_db->query($sqlquery);
                                                                                        
                                                                                        if($resultado_db->num_rows == 1){
                                                                                            $statusAssistido=intval(($resultado_db->fetch_object())->assistido);
                                                                                            if($statusAssistido==0){
                                                                                                echo("#C7CBD4");
                                                                                            }else{
                                                                                                echo("green");
                                                                                            }                                                                                            
                                                                                        }elseif($resultado_db->num_rows == 0){
                                                                                            echo("#C7CBD4");
                                                                                        }
                                                                                    ?>;margin-top: 5px;"></i>
                            </center>
                        </td>
                      </tr>                                          
                </table>

                <!-- CERTIFICADOS E CARTEIRINHA -->
                <table class="table table-striped">
                <?php   
                    $conexao_db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
                    $sqlquery = "SELECT dataInicio, dataVenc FROM aluno_curso WHERE id_aluno = '".$_SESSION['id_aluno']."' AND id_curso = 43052";
                    $resultado_db = $conexao_db->query($sqlquery); 
                    $arrayResultado = $resultado_db->fetch_array();
                    $dataVenc = $arrayResultado[1];
                    if(date("Y-m-d")>$dataVenc):
                ?>
                        <tr>
                            <td class="primeiro">
                                <center>
                                <form method="post" action="index.php" id="aula13">
                                    <input type="hidden" name="pag" value="sbv/play.php">
                                    <input type="hidden" name="aula" value="13">                                
                                    <a  href="javascript:{}" onclick="document.getElementById('aula13').submit(); return false;">
                                        <i class="fa fa-file-pdf-o fa-2x" style="color: #C7CBD4; margin-top: 5px;"></i>
                                    </a>                            
                                </form>  
                                </center>                           
                            </td>
                            <td class="segundo">                                
                                <a href="javascript:{}" onclick="document.getElementById('aula13').submit(); return false;">Certificado</a>                            
                            </td>
                            <td class="terceiro">
                                <center>
                                <i class="fa fa-check-circle fa-2x" style="color: <?php $conexao_db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
                                                                                        $sqlquery = "SELECT assistido FROM aula_aluno WHERE id_aluno = '".$_SESSION['id_aluno']."' AND id_aula = 13 AND id_curso = 43052";
                                                                                        $resultado_db = $conexao_db->query($sqlquery);
                                                                                        
                                                                                        if($resultado_db->num_rows == 1){
                                                                                            $statusAssistido=intval(($resultado_db->fetch_object())->assistido);
                                                                                            if($statusAssistido==0){
                                                                                                echo("#C7CBD4");
                                                                                            }else{
                                                                                                echo("green");
                                                                                            }                                                                                            
                                                                                        }elseif($resultado_db->num_rows == 0){
                                                                                            echo("#C7CBD4");
                                                                                        }
                                                                                    ?>;margin-top: 5px;"></i>
                                </center>
                            </td>
                      </tr>

                      <tr>
                            <td>
                                <center>
                                <form method="post" action="index.php" id="aula14">
                                    <input type="hidden" name="pag" value="sbv/play.php">
                                    <input type="hidden" name="aula" value="14">                                
                                    <a  href="javascript:{}" onclick="document.getElementById('aula14').submit(); return false;">
                                        <i class="fa fa-file-pdf-o fa-2x" style="color: #C7CBD4; margin-top: 5px;"></i>
                                    </a>                            
                                </form>
                                </center>
                            </td>
                        <td>                            
                            <a href="javascript:{}" onclick="document.getElementById('aula14').submit(); return false;">Carteirinha</a>
                        </td>
                        <td>
                            <center>
                               <i class="fa fa-check-circle fa-2x" style="color: <?php  $sqlquery = "SELECT assistido FROM aula_aluno WHERE id_aluno = '".$_SESSION['id_aluno']."' AND id_aula = 14 AND id_curso = 43052";
                                                                                        $resultado_db = $conexao_db->query($sqlquery);
                                                                                        
                                                                                        if($resultado_db->num_rows == 1){
                                                                                            $statusAssistido=intval(($resultado_db->fetch_object())->assistido);
                                                                                            if($statusAssistido==0){
                                                                                                echo("#C7CBD4");
                                                                                            }else{
                                                                                                echo("green");
                                                                                            }                                                                                            
                                                                                        }elseif($resultado_db->num_rows == 0){
                                                                                            echo("#C7CBD4");
                                                                                        }
                                                                                    ?>;margin-top: 5px;"></i>
                            </center>
                        </td>
                      </tr>

                      <?php else: ?>  
                    <tr>
                        <td>                            
                            <a href="#">Certificado e Carteirinha estarão disponíveis aqui após 7 dias do cadastro!</a>
                        </td>
                      </tr>    
                <?php endif ?> 
                 
                </table>

</div>

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
    <script src="assets/run_prettify.js"></script>
    <!-- subsituir o botão voltar -->
	<script>	
		(function(window, location) {
		history.replaceState(null, document.title, location.pathname+"#!/history");
		history.pushState(null, document.title, "");

		window.addEventListener("popstate", function() {			
			if(location.hash === "#!/history") {			
				history.replaceState(null, document.title, location.pathname);
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