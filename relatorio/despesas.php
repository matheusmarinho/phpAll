<?php
require_once "dao.php";
require_once "fpdf/fpdf.php";

function converte($string) {
	
	return iconv("UTF-8", "ISO-8859-1", $string);
}
$conectar = new conectar();


$pdf = new FPDF("P","pt","A4");
$pdf->AddPage();
$pdf->Ln(10);

//Nome Relatуrio
$pdf->SetFont("arial","B",18);
$pdf->Cell(0,5,converte("Relatorio"),0,1,"C");

$pdf->Ln(30);

//Nome
$pdf->SetFont("arial","B",14);
$pdf->Cell(100,20,converte("Receitas"),1,0,"L");


//Observaзгo
$pdf->Cell(220,20,"Data da Operaзгo",1,1,"L");

$sql = "Select * from tbl_socio";
$rs = $conectar->executa($sql);

//echo "$rs";
while ($row = mysql_fetch_assoc($rs)) {	
	//Nome
$pdf->SetFont("arial","B",14);
$pdf->Cell(100,20,converte("linha"),1,0,"L");

//Telefone
$pdf->Cell(200,20,converte("linha"),1,0,"L");

//Observaзгo
$pdf->Cell(220,20,converte("linha"),1,1,"L");

 
	
//while ($noticia = $resultado->fetch_object())
	
}

$pdf->Output();

?>