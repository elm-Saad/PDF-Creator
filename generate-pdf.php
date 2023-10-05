<?php

require __DIR__ . "/vendor/autoload.php";

use Dompdf\Dompdf;
use Dompdf\Options;

include 'inc/appVars.php';

// Define a filter function for sanitizing input
// function sanitizeInput($input) {
//     $sanitizedInput = filter_var($input, FILTER_SANITIZE_STRING);
//     return $sanitizedInput;
// } or 
function sanitizeInput($input) {
    return htmlspecialchars(strip_tags(trim($input)), ENT_QUOTES, 'UTF-8');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['template_name'])) {
    
    $templateName = $_POST['template_name'];
    $templatesDir = __DIR__ . "/templates/$templateName";
    // Extract values from the form
    if($templateName === 'invoice_1'){
        include $templatesDir . "/data_extraction.php";
    }else if( $templateName === 'Recipe_1'){
        include $templatesDir . "/data_extraction.php";
    }else{
        echo 'non-provided';
    }
}

// Set the Dompdf options
$options = new Options;
$options->setChroot(__DIR__);
$options->setIsRemoteEnabled(true);//have external style work on the provided template 
$options->set('defaultFont', 'Helvetica');

$dompdf = new Dompdf($options);

// Set the paper size and orientation

$dompdf->setPaper("Letter", "landscape");//Tabloid Letter A4 ...

// Load the HTML and replace placeholders with values from the form

if(isset($_POST['template_name'])){
    $templatePath = __DIR__ . "/templates/$templateName/$templateName.php";
    // Start output buffering
    ob_start();
    include $templatePath;
    $html = ob_get_clean();
}

$dompdf->loadHtml($html);

// Create the PDF and set attributes
$dompdf->render();

$dompdf->addInfo("Title", $templateName);// "add_info" in earlier versions of Dompdf

// Send the PDF to the browser
$dompdf->stream($templateName, ["Attachment" => 0]);

// Remove the uploaded image from the upload folder
if (file_exists($logoPath) && is_writable($logoPath) && $logoPath != 'images/defaultLogo.png') {
    @unlink($logoPath); // Delete the file
}
