<?php 
require_once('../../../assets/fpdf/fpdf.php');
require_once('../../../config/db.php');

$id = $_GET['id'];

$conexao_db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$sqlquery = "SELECT nome, dataCadastro, dataVenc FROM alunos where id_aluno = '".$id."'";
$resultado_db = $conexao_db->query($sqlquery);
$arrayResultado = $resultado_db->fetch_array();

$sql_curso = "SELECT dataInicio, dataVenc FROM aluno_curso WHERE id_aluno = '".$id."'";
$resultado_db2 = $conexao_db->query($sql_curso);
$arrayResultado2 = $resultado_db2->fetch_array();

$nome = $arrayResultado[0];
$dataInicio = converterData($arrayResultado2[0]); 
$dataEm = converterData($arrayResultado2[1]); 
$dataVenc = somarAno($arrayResultado2[1]);


$alturaPag = 210;
$larguraPag = 297;
//$datas="INÍCIO: ".$dataInicio."  TERMINO: ".$dataVenc;
$datas = "DATA DE INÍCIO: ".$dataInicio."  DATA DE TÉRMINO: ".$dataEm;
$datas2 = "VÁLIDO ATÉ: ".$dataVenc;

$pdf = new FPDF('L','mm','A4');
$pdf->AddPage();
$pdf->SetAutoPageBreak(false);

$pdf->SetFont('Arial','B',30);
$pdf->SetTextColor(180,0,0);
$pdf->Image("certfrente.png",0 ,0 , $larguraPag, $alturaPag);
$pdf->SetXY(($larguraPag/2)-($pdf->GetStringWidth($nome)/2),90);
$pdf->Write(1, utf8_decode($nome));

$pdf->SetFont('Arial','B',8);
$pdf->SetXY(($larguraPag/2)-($pdf->GetStringWidth($datas)/2),190);
$pdf->Write(1, utf8_decode($datas));

$pdf->SetXY(($larguraPag/2)-($pdf->GetStringWidth($datas2)/2),195);
$pdf->Write(1, utf8_decode($datas2));

$pdf->Output();

function converterData($dateSql){
    $ano= substr($dateSql, 0, 4);
    $mes= substr($dateSql, 5,2);
    $dia= substr($dateSql, 8,2);
    return $dia."/".$mes."/".$ano;
}

function somarAno($dateSql){
    $ano= intval(substr($dateSql, 0, 4))+2;
    $mes= substr($dateSql, 5,2);
    $dia= substr($dateSql, 8,2);
    return $dia."/".$mes."/".$ano;
}

?>
