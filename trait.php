<?php

$file = fopen("logins.txt", "r");
$login = $_POST["login"];
$password = $_POST["password"];
$read = fread($file, 200);
fclose($file);
if(strpos($read, "$login:$password") !== false){
    setcookie("ADMINISTRAiowepj" , "Is", time() + 60*60*24);
    header("Location: index.php");
}else{
    header("Location: admin.php");
}
