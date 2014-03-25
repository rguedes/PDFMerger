#PDFMerger for PHP (PHP 5/Laravel Compatible)

Original written by http://pdfmerger.codeplex.com/team/view port to PHP 5 by https://github.com/myokyawhtun/PDFMerger

## Laravel Compatible

I have made some changes to make PHPMerger compatible for Laravel 4

### Example Usage
```php

$pdf = new \PDFMerger;

$pdf->addPDF('samplepdfs/one.pdf', '1, 3, 4');
$pdf->addPDF('samplepdfs/two.pdf', '1-2');
$pdf->addPDF('samplepdfs/three.pdf', 'all');


$pdf->merge('file', 'samplepdfs/TEST2.pdf'); 
    
// REPLACE 'file' WITH 'browser', 'download', 'string', or 'file' for output options
```
