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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 


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

	<nav class="navbar navbar-inverse menu">
        <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand menu-brand" href="#" style="margin-left: 20px;">CURSOS</a>            
            <a class="btn btn-danger navbar-btn" href="index.php?logout" style="float: right; margin-right:20px;">Fazer Logout</a>
            <!--<a class="btn btn-primary    navbar-btn" href="index.php?pag=ticket.php" style="float: right; margin-right:20px;">Fale conosco</a>-->
            </div>
            <ul class="nav navbar-nav" style="display: none;">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            </ul>
	    </div>
	</nav>
    <div class="row-fluid">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="col-md-4 col-sm-6">
                <div class="card-container <?php 
                                            $conexao_db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
                                            $sqlquery = "SELECT * FROM aluno_curso WHERE id_aluno = '".$_SESSION['id_aluno']."' AND id_curso = 44374";
                                            $resultado_db = $conexao_db->query($sqlquery); 
                                            $dataV = $resultado_db->fetch_array()[6];
                                            
                                            $date = date_create($dataV);
                                            date_add($date, date_interval_create_from_date_string('365 days'));
                                            $data2anos = strval(date_format($date, 'Y-m-d'));

                                            if($resultado_db->num_rows == 0 or date("Y-m-d")>$data2anos){
                                                echo "manual-flip";
                                            }

                                            ?>">
                    <div class="card">
                        <div class="front">
                            <div class="cover">
                                <img src="assets/images/rotating_card_thumb2.png"/>
                            </div>
                            <div class="user">
                                <img class="img-circle" src="assets/images/rotating_card_profile3.png"/>
                            </div>
                            <div class="content">
                                <div class="main">
                                    <h3 class="name">CURSO DE APH</h3>
                                    <p class="profession"><b>Instrutor</b>: Reneclei de Sousa</p>
                                    <p class="text-center">Neste Curso Você vai aprender os principais protocolos nacionais e internacionais que regem o APH - Atendimento Pré-Hospitalar</p>
                                </div>
                                <div class="footer">
                                    <?php if($resultado_db->num_rows > 0 and date("Y-m-d")<$data2anos){
                                            echo('<i class="fa fa-mail-forward"></i>ABRIR CURSO');}
                                        else{
                                            echo('<a href="https://cursodeaph.com/online/" class="btn btn-simple" >
                                                    <i class="fa fa-mail-forward"></i> CONHECER CURSO
                                                </a>');                                        
                                        } ?>
                                </div>
                            </div>
                        </div> <!-- end front panel -->
                        <div class="back">
                            <div class="header">
                                <h5 class="motto">"Emergência 1 Treinamentos"</h5>
                            </div>
                            <div class="content">
                                <div class="main">
                                    <h4 class="text-center">CURSO DE APH</h4>
                                    <p class="text-center">Para entrar no grupo de alunos no telegram
                                    <br>
                                    <a href="https://t.me/emergencia_1" style="color: blue;">>> Clique Aqui <<</a></p>
                                    <div class="stats-container">
                                        <div class="stats">
                                            <h4>5</h4>
                                            <p>Módulos</p>
                                        </div>
                                        <div class="stats">
                                            <h4>41</h4>
                                            <p>Aulas</p>
                                        </div>
                                        <div class="stats">
                                            <h4>25.802</h4>
                                            <p>Alunos</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="footer">
                                <div class="social-links text-center">
                                    <center>
                                        <!-- Indicates a successful or positive action -->
                                        <form method="post" action="index.php">
                                            <input type="hidden" name="pag" value="aph/curso.php">
                                            <input type="submit" class="btn btn-success" value="Acessar Aulas">
                                        </form>
                                    </center>
                                </div>
                            </div>
                        </div> <!-- end back panel -->
                    </div> <!-- end card -->
                </div> <!-- end card-container -->
            </div> <!-- end col sm 3 -->

            <!-- NOVO CARD -->
            <div class="col-md-4 col-sm-6">
                <div class="card-container <?php 
                                            $conexao_db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
                                            $sqlquery = "SELECT * FROM aluno_curso WHERE id_aluno = '".$_SESSION['id_aluno']."' AND id_curso = 48880";
                                            $resultado_db2 = $conexao_db->query($sqlquery); 

                                            $dataV2 = $resultado_db2->fetch_array()[6];
                                            
                                            $date2 = date_create($dataV2);
                                            date_add($date2, date_interval_create_from_date_string('365 days'));
                                            $data2anos2 = strval(date_format($date2, 'Y-m-d'));

                                            if($resultado_db2->num_rows == 0 or date("Y-m-d")>$data2anos2){
                                                echo "manual-flip";
                                            }

                                            ?>">
                    <div class="card">
                        <div class="front">
                            <div class="cover">
                                <img src="assets/images/rotating_card_thumb.png"/>
                            </div>
                            <div class="user">
                                <img class="img-circle" src="assets/images/icon-inje.jpg"/>
                            </div>
                            <div class="content">
                                <div class="main">
                                    <h3 class="name">CURSO DE INJETÁVEIS</h3>
                                    <p class="profession"><b>Instrutora</b>: Renata de Sousa</p>
                                    <p class="text-center"> Neste curso você irá aprender como aplicar injetáveis e o cálculo de medicações</p>
                                </div>
                                <div class="footer">
                                    <?php if($resultado_db2->num_rows > 0 and date("Y-m-d")<$data2anos2 ){
                                            echo('<i class="fa fa-mail-forward"></i>ABRIR CURSO');}
                                        else{
                                            echo('<a href="https://esquematiza.com.br/injetaveis/top/" class="btn btn-simple" >
                                                    <i class="fa fa-mail-forward"></i> CONHECER CURSO
                                                </a>');                                        
                                    } ?>
                                </div>
                            </div>
                        </div> <!-- end front panel -->
                        <div class="back">
                            <div class="header">
                                <h5 class="motto">"Emergência 1 Treinamentos"</h5>
                            </div>
                            <div class="content">
                                <div class="main">
                                    <h4 class="text-center">CURSO DE INJETÁVEIS</h4>
                                    <p class="text-center">Para entrar no grupo de alunos no telegram
                                    <br>
                                    <a href="https://t.me/emergencia_1" style="color: blue;">>> Clique Aqui <<</a></p>
                                    <div class="stats-container">
                                        <div class="stats">
                                            <h4>3</h4>
                                            <p>Módulos</p>
                                        </div>
                                        <div class="stats">
                                            <h4>11</h4>
                                            <p>Aulas</p>
                                        </div>
                                        <div class="stats">
                                            <h4>3.037</h4>
                                            <p>Alunos</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="footer">
                                <div class="social-links text-center">
                                    <center>
                                        <!-- Indicates a successful or positive action -->
                                        <form method="post" action="index.php">
                                            <input type="hidden" name="pag" value="injetaveis/curso.php">
                                            <input type="submit" class="btn btn-success" value="Acessar Aulas">
                                        </form>
                                    </center>
                                </div>
                            </div>
                        </div> <!-- end back panel -->
                    </div> <!-- end card -->
                </div> <!-- end card-container -->
            </div> <!-- end col sm 3 -->
            <!-- NOVO CARD -->
            <div class="col-md-4 col-sm-6">
                <div class="card-container <?php 
                                            $conexao_db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
                                            $sqlquery = "SELECT * FROM aluno_curso WHERE id_aluno = '".$_SESSION['id_aluno']."' AND id_curso = 111328";
                                            $resultado_db3 = $conexao_db->query($sqlquery); 

                                            $dataV3 = $resultado_db3->fetch_array()[6];
                                            
                                            $date3 = date_create($dataV3);
                                            date_add($date3, date_interval_create_from_date_string('365 days'));
                                            $data2anos3 = strval(date_format($date3, 'Y-m-d'));

                                            if($resultado_db3->num_rows == 0 or date("Y-m-d")>$data2anos3){
                                                echo "manual-flip";
                                            }

                                            ?>">
                    <div class="card">
                        <div class="front">
                            <div class="cover">
                                <img src="assets/images/rotating_card_thumb.png"/>
                            </div>
                            <div class="user">
                                <img class="img-circle" src="assets/images/aph-motorista.jpg"/>
                            </div>
                            <div class="content">
                                <div class="main">
                                    <h3 class="name">APH PARA MOTORISTAS</h3>
                                    <p class="profession"><b>Instrutor</b>: Reneclei de Sousa</p>
                                    <p class="text-center"> Neste curso você irá aprender os procedimentos de APH, voltado para motoristas</p>
                                </div>
                                <div class="footer">
                                    <?php if($resultado_db3->num_rows > 0 and date("Y-m-d")<$data2anos3){
                                            echo('<i class="fa fa-mail-forward"></i>ABRIR CURSO');}
                                        else{
                                            echo('<a href="https://cursodeaph.com/motorista/" class="btn btn-simple" >
                                                    <i class="fa fa-mail-forward"></i> CONHECER CURSO
                                                </a>');                                        
                                    } ?>
                                </div>
                            </div>
                        </div> <!-- end front panel -->
                        <div class="back">
                            <div class="header">
                                <h5 class="motto">"Emergência 1 Treinamentos"</h5>
                            </div>
                            <div class="content">
                                <div class="main">
                                    <h4 class="text-center">APH PARA MOTORISTAS</h4>
                                    <p class="text-center">Para entrar no grupo de alunos no telegram
                                    <br>
                                    <a href="https://t.me/emergencia_1" style="color: blue;">>> Clique Aqui <<</a></p>
                                    <div class="stats-container">
                                        <div class="stats">
                                            <h4>5</h4>
                                            <p>Módulos</p>
                                        </div>
                                        <div class="stats">
                                            <h4>29</h4>
                                            <p>Aulas</p>
                                        </div>
                                        <div class="stats">
                                            <h4>1354</h4>
                                            <p>Alunos</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="footer">
                                <div class="social-links text-center">
                                    <center>
                                        <!-- Indicates a successful or positive action -->
                                        <form method="post" action="index.php">
                                            <input type="hidden" name="pag" value="aphmotoristas/curso.php">
                                            <input type="submit" class="btn btn-success" value="Acessar Aulas">
                                        </form>
                                    </center>
                                </div>
                            </div>
                        </div> <!-- end back panel -->
                    </div> <!-- end card -->
                </div> <!-- end card-container -->
            </div> <!-- end col sm 3 -->
            <!-- NOVO CARD -->
            <div class="col-md-4 col-sm-6">
                <div class="card-container <?php 
                                            $conexao_db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
                                            $sqlquery = "SELECT * FROM aluno_curso WHERE id_aluno = '".$_SESSION['id_aluno']."' AND id_curso = 44599";
                                            $resultado_db4 = $conexao_db->query($sqlquery); 

                                            $dataV4 = $resultado_db4->fetch_array()[6];
                                            
                                            $date4 = date_create($dataV4);
                                            date_add($date4, date_interval_create_from_date_string('365 days'));
                                            $data2anos4 = strval(date_format($date4, 'Y-m-d'));

                                            if($resultado_db4->num_rows == 0 or date("Y-m-d")>$data2anos4){
                                                echo "manual-flip";
                                            }

                                            ?>">
                    <div class="card">
                        <div class="front">
                            <div class="cover">
                                <img src="assets/images/rotating_card_thumb.png"/>
                            </div>
                            <div class="user">
                                <img class="img-circle" src="assets/images/aero.jpg"/>
                            </div>
                            <div class="content">
                                <div class="main">
                                    <h3 class="name">CURSO DE TRANSPORTE AEROMÉDICO</h3>
                                    <p class="profession"><b>Instrutor</b>: Marcelo Carvalho</p>
                                    <p class="text-center"> Neste curso você irá aprender como realizar o transporte aeromédico</p>
                                </div>
                                <div class="footer">
                                    <?php if($resultado_db4->num_rows > 0 and date("Y-m-d")<$data2anos4){
                                            echo('<i class="fa fa-mail-forward"></i>ABRIR CURSO');}
                                        else{
                                            echo('<a href="https://socorrista.org/aeromedico-online/" class="btn btn-simple" >
                                                    <i class="fa fa-mail-forward"></i> CONHECER CURSO
                                                </a>');                                        
                                    } ?>
                                </div>
                            </div>
                        </div> <!-- end front panel -->
                        <div class="back">
                            <div class="header">
                                <h5 class="motto">"Emergência 1 Treinamentos"</h5>
                            </div>
                            <div class="content">
                                <div class="main">
                                    <h4 class="text-center">CURSO DE TRANSPORTE AEROMÉDICO</h4>
                                    <p class="text-center">Para entrar no grupo de alunos no telegram
                                    <br>
                                    <a href="https://t.me/emergencia_1" style="color: blue;">>> Clique Aqui <<</a></p>
                                    <div class="stats-container">
                                        <div class="stats">
                                            <h4>4</h4>
                                            <p>Módulos</p>
                                        </div>
                                        <div class="stats">
                                            <h4>18</h4>
                                            <p>Aulas</p>
                                        </div>
                                        <div class="stats">
                                            <h4>3186</h4>
                                            <p>Alunos</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="footer">
                                <div class="social-links text-center">
                                    <center>
                                        <!-- Indicates a successful or positive action -->
                                        <form method="post" action="index.php">
                                            <input type="hidden" name="pag" value="aeromedico/curso.php">
                                            <input type="submit" class="btn btn-success" value="Acessar Aulas">
                                        </form>
                                    </center>
                                </div>
                            </div>
                        </div> <!-- end back panel -->
                    </div> <!-- end card -->
                </div> <!-- end card-container -->
            </div> <!-- end col sm 3 -->
            <!-- NOVO CARD -->
            <div class="col-md-4 col-sm-6">
                <div class="card-container <?php 
                                            /*$conexao_db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
                                            $sqlquery = "SELECT * FROM aluno_curso WHERE id_aluno = '".$_SESSION['id_aluno']."' AND id_curso = 43052";
                                            $resultado_db5 = $conexao_db->query($sqlquery); 

                                            $dataV5 = $resultado_db5->fetch_array()[6];
                                            
                                            $date5 = date_create($dataV5);
                                            date_add($date5, date_interval_create_from_date_string('365 days'));
                                            $data2anos5 = strval(date_format($date5, 'Y-m-d'));

                                            if($resultado_db5->num_rows == 0 or date("Y-m-d")>$data2anos5){
                                                echo "manual-flip";
                                            }

                                            */?>">
                    <div class="card">
                        <div class="front">
                            <div class="cover">
                                <img src="assets/images/rotating_card_thumb.png"/>
                            </div>
                            <div class="user">
                                <img class="img-circle" src="assets/images/sbv.jpg"/>
                            </div>
                            <div class="content">
                                <div class="main">
                                    <h3 class="name">CURSO DE SUPORTE DE VIDA BÁSICO E DEA</h3>
                                    <p class="profession"><b>Instrutor</b>: Reneclei de Souza</p>
                                    <p class="text-center"> Neste curso você irá aprender como utilizar o suporte de vida básico e o DEA</p>
                                </div>
                                <div class="footer">
                                    <?php 
                                    // if($resultado_db5->num_rows > 0 and date("Y-m-d")<$data2anos5){
                                    //         echo('<i class="fa fa-mail-forward"></i>ABRIR CURSO');}
                                    //     else{
                                    //         echo('<a href="https://cursodeaph.com/online/" class="btn btn-simple" >
                                    //                 <i class="fa fa-mail-forward"></i> CONHECER CURSO
                                    //             </a>');                                        
                                    // } 
                                    echo('<i class="fa fa-mail-forward"></i>ABRIR CURSO');
                                    ?>
                                </div>
                            </div>
                        </div> <!-- end front panel -->
                        <div class="back">
                            <div class="header">
                                <h5 class="motto">"Emergência 1 Treinamentos"</h5>
                            </div>
                            <div class="content">
                                <div class="main">
                                    <h4 class="text-center">CURSO DE SUPORTE DE VIDA BÁSICO E DEA</h4>
                                    <p class="text-center">Para entrar no grupo de alunos no telegram
                                    <br>
                                    <a href="https://t.me/emergencia_1" style="color: blue;">>> Clique Aqui <<</a></p>
                                    <div class="stats-container">
                                        <div class="stats">
                                            <h4>4</h4>
                                            <p>Módulos</p>
                                        </div>
                                        <div class="stats">
                                            <h4>12</h4>
                                            <p>Aulas</p>
                                        </div>
                                        <div class="stats">
                                            <h4>3186</h4>
                                            <p>Alunos</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="footer">
                                <div class="social-links text-center">
                                    <center>
                                        <!-- Indicates a successful or positive action -->
                                        <form method="post" action="index.php">
                                            <input type="hidden" name="pag" value="sbv/curso.php">
                                            <input type="submit" class="btn btn-success" value="Acessar Aulas">
                                        </form>
                                    </center>
                                </div>
                            </div>
                        </div> <!-- end back panel -->
                    </div> <!-- end card -->
                </div> <!-- end card-container -->
            </div> <!-- end col sm 3 -->

            <!-- NOVO CARD -->
            <div class="col-md-4 col-sm-6">
                <div class="card-container <?php 
                                            $conexao_db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
                                            $sqlquery = "SELECT * FROM aluno_curso WHERE id_aluno = '".$_SESSION['id_aluno']."' AND id_curso = 99293";
                                            $resultado_db6 = $conexao_db->query($sqlquery); 
                                            

                                            $dataV6 = $resultado_db6->fetch_array()[6];
                                            
                                            $date6 = date_create($dataV6);
                                            date_add($date6, date_interval_create_from_date_string('365 days'));
                                            $data2anos6 = strval(date_format($date6, 'Y-m-d'));

                                            if($resultado_db6->num_rows == 0 or date("Y-m-d")>$data2anos6){
                                                echo "manual-flip";
                                            }

                                            ?>">
                    <div class="card">
                        <div class="front">
                            <div class="cover">
                                <img src="assets/images/rotating_card_thumb.png"/>
                            </div>
                            <div class="user">
                                <img class="img-circle" src="assets/images/instrutor.jpg"/>
                            </div>
                            <div class="content">
                                <div class="main">
                                    <h3 class="name">CURSO DE INSTRUTOR</h3>
                                    <p class="profession"><b>Instrutor</b>: Reneclei de Souza</p>
                                    <p class="text-center"> Neste curso você irá aprender o necessário para se tornar um instrutor de cursos</p>
                                </div>
                                <div class="footer">
                                    <?php if($resultado_db6->num_rows > 0 and date("Y-m-d")<$data2anos6){
                                            echo('<i class="fa fa-mail-forward"></i>ABRIR CURSO');}
                                        else{
                                            echo('<a href="https://cursodeaph.com/online/" class="btn btn-simple" >
                                                    <i class="fa fa-mail-forward"></i> CONHECER CURSO
                                                </a>');                                        
                                    } ?>
                                </div>
                            </div>
                        </div> <!-- end front panel -->
                        <div class="back">
                            <div class="header">
                                <h5 class="motto">"Emergência 1 Treinamentos"</h5>
                            </div>
                            <div class="content">
                                <div class="main">
                                    <h4 class="text-center">CURSO DE INSTRUTOR</h4>
                                    <p class="text-center">Para entrar no grupo de alunos no telegram
                                    <br>
                                    <a href="https://t.me/emergencia_1" style="color: blue;">>> Clique Aqui <<</a></p>
                                    <div class="stats-container">
                                        <div class="stats">
                                            <h4>4</h4>
                                            <p>Módulos</p>
                                        </div>
                                        <div class="stats">
                                            <h4>20</h4>
                                            <p>Aulas</p>
                                        </div>
                                        <div class="stats">
                                            <h4>3186</h4>
                                            <p>Alunos</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="footer">
                                <div class="social-links text-center">
                                    <center>
                                        <!-- Indicates a successful or positive action -->
                                        <form method="post" action="index.php">
                                            <input type="hidden" name="pag" value="instrutor/curso.php">
                                            <input type="submit" class="btn btn-success" value="Acessar Aulas">
                                        </form>
                                    </center>
                                </div>
                            </div>
                        </div> <!-- end back panel -->
                    </div> <!-- end card -->
                </div> <!-- end card-container -->
            </div> <!-- end col sm 3 -->
        </div> <!-- end col-sm-10 -->
    </div> <!-- end row -->
</div>


</body>
<!-- javaScripts
    ================================================== -->
    
    <script src="assets/js/framework.js"></script>
    <script src="assets/js/simplebar.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/funcoes.js"></script>
    <script src="assets/run_prettify.js"></script>
    <?php include('views/scriptTicket.php'); ?>
</html>