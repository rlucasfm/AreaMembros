<?php 
require_once('../../../assets/fpdf/fpdf.php');
require_once('../../../config/db.php');

$id = $_GET['id'];

$conexao_db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$sqlquery = "SELECT nome, dataCadastro, dataVenc FROM alunos where id_aluno = '".$id."'";
$resultado_db = $conexao_db->query($sqlquery);
$arrayResultado = $resultado_db->fetch_array();

$nome = $arrayResultado[0];
$dataInicio = converterData($arrayResultado[1]); 
$dataVenc = converterData($arrayResultado[2]);


$alturaPag = 297;
$larguraPag = 210;
$datas="EMISSÃO: ".$dataInicio;

$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetAutoPageBreak(false);

$pdf->SetFont('Arial','B',12);
$pdf->SetTextColor(0,0,0);
$pdf->Image("carteirinha.png",0 ,0 , $larguraPag, $alturaPag);
$pdf->SetXY(($larguraPag/2)-($pdf->GetStringWidth($nome)/2),30);
$pdf->Write(1, utf8_decode($nome));

$pdf->SetFont('Arial','B',10);
$pdf->SetXY(-($larguraPag/1.45)+($pdf->GetStringWidth($datas)/2),57);
$pdf->Write(1, utf8_decode($datas));

$pdf->Output();

function converterData($dateSql){
    $ano= substr($dateSql, 0, 4);
    $mes= substr($dateSql, 5,2);
    $dia= substr($dateSql, 8,2);
    return $dia."/".$mes."/".$ano;
}

?>
