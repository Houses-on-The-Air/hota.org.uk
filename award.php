<?php
require('fpdf/fpdf.php');

if (!isset($_GET['callsign']) || !isset($_GET['tier'])) {
    die('Missing parameters.');
}

$callsign = htmlspecialchars($_GET['callsign']);
$tier = htmlspecialchars($_GET['tier']);
$date = date('Y-m-d H:i:s');

class PDF extends FPDF
{
    function Header()
    {
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 10, 'Homes On The Air Certificate', 0, 1, 'C');
        $this->Ln(10);
    }

    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Page ' . $this->PageNo(), 0, 0, 'C');
    }
}

$pdf = new PDF('L', 'mm', 'A4');
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);

$pdf->Cell(0, 10, "Certificate of Achievement", 0, 1, 'C');
$pdf->Ln(20);
$pdf->SetFont('Arial', '', 14);
$pdf->Cell(0, 10, "This is to certify that", 0, 1, 'C');
$pdf->Ln(10);
$pdf->SetFont('Arial', 'B', 20);
$pdf->Cell(0, 10, $callsign, 0, 1, 'C');
$pdf->Ln(10);
$pdf->SetFont('Arial', '', 14);
$pdf->Cell(0, 10, "has achieved the tier of", 0, 1, 'C');
$pdf->Ln(10);
$pdf->SetFont('Arial', 'B', 20);
$pdf->Cell(0, 10, $tier, 0, 1, 'C');
$pdf->Ln(20);
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 10, "Date of Issue: " . $date, 0, 1, 'C');

$pdf->Output('I', 'certificate.pdf');
?>
