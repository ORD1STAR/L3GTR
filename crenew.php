<?php

$file = fopen('newEDT.csv', 'w');

$date = date("d-m-Y");
$date = explode("-", $date);
$date[0] = $date[0] + 1;
$date = implode("-", $date);

$csv = array();
$line = array();
array_push($line, $date);
array_push($line, $_GET['une']);
array_push($line, $_GET['de']);
array_push($line, $_GET['twa']);
array_push($line, $_GET['katr']);
array_push($line, $_GET['sink']);
array_push($csv, $line);

foreach ($csv as $fields) {
    fputcsv($file, $fields, ";");
}

fclose($file);

header("Location: index.php");
?>