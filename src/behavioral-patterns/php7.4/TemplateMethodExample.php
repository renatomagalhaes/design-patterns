<?php

// Abstract class defining the template method
abstract class ReportTemplate {

    // Template method defining the structure of the algorithm
    final public function generateReport() {
        $this->addTitle();
        $this->addIntroduction();
        $this->addContent();
        $this->addConclusion();
    }

    protected function addTitle() {
        echo "Adding the report title\n";
    }

    protected function addIntroduction() {
        echo "Adding the introduction\n";
    }

    // Abstract methods to be implemented by subclasses
    abstract protected function addContent();
    abstract protected function addConclusion();
}

// Concrete class implementing the abstract methods
class SalesReport extends ReportTemplate {
    protected function addContent() {
        echo "Adding sales data content\n";
    }

    protected function addConclusion() {
        echo "Adding sales conclusion\n";
    }
}

// Concrete class implementing the abstract methods
class HRReport extends ReportTemplate {
    protected function addContent() {
        echo "Adding HR data content\n";
    }

    protected function addConclusion() {
        echo "Adding HR conclusion\n";
    }
}

// Client code
function clientCode() {
    $report = new SalesReport();
    $report->generateReport();

    echo "\n";

    $report = new HRReport();
    $report->generateReport();
}

// Usage example
clientCode();
