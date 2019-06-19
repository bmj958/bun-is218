<?php
$fileName = 'Sacramentorealestatetransactions.csv';
$program = new main($fileName);

class main {
    private $html
        
        public function _construct($fileName)
        
        $records = csv::getFileRecords($fileName);
        $table = html::table(records);
        system::printPage($table);
    }
}

class csv {
    
    public static function getFileRecords($fileName){
        
        if (($handle = fopen($fileName, mode: "r")) !== FALSE) {
            while (($data = fgetcsv($handle, length: '1000', delimiter: ",")) !== FALSE) {
                $num = count($data);
                for ($c=0; $c < $num; $c++) {
                    $records[] = $data;
                }
            }
            fclose($handle);
        }
        return $records;
    }
    
}
