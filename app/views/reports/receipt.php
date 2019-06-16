<?php 
require APPROOT.'/views/pdfphp/fpdf17/fpdf.php' ; 

Class PDF extends FPDF{

		
	function Header($id = null){
		 $silang = "Silang, Cavite";
		$this->SetFont('Helvetica', 'B',10);
		$this->Image(URLROOT.'/img-assets/raw/fast-food.png',2,2,20);
		$this->Cell(10 ,5, '' ,0,1);
		
		$this->Cell(80 ,5, '' ,0,0);
		$this->Cell(60 ,3, '' ,0, 1, 'C');
		$this->Cell(60 ,3, 'MOUTH MELTERS' ,0, 1, 'C');
		$this->Cell(60 ,4, 'BURGER' ,0, 1, 'C');
		$this->SetFont('Courier', '',9);
		$this->Cell(60 ,4, $silang ,0, 1, 'C');
		$this->Cell(60 ,4, '095549821' ,0, 1, 'C');
		
	

	}
	function Footer(){
		$this->SetY(-15);
		$this->SetFont('Courier', '',8);
		$this->Cell(5 ,5, '------------------------------------' ,0, 1);
		$this->SetFont('Helvetica', '',8);
		$this->Cell(0 ,5, 'Thank you very much' ,0, 0, 'C');
	}
 }


$i = count($data['receipt']);
$pdf = new PDF('P', 'mm', [80,$i*5.5+100]);
$pdf->AddPage();
	date_default_timezone_set('Asia/Manila');
	$date = date('m/d/Y', time());
	$pdf->Cell(80 ,5, '' ,0,1);
	$pdf->Cell(10 ,0, 'Date:' ,0, 0);
	$pdf->Cell(0 ,0, $date ,0, 1);
	$pdf->Cell(80 ,4, '' ,0,1);
	$pdf->Cell(24 ,0, 'Customer ID:' ,0, 0);
	$pdf->Cell(0 ,0, $data['id'] ,0, 1);
	$pdf->Cell(0 ,10, '' ,0, 1);
	$pdf->Cell(60 ,0, 'PURCHASED' ,0, 1, 'C');
	$pdf->Cell(5 ,5, '--------------------------------' ,0, 1);
	$pdf->Cell(60 ,0, '' ,0,1);
	$pdf->Cell(30 ,0, '' ,0, 1);

foreach ($data['receipt'] as $report) {
	$pdf->Cell(30 ,4,$report->OrderID.' BURGER' ,0, 0);
	$pdf->Cell(10 ,4, $report->Quantity.'x' ,0, 0);
	$pdf->Cell(20 ,4, $report->Price.'.00' ,0, 1);
}
$pdf->Cell(5 ,2, '--------------------------------' ,0, 1);
$pdf->Cell(25 ,2, '' ,0, 0);
$pdf->Cell(15 ,5, 'Total:' ,0, 0);
$pdf->Cell(0 ,5, $data['total']->total_price ,0, 1);
$pdf->Cell(5 ,2, '--------------------------------' ,0, 1);
$pdf->Output();
 ?>