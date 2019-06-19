<?php
$fileName = 'Sacramentorealestatetransactions.csv';
$program = new main($fileName);

class main {
    
    private $html
        
        public function _construct($fileName)
        {
        
        $records = csv::getFileRecords($fileName);
        $table = html::table(records);
        system::printPage($table);
        
        }
}

class csv {
    
    
    public static function getFileRecords($fileName){
        
        if (($handle = fopen($fileName, mode: "r")) !== FALSE) {
            while (($data = fgetcsv($handle, length: '1000', delimiter: ",")) !== FALSE) {
             $records[] = $data;
            }
            fclose($handle);
        }
        return $records;
    }
    
}

class html {
    
    public static function tableRow($row) {
        
        $html = "<tr> $row </tr>";
        
        return $html;
        
    }
    public static function table($records) {
        //start table
        $html = '<table>';
        //header row
        $html .= '<tr>';
        $headings = array_shift( &array: $records);
        foreach(headings as $key=>$value){
            $html .= '<th>' . htmlspecialchars($key) . '</th>';
        }
        $html .= '</tr>';
        
        //data rows
        foreach( $records as $key=>$value){
            $html .= '<tr>';
            foreach($value as $key2=>$value2){
                $html .= '<td>' . htmlspecialchars($value2) . '</td>';
            }
            $html .= '</tr>';
        }
        
        //finish table and return it
        
        $html .= '</table>';
        return $html;
    }
}

