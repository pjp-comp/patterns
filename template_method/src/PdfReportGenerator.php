<?php
namespace TemplateMethod;

use TemplateMethod\ReportGenerator;

class PdfReportGenerator extends ReportGenerator
{
    // Step 2: Format the report in "PDF" (for simplicity, we're just simulating it as text)
    protected function formatReport($data)
    {
        return "PDF Report: $data";
    }
}
