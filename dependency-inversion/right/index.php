<?php


require_once 'ExportFileInterface.php';
require_once 'ExportPdf.php';
require_once 'ExportCsv.php';
require_once 'ExportFile.php';


$file = (new ExportFile(new ExportCsv()))->export("file path");