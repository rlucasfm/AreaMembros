<?php
require_once("../config/db.php");

  $dados = $_POST;

$nome             	= $dados['name'];
$email            	= $dados['email'];
$cnpj_cpf         	= $dados['doc']; //Numero inteiro (sem pontos)
$codCurso 			= intval($dados['prod']);
$dataCadastro 		= date('Y-m-d');
$dataVenc 			= date('Y-m-d', strtotime('+7 days'));


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
  VALUES ('".$email."', '".$senha_hash."', '".$email."', '".$nome."', '".$dataCadastro."', '".$dataVenc."', 'Hotmart')";
  $conexao_db->query($sql_query);

  $resultadoAuth = $conexao_db->query($sql_auth);
  $id_aluno = $resultadoAuth->fetch_object()->id_aluno;

  $sql_addcurso = "INSERT INTO aluno_curso (id_aluno, id_curso, dataInicio, dataVenc, platCompra) VALUES ('".$id_aluno."',43052,'".$dataCadastro."','".$dataVenc."', 'Hotmart')";
  $conexao_db->query($sql_addcurso);
  $sql_addcurso = "INSERT INTO aluno_curso (id_aluno, id_curso, dataInicio, dataVenc, platCompra) VALUES ('".$id_aluno."',44374,'".$dataCadastro."','".$dataVenc."', 'Hotmart')";
  $conexao_db->query($sql_addcurso);
  echo 'Curso cadastrado! <br>';

  echo "Novo aluno cadastrado";
}else{
  $id_aluno = $resultadoAuth->fetch_object()->id_aluno;
  $sql_cursos = "SELECT * FROM aluno_curso WHERE id_aluno = '".$id_aluno."';";
  $resultadoCursos = $conexao_db->query($sql_cursos);

  $sql_addcurso = "INSERT INTO aluno_curso (id_aluno, id_curso, dataInicio, dataVenc, platCompra) VALUES ('".$id_aluno."',43052,'".$dataCadastro."','".$dataVenc."', 'Hotmart')";
  $conexao_db->query($sql_addcurso);
  $sql_addcurso = "INSERT INTO aluno_curso (id_aluno, id_curso, dataInicio, dataVenc, platCompra) VALUES ('".$id_aluno."',44374,'".$dataCadastro."','".$dataVenc."', 'Hotmart')";
  $conexao_db->query($sql_addcurso);

    echo "Curso cadastrado";
    echo $id_aluno;
    echo $codCurso;
  }

?>