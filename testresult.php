<?php
 require('./fpdf/fpdf.php');
 $pdf = new FPDF('P','mm', 'A4');
 $pdf->AddPage();
 $pdf->SetFont('Arial', 'B', 20);
 
 $pdf->Cell(71, 10,'',0,0);
 $pdf->Cell(59, 5,'Invoice',0,0);
 $pdf->Cell(59, 10,'',0,1);

 $pdf->SetFont('Arial', 'B', 15);
 $pdf->Cell(71, 5,'WET',0,0);
 $pdf->Cell(59, 5,'',0,0);
 $pdf->Cell(59, 5,'Details',0,1);

 $pdf->SetFont('Arial', '', 10);
 $pdf->Cell(130, 5,'Near DAV',0,0);
 $pdf->Cell(25, 5,'Customer ID:',0,0);
 $pdf->Cell(34, 5,'0012',0,1);

 $pdf->Cell(130, 5,'City, 751001',0,0);
 $pdf->Cell(25, 5,'Invoice Date:',0,0);
 $pdf->Cell(34, 5,'12th March 2024',0,1);

 $pdf->Cell(130, 5,'',0,0);
 $pdf->Cell(25, 5,'Invoice Date:',0,0);
 $pdf->Cell(34, 5,'ORD001',0,1);
 
 $pdf->SetFont('Arial', 'B', 15);
 $pdf->Cell(130, 5,'Bill To',0,0);
 $pdf->Cell(59, 5,'',0,0);
 $pdf->SetFont('Arial', 'B', 10);
 $pdf->Cell(189,10,'',0,1);


 $pdf->Output();



?>