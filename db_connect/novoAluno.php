<?php
require_once("../config/db.php");

$dados = $_POST;
 
  /*$chaveUnica = $dados['chave_unica'];
  if($chaveUnica  != '7e98bf8b473e6673a27c004ac4562cd7') {
    exit;
  }*/

$nome = $dados['comprador']['nome'];
$email = $dados['comprador']['email'];
$cnpj_cpf = $dados['comprador']['cnpj_cpf']; 
$codCurso = intval($dados['produto']['codigo']);
$dataCadastro = date('Y-m-d');
$dataVenc = date('Y-m-d', strtotime('+7 days'));

$produtoComprado = $dados['venda_item_order_bump'];
$order_bump = $dados['order_bump'];

$conexao_db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Checando a conexão
if (mysqli_connect_errno()) {
    printf("Conexão falhou: %s\n", mysqli_connect_error());
    exit();
}

$nome = $conexao_db->real_escape_string($nome);
$email = $conexao_db->real_escape_string($email);
$senha = "socorrista";//intval(substr($cnpj_cpf,0,6));
$senha_hash = password_hash($senha, PASSWORD_DEFAULT);

$sql_auth = "SELECT id_aluno FROM alunos WHERE usuario = '".$email."';";
$resultadoAuth = $conexao_db->query($sql_auth);

if($resultadoAuth->num_rows == 0){

  $sql_query = "INSERT INTO alunos (usuario, senha_hash, email, nome, dataCadastro, dataVenc, platCompra) 
  VALUES ('".$email."', '".$senha_hash."', '".$email."', '".$nome."', '".$dataCadastro."', '".$dataVenc."', 'Monetizze')";
  $conexao_db->query($sql_query);

  $resultadoAuth = $conexao_db->query($sql_auth);
  $id_aluno = $resultadoAuth->fetch_object()->id_aluno;


  if($order_bump == 1){
    foreach($produtoComprado  as $item){
      $codCurso1    = $item['produto'];
        $sql_cursos = "SELECT * FROM aluno_curso WHERE id_aluno = '".$id_aluno."' AND id_curso = '".$codCurso1."';";
        $resultadoCheck = $conexao_db->query($sql_cursos);

        if($resultadoCheck->num_rows == 0){
          $sql_addcurso = "INSERT INTO aluno_curso (id_aluno, id_curso, dataInicio, dataVenc, platCompra) VALUES ('".$id_aluno."','".$codCurso1."','".$dataCadastro."','".$dataVenc."', 'Monetizze')";
          $conexao_db->query($sql_addcurso);

          if($codCurso1 == "85963"){
            $sql_cursos3 = "SELECT * FROM aluno_curso WHERE id_aluno = '".$id_aluno."' AND id_curso = '44374';";
            $resultadoCheck = $conexao_db->query($sql_cursos3); 

              if($resultadoCheck->num_rows == 0){
                $sql_addcurso = "INSERT INTO aluno_curso (id_aluno, id_curso, dataInicio, dataVenc, platCompra) VALUES ('".$id_aluno."','44374','".$dataCadastro."','".$dataVenc."', 'Monetizze')";
                $conexao_db->query($sql_addcurso);
              }
          }

          echo 'Curso cadastrado! <br>';
        }else{
          echo 'Curso já cadastrado <br>';
        }

        //85963 44374
        $sql_cursos1 = "SELECT * FROM aluno_curso WHERE id_aluno = '".$id_aluno."' AND id_curso = 43052;";
        $resultadoCheck = $conexao_db->query($sql_cursos1);
        if($resultadoCheck->num_rows == 0){
          $sql_addcurso = "INSERT INTO aluno_curso (id_aluno, id_curso, dataInicio, dataVenc, platCompra) VALUES ('".$id_aluno."',43052,'".$dataCadastro."','".$dataVenc."', 'Monetizze')";
          $conexao_db->query($sql_addcurso);    

          echo 'Curso cadastrado! <br>';
        }else{
          echo 'Curso já cadastrado <br>';
        }
      echo $codCurso1;
    }
  }else{
        $sql_cursos2 = "SELECT * FROM aluno_curso WHERE id_aluno = '".$id_aluno."' AND id_curso = '".$codCurso."';";
        $resultadoCheck = $conexao_db->query($sql_cursos2);        
        if($resultadoCheck->num_rows == 0){
          $sql_addcurso = "INSERT INTO aluno_curso (id_aluno, id_curso, dataInicio, dataVenc, platCompra) VALUES ('".$id_aluno."','".$codCurso."','".$dataCadastro."','".$dataVenc."', 'Monetizze')";
          $conexao_db->query($sql_addcurso);

          if($codCurso == "85963"){
            $sql_cursos3 = "SELECT * FROM aluno_curso WHERE id_aluno = '".$id_aluno."' AND id_curso = '44374';";
            $resultadoCheck = $conexao_db->query($sql_cursos3); 

              if($resultadoCheck->num_rows == 0){
                $sql_addcurso = "INSERT INTO aluno_curso (id_aluno, id_curso, dataInicio, dataVenc, platCompra) VALUES ('".$id_aluno."','44374','".$dataCadastro."','".$dataVenc."', 'Monetizze')";
                $conexao_db->query($sql_addcurso);
              }
          }
          
          echo 'Curso cadastrado! <br>';
        }else{
          echo 'Curso já cadastrado <br>';
        }

        $sql_cursos1 = "SELECT * FROM aluno_curso WHERE id_aluno = '".$id_aluno."' AND id_curso = 43052;";
        $resultadoCheck = $conexao_db->query($sql_cursos1);
        if($resultadoCheck->num_rows == 0){
          $sql_addcurso = "INSERT INTO aluno_curso (id_aluno, id_curso, dataInicio, dataVenc, platCompra) VALUES ('".$id_aluno."',43052,'".$dataCadastro."','".$dataVenc."', 'Monetizze')";
          $conexao_db->query($sql_addcurso);
          echo 'Curso cadastrado! <br>';
        }else{
          echo 'Curso já cadastrado <br>';
        }

  }

  echo "Novo aluno cadastrado";
}else{
  $id_aluno = $resultadoAuth->fetch_object()->id_aluno;
  $sql_cursos = "SELECT * FROM aluno_curso WHERE id_aluno = '".$id_aluno."' AND id_curso'".$codCurso."';";
  $resultadoCursos = $conexao_db->query($sql_cursos);

  if($resultadoCursos->num_rows == 0){
    $sql_addcurso = "INSERT INTO aluno_curso (id_aluno, id_curso, dataInicio, dataVenc, platCompra) VALUES ('".$id_aluno."','".$codCurso."','".$dataCadastro."','".$dataVenc."', 'Monetizze')";
    $conexao_db->query($sql_addcurso);
    echo 'Curso cadastrado! <br>';
    if($codCurso == "85963"){
      $sql_cursos3 = "SELECT * FROM aluno_curso WHERE id_aluno = '".$id_aluno."' AND id_curso = '44374';";
      $resultadoCheck = $conexao_db->query($sql_cursos3);        
        if($resultadoCheck->num_rows == 0){
          $sql_addcurso = "INSERT INTO aluno_curso (id_aluno, id_curso, dataInicio, dataVenc, platCompra) VALUES ('".$id_aluno."','44374','".$dataCadastro."','".$dataVenc."', 'Monetizze')";
          $conexao_db->query($sql_addcurso);
        }
      }
    
  //   if(isset($produtoComprado)){
  //     foreach($produtoComprado  as $item){
  //       $codCurso2    = $item['produto'];

  //       $sql_cursos3 = "SELECT * FROM aluno_curso WHERE id_aluno = '".$id_aluno."' AND id_curso = '".$codCurso2."';";
  //       $resultadoCheck = $conexao_db->query($sql_cursos3);
  //       if($resultadoCheck->num_rows == 0){
  //         $sql_addcurso = "INSERT INTO aluno_curso (id_aluno, id_curso, dataInicio, dataVenc, platCompra) VALUES ('".$id_aluno."','".$codCurso2."','".$dataCadastro."','".$dataVenc."', 'Monetizze')";
  //         $conexao_db->query($sql_addcurso);
  //         echo 'Curso cadastrado! <br>';
  //       }else{
  //         echo 'Curso já cadastrado <br>';
  //       }
  //     }
  //   }else{
  //       $sql_cursos3 = "SELECT * FROM aluno_curso WHERE id_aluno = '".$id_aluno."' AND id_curso = '".$codCurso."';";
  //       $resultadoCheck = $conexao_db->query($sql_cursos3);
  //       if($resultadoCheck->num_rows == 0){
  //         $sql_addcurso = "INSERT INTO aluno_curso (id_aluno, id_curso, dataInicio, dataVenc, platCompra) VALUES ('".$id_aluno."','".$codCurso."','".$dataCadastro."','".$dataVenc."', 'Monetizze')";
  //         $conexao_db->query($sql_addcurso);
  //         echo 'Curso cadastrado! <br>';
  //       }else{
  //         echo 'Curso já cadastrado <br>';
  //       }
  //   }
  //   echo "Curso cadastrado";
  //   echo $id_aluno;
  //   echo $codCurso;
 }else{
     echo 'Curso já cadastrado <br>';
 }
}
?>