<?php

//get the module with uppercase letters
$module = strtoupper($_GET['module']);

$desc = $_GET['desc1'];
if($_GET['desc2'] != ""){
    $desc .= ";" . $_GET['desc2'];
}
if($_GET['desc3']  != ""){
    $desc .= ";" . $_GET['desc3'];
}
if($_GET['desc4']  != ""){
    $desc .= ";" . $_GET['desc4'];
}


$date = date("d-m-Y");

$file = fopen("tasks.csv", "a");
fwrite($file, $date . ";" . $module . ";" . $desc . "\n");
fclose($file);