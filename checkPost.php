<?php
if(isset($_REQUEST)){
   $conexao_db = new mysqli("localhost", "u352429134_online", "Suporte01", "u352429134_online");
  
   $checado=$_POST['checkbox'];
   if($checado == "true"){
      $sqlquery = "UPDATE aula_aluno SET assistido = 1 
   WHERE id_aluno = '".$_POST['id_aluno']."' AND id_aula = '".$_POST['id_aula']."' AND id_curso = '".$_POST['id_curso']."'; ";
   }elseif($checado == "false"){
      $sqlquery = "UPDATE aula_aluno SET assistido = 0 
   WHERE id_aluno = '".$_POST['id_aluno']."' AND id_aula = '".$_POST['id_aula']."' AND id_curso = '".$_POST['id_curso']."'; ";
   }
   
   $result=$conexao_db->query($sqlquery);
   if($result){
      echo "Enviado com sucesso.";
   }
}
?>