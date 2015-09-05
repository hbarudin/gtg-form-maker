<?php

// include autoloaders and helper functions
require_once 'dompdf/src/functions.inc.php';
require_once 'dompdf/src/autoload.inc.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml('<h1>Hello world!</h1>');

// (Optional) Setup the paper size and orientation
//$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Get the generated PDF file contents
$pdf = $dompdf->output();

// Output the generated PDF to Browser
$dompdf->stream();

?>