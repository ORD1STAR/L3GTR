
<?php
$date = date("d-m-Y");
$auj = $date;
if(file_exists("newEDT.csv")){
    $file = fopen("newEDT.csv", "r");
    
}else{
    $file = fopen("EDT.csv", "r");
}
$auj = explode("-", $auj);
$jour = $auj[0];
$mois = $auj[1];
$annee = $auj[2];
$numJour = date("N", mktime(0, 0, 0, $mois, $jour, $annee));
$i = 6;
$modules = array();
if(file_exists("newEDT.csv")){
    while(!feof($file)){
        $line = fgets($file);
        if($line){
            $line = explode(";", $line);
            $modules = $line;
        }
    }
}else{
    while(!feof($file)){
        $line = fgets($file);
        if($line){
            if($i == $numJour+1){
                $line = explode(";", $line);
                $modules = $line;
            }
        }
        if($i == 5){
            break;
        }
        $i++;
        if($i == 8){
            $i = 1;
        }
    }
}



fclose($file);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>L3 GTR</title>
</head>
<body>

<nav class="navbar">
    <h1><a href="index.php" class="titre">L3 GTR</a></h1>
    <div class="nav-links">
        <ul>
            <?php
                if (isset($_COOKIE['ADMINISTRAiowepj'])) {
                    echo '<li><a href="task+.php">Ajouter une tache</a></li>';
                    echo "<li><a href='edt.php'>changer l'EDT de demain</a></li>";
                }
            ?>

            <li><a href="liens.php">Liens utile</a></li>
            <?php
                if(!isset($_COOKIE['ADMINISTRAiowepj'])){
                    echo "<li><a href='admin.php'>I'm an admin</a></li>";
                }
            ?>
        </ul>
    </div>

</nav>



<h3 align="center">Nouvel emploi du temps</h3>
<table border='1'>
<tr>
<th> </th>
<th>8-9:30</th>
<th>9:40-11:10</th>
<th>11:20-12:50</th>
<th>13-14:30</th>
<th>14:40-16:10</th>
<td></td>
</tr>
<tr>
<th>Demain</th>
<form action="crenew.php" class="new">
    <?php $i=0;if(file_exists("newEDT.csv")){$i=1;}?>
<td><input type="text" name="une" <?php if(isset($modules[0])){echo "value='$modules[$i]'";$i++;}?>></td>
<td><input type="text" name="de" <?php if(isset($modules[1])){echo "value='$modules[$i]'";$i++;}?> ></td>
<td><input type="text" name="twa" <?php if(isset($modules[2])){echo "value='$modules[$i]'";$i++;}?> ></td>
<td><input type="text" name="katr" <?php if(isset($modules[3])){echo "value='$modules[$i]'";$i++;}?> ></td>
<td><input type="text" name="sink" <?php if(isset($modules[4])){echo "value='$modules[$i]'";$i++;}?> ></td>
<td><input type="submit" value="Valider"></td>
</form>
</tr>
</table>

<a href="reset.php">Reset l'emplois du temps</a>





</body>
</html>


