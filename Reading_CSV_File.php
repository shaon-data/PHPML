<?php
include __DIR__."/init.php";
$dataset = new CsvDataset('php-ml/data/glass.csv', 10, true);
$Column_N = ($dataset->getColumnNames());

print("Column Names:<br>");
$i=0;
foreach ($Column_N as $arr){
    print_r(++$i.". ".$arr."<br>");
}


function Rcolumn($dataset){
    $rcolumn = Array();
    
    foreach($dataset->getSamples() as $row){
        $columncell = $row[0]; //1st column
        //print_r($columncell."<br>");
        array_push($rcolumn, $columncell);
    }
    return $rcolumn;
}

print_r(Rcolumn($dataset));
?>