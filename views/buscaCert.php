<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Emergência 1 - Validar Certificado</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="../assets/images/icons/favicon.ico"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

    <center>
        <img src="../assets/images/logo-2.png" width="20%"><br><br><br>
    </center>
    

    <center>
    <?php
    require_once('../config/db.php');
    $conexao_db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if(isset($_GET['email'])){
        $email = $_GET['email'];
        $sqlBuscaAluno = "SELECT id_aluno, nome FROM alunos WHERE email = '".$email."'"; 
        
        $resultadoDb = $conexao_db->query($sqlBuscaAluno)->fetch_array();
        $id_aluno = $resultadoDb[0];
        $nomeAluno = $resultadoDb[1];

        
        if($id_aluno != null){
            $sqlListaCursos = "SELECT id_curso, dataInicio, dataVenc FROM aluno_curso WHERE id_aluno = '".$id_aluno."'";
            $cursos = $conexao_db->query($sqlListaCursos)->fetch_all();
        ?>
            <table>
            <tr>
                <th>Nome do Curso</th>
                <th>Data de Início</th>
                <th>Data de Término</th>
                <th>Confirmação do Certificado</th>
            </tr>
        <?php        
            $i = 0;
            foreach($cursos as $c){
                $sqlTabela = "SELECT nome FROM cursos WHERE id_curso ='".$c[0]."'";
                $nomeCurso = $conexao_db->query($sqlTabela)->fetch_array()[0];
                $dataInicio = converterData($c[1]);
                $dataFim = converterData($c[2]); 
                                
                $date = date_create($c[2]);
                date_add($date, date_interval_create_from_date_string('730 days'));
                $data2anos = strval(date_format($date, 'Y-m-d'));                    
                
                if($c[0] != "85963"){
                    echo "<tr>";
                    echo "<td>".$nomeCurso."</td><td>".$dataInicio."</td><td>".$dataFim."</td>";
                    
                    if(date("Y-m-d")<$data2anos){
                        $botãoString = "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#modalCertificado".$i."'>Verificação</button></td>";
                    }else{
                        $botãoString = "<td><button type='button' class='btn btn-danger'>certificado vencido</button></td>";
                    }
                    
                    echo $botãoString;
                }                
                ?>
                <!-- Modal -->
                <div class="modal fade" id="modalCertificado<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="modalCertificadoLabel" aria-hidden="true">
                   <div class="modal-dialog" role="document">
                       <div class="modal-content">
                       <div class="modal-header">
                           <h5 class="modal-title" id="modalCertificadoLabel">Verificação do Certificado</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                           </button>
                       </div>
                       <div class="modal-body">
                       Atestamos para os devidos fins que <?php echo $nomeAluno; ?> participou do curso de <?php echo $nomeCurso; ?> da emergencia 1 Treinamentos 
                       do dia <?php echo $dataInicio; ?> até o dia <?php echo $dataFim; ?>.
                       </div>
                       <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                       </div>
                       </div>
                   </div>
               </div>
               <?php
                echo "</tr>"; 
                $i++;               
            }
            echo "</table>";
        }else{
            echo "Nenhum aluno cadastrado com este e-mail.";
        }
        
    }

    function converterData($dateSql){
        $ano= substr($dateSql, 0, 4);
        $mes= substr($dateSql, 5,2);
        $dia= substr($dateSql, 8,2);
        return $dia."/".$mes."/".$ano;
    }
    ?>    
 

    <br><br>
        <a href="../index.php?pag=validacaoCert.php" type="button" class="btn btn-primary">Voltar</a>
    </center>
</body>    
</html>