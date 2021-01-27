<?php
use \PDFMerger;

$pdf = new PDFMerger();

$pdf->addPDF(storage_path('app/public/' . 'samplepdfs/one.pdf'), '1, 3, 4')
	->addPDF(storage_path('app/public/' . 'samplepdfs/two.pdf'), '1-2')
	->addPDF(storage_path('app/public/' . 'samplepdfs/three.pdf'), 'all')
	->merge('file', storage_path("app/public/merged_invoice.pdf"));
	
	//REPLACE 'file' WITH 'browser', 'download', 'string', or 'file' for output options
	//You do not need to give a file path for browser, string, or download - just the name.
