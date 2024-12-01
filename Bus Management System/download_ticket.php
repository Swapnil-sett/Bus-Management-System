<?php

// Include the FPDF library
require("fpdf186/fpdf.php");

// Create a new FPDF instance
$pdf = new FPDF();
$pdf->AddPage();

// Set title
$pdf->SetFont("Arial", "B", 20);
$pdf->Cell(0, 10, "Triple Minds Travels Ticket", 0, 1, "C");
$pdf->Ln(10); // Line break

// Retrieve and sanitize form data passed via URL
$from = isset($_GET['from']) ? htmlspecialchars($_GET['from']) : 'Not Provided';
$to = isset($_GET['to']) ? htmlspecialchars($_GET['to']) : 'Not Provided';
$date = isset($_GET['date']) ? htmlspecialchars($_GET['date']) : 'Not Provided';
$person = isset($_GET['person']) ? (int)$_GET['person'] : 0;

// Add ticket details to the PDF
$pdf->SetFont("Arial", "", 14);
$pdf->Cell(50, 10, "From:", 0, 0);
$pdf->Cell(0, 10, $from, 0, 1);

$pdf->Cell(50, 10, "To:", 0, 0);
$pdf->Cell(0, 10, $to, 0, 1);

$pdf->Cell(50, 10, "Date:", 0, 0);
$pdf->Cell(0, 10, $date, 0, 1);

$pdf->Cell(50, 10, "Passengers:", 0, 0);
$pdf->Cell(0, 10, $person, 0, 1);

$pdf->Ln(10); // Line break

// Add a thank you message
$pdf->SetFont("Arial", "I", 12);
$pdf->Cell(0, 10, "Thank you for traveling with us!", 0, 1, "C");

// Generate the PDF and force download
$pdf->Output('D', 'ticket_' . time() . '.pdf');
exit();
?>
