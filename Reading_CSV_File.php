<?php
include __DIR__."/init.php";
$dataset = new CsvDataset('php-ml/data/glass.csv', 10, true);

function Rcolumn_names($dataset){
    $rcolumn_names = array();
    
    foreach ($dataset->getColumnNames() as $arr){
        array_push($rcolumn_names, $arr);
    }
    return $rcolumn_names;
}

function Rcolumn($dataset){
    $rcolumn = array();
    
    foreach($dataset->getSamples() as $row){
        $columncell = $row[0]; //1st column
        //print_r($columncell."<br>");
        array_push($rcolumn, $columncell);
    }
    return $rcolumn;
}

function RshowData($dataset){
    $i=0;
    foreach($dataset->getSamples() as $row){
        print(++$i.". ");
        print_r($row);
        print("<br>");
        //array_push($rcolumn, $columncell);
    }
}

function Rrow($dataset, $n){
    return $dataset->getSamples()[$n];
}

//print_r(Rrow($dataset, 213));
//print_r(RshowData($dataset));
//print_r(Rcolumn_names($dataset));
//print_r(Rcolumn($dataset));
?>