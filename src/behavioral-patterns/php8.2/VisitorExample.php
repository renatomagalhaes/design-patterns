<?php

// Element interface
interface FinancialElement {
    public function accept(FinancialReportVisitor $visitor): void;
}

// Concrete Element
class Invoice implements FinancialElement {
    private float $amount;

    public function __construct(float $amount) {
        $this->amount = $amount;
    }

    public function getAmount(): float {
        return $this->amount;
    }

    public function accept(FinancialReportVisitor $visitor): void {
        $visitor->visitInvoice($this);
    }
}

// Concrete Element
class Receipt implements FinancialElement {
    private float $amount;

    public function __construct(float $amount) {
        $this->amount = $amount;
    }

    public function getAmount(): float {
        return $this->amount;
    }

    public function accept(FinancialReportVisitor $visitor): void {
        $visitor->visitReceipt($this);
    }
}

// Visitor interface
interface FinancialReportVisitor {
    public function visitInvoice(Invoice $invoice): void;
    public function visitReceipt(Receipt $receipt): void;
}

// Concrete Visitor for PDF report generation
class PdfReportVisitor implements FinancialReportVisitor {
    public function visitInvoice(Invoice $invoice): void {
        echo "Generating PDF for Invoice: " . $invoice->getAmount() . "\n";
    }

    public function visitReceipt(Receipt $receipt): void {
        echo "Generating PDF for Receipt: " . $receipt->getAmount() . "\n";
    }
}

// Concrete Visitor for CSV report generation
class CsvReportVisitor implements FinancialReportVisitor {
    public function visitInvoice(Invoice $invoice): void {
        echo "Generating CSV for Invoice: " . $invoice->getAmount() . "\n";
    }

    public function visitReceipt(Receipt $receipt): void {
        echo "Generating CSV for Receipt: " . $receipt->getAmount() . "\n";
    }
}

// Client code
function clientCode(): void {
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
