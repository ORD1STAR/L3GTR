<?php

$file = fopen("logins.txt", "r");
$login = $_GET["login"];
$password = $_GET["password"];
$read = fread($file, 200);
fclose($file);
if(strpos($read, "$login:$password") !== false){
    setcookie("ADMINISTRAiowepj" , "Is", time() + 60*60*24);
    setcookie("user", $login, time()+ 60*60*24);
    header("Location: index.php");
}else{
    header("Location: admin.php");
}
