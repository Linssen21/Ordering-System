<?php 
require APPROOT.'/views/pdfphp/fpdf17/fpdf.php' ; 

Class PDF extends FPDF{
	function Header(){
		$this->SetFont('Arial', 'B',25);
		$this->Image(URLROOT.'/img-assets/raw/fast-food.png',5,5,50);
		$this->Cell(189 ,5, '' ,0,1);
		$this->Cell(189 ,5, '' ,0,1);
		$this->Cell(189 ,5, '' ,0,1);
		$this->Cell(40 ,5, '' ,0,0);
		$this->Cell(89 ,0, 'Mouth Melters Burger Report' ,0, 1);
$this->Ln(5);
$this->Cell(189 ,5, '' ,0,1);
$this->Cell(189 ,5, '' ,0,1);
$this->Cell(189 ,5, '' ,0,1);
$this->Cell(189 ,5, '' ,0,1);
$this->SetFont('Arial', '', 12);
$this->Cell(20 ,10, 'id' ,1, 0, 'C');
$this->Cell(40 ,10, 'Customer' ,1, 0, 'C');
$this->Cell(60 ,10, 'Order' ,1, 0, 'C');
$this->Cell(20 ,10, 'Quantity' ,1, 0, 'C');
$this->Cell(20 ,10, 'Price' ,1, 0, 'C');
$this->Cell(30 ,10, 'Status' ,1, 1, 'C');
	}
	function Footer(){
		$this->SetY(-15);
		$this->SetFont('Arial', '',10);
		$this->Cell(0 ,10, 'Page '.$this->PageNo()." / {pages}" ,0, 0, 'C');
	}
 }
$pdf = new PDF('P', 'mm', 'A4');
$pdf->AliasNbPages('{pages}');
$pdf->AddPage();
foreach ($data['report'] as $report) {
	// $date = $report->Date;
	// $createDate = new DateTime($date);
	// $strip = $createDate->format('Y-m-d');
$pdf->Cell(20 ,5, $report->id ,1, 0);
$pdf->Cell(40 ,5, $report->Customer ,1, 0);
$pdf->Cell(60 ,5, $report->OrderName ,1, 0);
$pdf->Cell(20 ,5, $report->Quantity ,1, 0);
$pdf->Cell(20 ,5, $report->Price ,1, 0);
$pdf->Cell(30 ,5, $report->Status ,1, 1);
}
$pdf->Output();
 ?>