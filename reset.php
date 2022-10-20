<?php
unlink("newEDT.csv");
$file = fopen("Logs.txt", "a");
fwrite($file, "-" . date("H:i:s") . "-> " . $_COOKIE['user'] . 
                " a supprimé l'emploi du temps\n");
fclose($file);
header("Location: edt.php");