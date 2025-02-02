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
        $this->SetFont('Arial', 'B', 16);
        $this->SetTextColor(51, 51, 51); // Set text color to #333
        $this->Ln(20); // Adjusted from 10 to 20 to bring the header down slightly
    }

    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
    }

    function DecorativeBorder()
    {
        $this->SetLineWidth(1);
        $this->Rect(10, 10, 277, 190, 'D');
        $this->SetLineWidth(0.5);
        $this->Rect(15, 15, 267, 180, 'D');
    }
}

$pdf = new PDF('L', 'mm', 'A4');
$pdf->AddPage();
$pdf->DecorativeBorder();
$pdf->SetFont('Arial', 'B', 24);
$pdf->SetTextColor(51, 51, 51); // Set text color to #333

$pdf->Cell(0, 20, "Houses On The Air", 0, 1, 'C');
$pdf->Ln(20);
$pdf->SetFont('Arial', '', 18);
$pdf->Cell(0, 10, "This is to certify that", 0, 1, 'C');
$pdf->Ln(10);
$pdf->SetFont('Arial', 'B', 28);
$pdf->Cell(0, 10, $callsign, 0, 1, 'C');
$pdf->Ln(10);
$pdf->SetFont('Arial', '', 18);
$pdf->Cell(0, 10, "has achieved the tier of", 0, 1, 'C');
$pdf->Ln(10);
$pdf->SetFont('Arial', 'B', 28);
$pdf->Cell(0, 10, $tier, 0, 1, 'C');
$pdf->Ln(20);
$pdf->SetFont('Arial', '', 16);
$pdf->Cell(0, 10, "Date of Issue: " . $date, 0, 1, 'C');
$pdf->SetFont('Arial', '', 16);
$pdf->Cell(0, 10, "https://hota.org.uk", 0, 1, 'C');

$pdf->Output('I', 'certificate.pdf');
?>
