<?php

$module = $_GET["mod"];
$n = $_GET["n"];

$lines = array();

$file = fopen("tasks.csv", "r");
while(($elements = fgetcsv($file, 1000, ";")) !== FALSE){ 
    if($elements[0] == $_GET["mod"]){
        //delete the n-th element
        unset($elements[$n]);
    }
    array_push($lines, $elements);
}

fclose($file);
$file = fopen("tasks.csv", "w");
foreach($lines as $line){
    fputcsv($file, $line, ";");
}
fclose($file);

header("location: task+.php?");