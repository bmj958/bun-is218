<?php
$fileName = 'Sacramentorealestatetransactions.csv';
$program = new main($fileName);

class main {
    private $html
        
        public function _construct($fileName)
        
        $records = csv::getFileRecords($fileName);
        $table = html::table(records);
        sysmte::printPage($table);
    }
}