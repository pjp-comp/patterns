<?php
namespace TemplateMethod;

abstract class ReportGenerator
{
    // The template method defining the steps of the algorithm
    public function generateReport()
    {
        $data = $this->fetchData(); // Step 1
        $formattedData = $this->formatReport($data); // Step 2 (implemented by subclass)
        $this->output($formattedData); // Step 3
    }

    // Step 1: Fetch data - the same for all subclasses
    protected function fetchData()
    {
        return "Sample Data";
    }

    // Step 2: Format report - must be implemented by subclasses
    abstract protected function formatReport($data);

    // Step 3: Output the result - the same for all subclasses
    protected function output($formattedData)
    {
        echo $formattedData;
    }
}

