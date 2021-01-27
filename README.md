#PDFMerger for PHP (PHP 5/Laravel Compatible)

Original written by http://pdfmerger.codeplex.com/team/view port to PHP 5 by https://github.com/myokyawhtun/PDFMerger
I've forked it from https://github.com/rguedes/PDFMerger to update FPDF version and have support of php 7.4+

## Laravel Compatible

Laravel compatibility tested on v8.
Sample file adapted for Laravel

### Example Usage
```php

$pdf = new \PDFMerger;

$pdf->addPDF('samplepdfs/one.pdf', '1, 3, 4');
$pdf->addPDF('samplepdfs/two.pdf', '1-2');
$pdf->addPDF('samplepdfs/three.pdf', 'all');


$pdf->merge('file', 'samplepdfs/TEST2.pdf'); 
    
// REPLACE 'file' WITH 'browser', 'download', 'string', or 'file' for output options
```
