<?php




class ExportFile{

    private $exportTool;

    public function __construct(ExportPdf $export)
    {
        $this->exportTool = $export;
    }


    public function export($file){
        return $this->exportTool->download($file);
    }
}