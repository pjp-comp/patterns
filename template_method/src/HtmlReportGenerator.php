<?php
namespace TemplateMethod;

use TemplateMethod\ReportGenerator;

class HtmlReportGenerator extends ReportGenerator
{
    // Step 2: Format the report in HTML
    protected function formatReport($data)
    {
        return "<html><body><h1>$data</h1></body></html>";
    }
}

