<?php
require('fpdf/fpdf.php');

class AwardCertificate extends FPDF {
    private $callsign;
    private $tier;
    private $date;

    public function __construct($callsign, $tier) {
        parent::__construct('L', 'mm', 'A4');
        $this->callsign = $callsign;
        $this->tier = $tier;
        $this->date = date('Y-m-d');
    }

    public function Header() {
        $this->SetFont('Arial', 'B', 16);
        $this->SetTextColor(51, 51, 51);
        $this->Ln(20);
    }

    public function Footer() {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
    }

    public function DecorativeBorder() {
        $this->SetLineWidth(1);
        $this->Rect(10, 10, 277, 190, 'D');
        $this->SetLineWidth(0.5);
        $this->Rect(15, 15, 267, 180, 'D');
    }

    public function GenerateCertificate() {
        $this->AddPage();
        $this->DecorativeBorder();

        // Title
        $this->SetFont('Arial', 'B', 24);
        $this->SetTextColor(51, 51, 51);
        $this->Cell(0, 20, "Houses On The Air", 0, 1, 'C');
        $this->Ln(20);

        // Certificate text
        $this->SetFont('Arial', '', 18);
        $this->Cell(0, 10, "This is to certify that", 0, 1, 'C');
        $this->Ln(10);

        // Callsign
        $this->SetFont('Arial', 'B', 28);
        $this->Cell(0, 10, $this->callsign, 0, 1, 'C');
        $this->Ln(10);

        // Achievement text
        $this->SetFont('Arial', '', 18);
        $this->Cell(0, 10, "has achieved the tier of", 0, 1, 'C');
        $this->Ln(10);

        // Tier
        $this->SetFont('Arial', 'B', 28);
        $this->Cell(0, 10, $this->tier, 0, 1, 'C');
        $this->Ln(20);

        // Date and website
        $this->SetFont('Arial', '', 16);
        $this->Cell(0, 10, "Date of Issue: " . $this->date, 0, 1, 'C');
        $this->Cell(0, 10, "https://hota.org.uk", 0, 1, 'C');

        return $this;
    }
}

// Validate input parameters
if (!isset($_GET['callsign']) || !isset($_GET['tier'])) {
    die('Missing parameters. Both callsign and tier are required.');
}

// Sanitize inputs
$callsign = htmlspecialchars($_GET['callsign'], ENT_QUOTES, 'UTF-8');
$tier = htmlspecialchars($_GET['tier'], ENT_QUOTES, 'UTF-8');

// Create and output certificate
$certificate = new AwardCertificate($callsign, $tier);
$certificate->GenerateCertificate();
$certificate->Output('I', 'HOTA_Certificate_' . $callsign . '.pdf');
?>
