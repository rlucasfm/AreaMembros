<?php
//require_once("../config/db.php");

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

$conexao_db = new mysqli("localhost", "u352429134_online", "Suporte01", "u352429134_online");

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

  $sql_query = "INSERT INTO alunos (usuario, senha_hash, email, nome, dataCadastro, dataVenc) 
  VALUES ('".$email."', '".$senha_hash."', '".$email."', '".$nome."', '".$dataCadastro."', '".$dataVenc."')";
  $conexao_db->query($sql_query);

  $resultadoAuth = $conexao_db->query($sql_auth);
  $id_aluno = $resultadoAuth->fetch_object()->id_aluno;


  if(isset($produtoComprado)){
    foreach($produtoComprado  as $item){
      $codCurso1    = $item['produto'];
      $sql_addcurso = "INSERT INTO aluno_curso (id_aluno, id_curso, dataInicio, dataVenc) VALUES ('".$id_aluno."','".$codCurso1."','".$dataCadastro."','".$dataVenc."')";
      $conexao_db->query($sql_addcurso);
      $sql_addcurso = "INSERT INTO aluno_curso (id_aluno, id_curso, dataInicio, dataVenc) VALUES ('".$id_aluno."',43052,'".$dataCadastro."','".$dataVenc."')";
        $conexao_db->query($sql_addcurso);
      echo $codCurso1;
    }
  }else{
      $sql_addcurso = "INSERT INTO aluno_curso (id_aluno, id_curso, dataInicio, dataVenc) VALUES ('".$id_aluno."','".$codCurso."','".$dataCadastro."','".$dataVenc."')";
      $conexao_db->query($sql_addcurso);
      $sql_addcurso = "INSERT INTO aluno_curso (id_aluno, id_curso, dataInicio, dataVenc) VALUES ('".$id_aluno."',43052,'".$dataCadastro."','".$dataVenc."')";
        $conexao_db->query($sql_addcurso);

  }

  echo "Novo aluno cadastrado";
}else{
  $id_aluno = $resultadoAuth->fetch_object()->id_aluno;
  $sql_cursos = "SELECT * FROM aluno_curso WHERE id_aluno = '".$id_aluno."';";
  $resultadoCursos = $conexao_db->query($sql_cursos);
  if($resultadoCursos->num_rows == 0){
    if(isset($produtoComprado)){
      foreach($produtoComprado  as $item){
        $codCurso1    = $item['produto'];
        $sql_addcurso = "INSERT INTO aluno_curso (id_aluno, id_curso, dataInicio, dataVenc) VALUES ('".$id_aluno."','".$codCurso1."','".$dataCadastro."','".$dataVenc."')";
        $conexao_db->query($sql_addcurso);
        echo $codCurso1;
      }
    }else{
        $sql_addcurso = "INSERT INTO aluno_curso (id_aluno, id_curso, dataInicio, dataVenc)) VALUES ('".$id_aluno."','".$codCurso."','".$dataCadastro."','".$dataVenc."')";
        $conexao_db->query($sql_addcurso);
    }
    echo "Curso cadastrado";
    echo $id_aluno;
    echo $codCurso;
  }else{
    echo "Este aluno já está cadastrado nesse curso";
  }
}


?>