<?php


require_once 'ExportPdf.php';
require_once 'ExportFile.php';


$file = (new ExportFile(new ExportPdf()))->export("file path");