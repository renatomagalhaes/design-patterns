<?php

// Element interface
interface FinancialElement {
    public function accept(FinancialReportVisitor $visitor);
}

// Concrete Element
class Invoice implements FinancialElement {
    private $amount;

    public function __construct($amount) {
        $this->amount = $amount;
    }

    public function getAmount() {
        return $this->amount;
    }

    public function accept(FinancialReportVisitor $visitor) {
        $visitor->visitInvoice($this);
    }
}

// Concrete Element
class Receipt implements FinancialElement {
    private $amount;

    public function __construct($amount) {
        $this->amount = $amount;
    }

    public function getAmount() {
        return $this->amount;
    }

    public function accept(FinancialReportVisitor $visitor) {
        $visitor->visitReceipt($this);
    }
}

// Visitor interface
interface FinancialReportVisitor {
    public function visitInvoice(Invoice $invoice);
    public function visitReceipt(Receipt $receipt);
}

// Concrete Visitor for PDF report generation
class PdfReportVisitor implements FinancialReportVisitor {
    public function visitInvoice(Invoice $invoice) {
        echo "Generating PDF for Invoice: " . $invoice->getAmount() . "\n";
    }

    public function visitReceipt(Receipt $receipt) {
        echo "Generating PDF for Receipt: " . $receipt->getAmount() . "\n";
    }
}

// Concrete Visitor for CSV report generation
class CsvReportVisitor implements FinancialReportVisitor {
    public function visitInvoice(Invoice $invoice) {
        echo "Generating CSV for Invoice: " . $invoice->getAmount() . "\n";
    }

    public function visitReceipt(Receipt $receipt) {
        echo "Generating CSV for Receipt: " . $receipt->getAmount() . "\n";
    }
}

// Client code
function clientCode() {
    $elements = [
        new Invoice(100),
        new Receipt(200),
    ];

    $pdfVisitor = new PdfReportVisitor();
    $csvVisitor = new CsvReportVisitor();

    foreach ($elements as $element) {
        $element->accept($pdfVisitor);
        $element->accept($csvVisitor);
    }
}

// Usage example
clientCode();
