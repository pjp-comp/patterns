<?php

require 'vendor/autoload.php';
use TemplateMethod\HtmlReportGenerator;
use TemplateMethod\PdfReportGenerator;

// without : autoloading setup properly
// require_once 'ReportGenerator.php';
// require_once 'HtmlReportGenerator.php';
// require_once 'PdfReportGenerator.php';



$htmlReport = new HtmlReportGenerator;
$htmlReport->generateReport(); // Output: <html><body><h1>Sample Data</h1></body></html>

echo "\n\n";

// Generate PDF Report
$pdfReport = new PdfReportGenerator;
$pdfReport->generateReport(); // Output: PDF Report: Sample Data

