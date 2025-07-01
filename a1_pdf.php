<?php
require 'vendor/autoload.php'; // Make sure dompdf is installed via Composer

use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();
$options->set('isRemoteEnabled', true);
$dompdf = new Dompdf($options);

// If a1.php contains PHP logic, use output buffering
define('PDF_MODE', true); // Optional: let a1.php know it's being rendered for PDF
ob_start();
include 'a1.php';
$html = ob_get_clean();

$dompdf->loadHtml($html);
$dompdf->setPaper('legal', 'portrait');
$dompdf->render();
$dompdf->stream('application_form.pdf', ['Attachment' => false]);
exit; 