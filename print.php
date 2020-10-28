<?php
require('lib/fpdf/fpdf.php'); 
require('setting.php');

$qty = $_GET['qty'];
$rate = $_GET['rate'];
$total = $qty * $rate;
$tax = $_GET['Tax'];
$tax1 = $total / 100 * $tax;
$pay = $total + $tax1;

$date_in = date("Y/m/d");
$date_out = $_GET['Date_Out'];
$name = $_GET['Name'];
$description = $_GET['Description'];
$setting = new setting();

// $pdf->AddPage();
// //set font style and size
// $pdf->SetFont('Arial','B',14);
// // cell(width, height, text, border, end line, [align])
// $pdf->Cell(70, 5, $description, 1,0);
// $pdf->Cell(40,5,$name,1,1); //end of line
// $pdf->Output();

$pdf=new FPDF('L','mm','A5');/*L untuk tampilan Landscape, A5 adalah ukuran kertasnya*/
$arraybln=array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'); 
$bln=$arraybln[date('n')-1]; 
$thn=date('Y');
$tgl=date('d'); 
/*membuat file PDF untuk dicetak*/ 
$pdf->setMargins(10,6,10); 
$pdf->AddPage(); 
$pdf->SetFont('Arial','B',12); 
$pdf->Cell(0,5,$setting->atur['namapt'],0,1,'L'); 
$pdf->SetFont('Arial','',11); 
$pdf->MultiCell(0,5,$setting->atur['alamat']." \n".$setting->atur['telpon']); 
$pdf->SetLineWidth(0.8);
$pdf->Line(10,28,199,28);
$pdf->Ln(5); 
$pdf->SetFont('Arial','B',12);
$pdf->Cell(0,5,$setting->atur['judul'],0,1,'R'); 
$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,5,'Bill To',0,0,'L'); 
$pdf->Ln(4); 
$pdf->SetFont('Arial','',11);
$pdf->Cell(70,7,$name,0,0,'L'); 
$pdf->Ln(12);
$pdf->SetLineWidth(0.1);
$pdf->SetFont('Arial','B',12);
$pdf->setFillColor(214, 210, 196); 
$pdf->Cell(90, 9, 'Description', 'R',0,'C',1);
$pdf->Cell(30, 9, 'Qty', 0,0,'C',1);
$pdf->Cell(30, 9, 'Rate', 0,0,'C',1);
$pdf->Cell(40, 9, 'Amount ', 0,1,'R',1);
$pdf->SetFont('Arial','',11);
$pdf->Cell(50, 5, $description, 'B',0,'J');
$pdf->Cell(30, 5, $qty, 'B',0,'C');
$pdf->Cell(30,5, $rate,'B',0,'C');
$pdf->Cell(40,5, $total, 'B',1,'R');//end of line
$pdf->Ln(3); 
$pdf->SetFont('Arial','',12);
$pdf->Cell(110, 5, '', 0,0,'R');
$pdf->Cell(40, 5, 'Subtotal', 0,0,'R');
$pdf->Cell(40,5, $total, 0,0,'R');
$pdf->Ln(5); 
$pdf->Cell(150, 5, 'Shipping', 0,0,'R');
$pdf->Ln(5);
$pdf->Cell(110, 5, '', 0,0,'R');
$pdf->Cell(40, 5, 'Tax', 'B',0,'R');
$pdf->Cell(40,5, $tax1, 'B',0,'R');
$pdf->Ln(6);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(110, 5, '', 0,0,'R');
$pdf->Cell(40, 5, 'Total', 0,0,'R');
$pdf->Cell(40,5, $pay, 0,0,'R');
$pdf->SetFont('Arial','B',11);
$pdf->Ln(35);
$pdf->Cell(180, 5, $date_in, 0,0,'R');
$pdf->Output();
?>