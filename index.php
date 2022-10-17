
<?php

    $date = date("d-m-Y");
    $auj = $date;
    
    $date = explode("-", $date);
    $date[0] = $date[0] + 1;
    $date = implode("-", $date);
    if (file_exists('newEDT.csv')) {
        
        $file = fopen('newEDT.csv', 'r');
        $lines = fgets($file);
        $firstLine = explode(';', $lines);

        if ($firstLine[0] != $date && $firstLine[0] != $auj) {
            unlink('newEDT.csv');
        }
        fclose($file);
    }

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

<div class="forTomorrow">
    <?php
        echo "Date de demain : " . $date;
    ?>

    <hr>
    <div class="edt">
        <?php

        //if file "newEDT.csv" doesnt exist then do this 
        if(!file_exists("newEDT.csv")){
            $file = fopen("EDT.csv", "r");
            $auj = explode("-", $auj);
            $jour = $auj[0];
            $mois = $auj[1];
            $annee = $auj[2];
            $numJour = date("N", mktime(0, 0, 0, $mois, $jour, $annee));
            $i = 6;
            echo "<h3>Emploi du temps</h3>";
            echo "<table border='1'>";
            echo "<tr>";
            echo "<th> </th>";
            echo "<th>8-9:30</th>";
            echo "<th>9:40-11:10</th>";
            echo "<th>11:20-12:50</th>";
            echo "<th>13-14:30</th>";
            echo "<th>14:40-16:10</th>";
            echo "</tr>";
            while(!feof($file)){
                $line = fgets($file);
                if($line){
                    $line = explode(";", $line);
                    if($i == $numJour+1){
                        echo "<tr>";
                        echo "<td>Demain</td>";
                        for($j = 0; $j < count($line); $j++){
                            
                            $line[$j] = str_replace("$", "<br>", $line[$j]);
                            echo "<td>$line[$j]</td>";
                            $j++;
                            $line[$j] = str_replace("$", "<br>", $line[$j]);
                            echo "<td>$line[$j]</td>";
                            $j++;
                            $line[$j] = str_replace("$", "<br>", $line[$j]);
                            echo "<td>$line[$j]</td>";
                            $j++;
                            $line[$j] = str_replace("$", "<br>", $line[$j]);
                            echo "<td>$line[$j]</td>";
                            $j++;
                            $line[$j] = str_replace("$", "<br>", $line[$j]);
                            echo "<td>$line[$j]</td>";
                            
                        }
                        echo "</tr>";
                    }
                    if($numJour == $i){
                        echo "<tr>";
                        echo "<td>Aujourd'hui</td>";
                        for($j = 0; $j < count($line); $j++){
                            
                            $line[$j] = str_replace("$", "<br>", $line[$j]);
                            echo "<td>$line[$j]</td>";
                            $j++;
                            $line[$j] = str_replace("$", "<br>", $line[$j]);
                            echo "<td>$line[$j]</td>";
                            $j++;
                            $line[$j] = str_replace("$", "<br>", $line[$j]);
                            echo "<td>$line[$j]</td>";
                            $j++;
                            $line[$j] = str_replace("$", "<br>", $line[$j]);
                            echo "<td>$line[$j]</td>";
                            $j++;
                            $line[$j] = str_replace("$", "<br>", $line[$j]);
                            echo "<td>$line[$j]</td>";
                            
                        }
                        echo "</tr>";
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
            echo "</table>";
            fclose($file);
        }else{
            $file = fopen("newEDT.csv", "r");
            $file2 = fopen("EDT.csv", "r");
            $new = fread($file, 200);
            $new = explode(";", $new);
            echo "<h3>Emploi du temps</h3>";
            echo "<table border='1'>";
            echo "<tr>";
            echo "<th> </th>";
            echo "<th>8-9:30</th>";
            echo "<th>9:40-11:10</th>";
            echo "<th>11:20-12:50</th>";
            echo "<th>13-14:30</th>";
            echo "<th>14:40-16:10</th>";
            echo "</tr>";
            echo "<tr>";
            $auj = explode("-", $auj);
            $jour = $auj[0];
            $mois = $auj[1];
            $annee = $auj[2];
            for($j = 1; $j < count($new); $j++){
                if($new[0] == "$jour-$mois-$annee"){
                    
                    echo "<td>Aujourd'hui</td>";
                    $new[$j] = str_replace("$", "<br>", $new[$j]);
                    echo "<td>$new[$j]</td>";
                    $j++;
                    $new[$j] = str_replace("$", "<br>", $new[$j]);
                    echo "<td>$new[$j]</td>";
                    $j++;
                    $new[$j] = str_replace("$", "<br>", $new[$j]);
                    echo "<td>$new[$j]</td>";
                    $j++;
                    $new[$j] = str_replace("$", "<br>", $new[$j]);
                    echo "<td>$new[$j]</td>";
                    $j++;
                    $new[$j] = str_replace("$", "<br>", $new[$j]);
                    echo "<td>$new[$j]</td>";

                    echo "</tr>";
                    $numJour = date("N", mktime(0, 0, 0, $mois, $jour, $annee));
                    $i = 6;
                    while(!feof($file2)){
                        $line = fgets($file2);
                        if($line){
                            $line = explode(";", $line);
                            if($i == $numJour+1){
                                echo "<tr>";
                                echo "<td>Demain</td>";
                                for($j = 0; $j < count($line); $j++){

                                    $line[$j] = str_replace("$", "<br>", $line[$j]);
                                    echo "<td>$line[$j]</td>";
                                    $j++;
                                    $line[$j] = str_replace("$", "<br>", $line[$j]);
                                    echo "<td>$line[$j]</td>";
                                    $j++;
                                    $line[$j] = str_replace("$", "<br>", $line[$j]);
                                    echo "<td>$line[$j]</td>";
                                    $j++;
                                    $line[$j] = str_replace("$", "<br>", $line[$j]);
                                    echo "<td>$line[$j]</td>";
                                    $j++;
                                    $line[$j] = str_replace("$", "<br>", $line[$j]);
                                    echo "<td>$line[$j]</td>";

                                }
                                echo "</tr>";
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
                }else{
                    $numJour = date("N", mktime(0, 0, 0, $mois, $jour, $annee));
                    $i = 6;
                    while(!feof($file2)){
                        $line = fgets($file2);
                        if($line){
                            $line = explode(";", $line);
                            if($i == $numJour){
                                echo "<tr>";
                                echo "<td>Aujourd'hui</td>";
                                for($j = 0; $j < count($line); $j++){

                                    $line[$j] = str_replace("$", "<br>", $line[$j]);
                                    echo "<td>$line[$j]</td>";
                                    $j++;
                                    $line[$j] = str_replace("$", "<br>", $line[$j]);
                                    echo "<td>$line[$j]</td>";
                                    $j++;
                                    $line[$j] = str_replace("$", "<br>", $line[$j]);
                                    echo "<td>$line[$j]</td>";
                                    $j++;
                                    $line[$j] = str_replace("$", "<br>", $line[$j]);
                                    echo "<td>$line[$j]</td>";
                                    $j++;
                                    $line[$j] = str_replace("$", "<br>", $line[$j]);
                                    echo "<td>$line[$j]</td>";

                                }
                                echo "</tr>";
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

                    //******************************************** */
                    $jour = $auj[0]+1;
                    $mois = $auj[1];
                    $annee = $auj[2];
                    for($j = 1; $j < count($new); $j++){
                        if($new[0] == "$jour-$mois-$annee"){

                            echo "<td>Demain</td>";
                            $new[$j] = str_replace("$", "<br>", $new[$j]);
                            echo "<td>$new[$j]</td>";
                            $j++;
                            $new[$j] = str_replace("$", "<br>", $new[$j]);
                            echo "<td>$new[$j]</td>";
                            $j++;
                            $new[$j] = str_replace("$", "<br>", $new[$j]);
                            echo "<td>$new[$j]</td>";
                            $j++;
                            $new[$j] = str_replace("$", "<br>", $new[$j]);
                            echo "<td>$new[$j]</td>";
                            $j++;
                            $new[$j] = str_replace("$", "<br>", $new[$j]);
                            echo "<td>$new[$j]</td>";
                        
                            echo "</tr>";
                        }
                    }
                    
                }
                
            }
            
            echo "</table>";
            fclose($file);
            fclose($file2);
        }
        ?>
    </div>
    <?php

        $file = fopen("tasks.csv", "r");
        while(!feof($file)){
            $line = fgets($file);
            if($line){
                $line = explode(";", $line);
                
                if(isset($line[1])){
                    echo "<h3>$line[0]</h3>";
                    for($i = 1; $i < count($line); $i++){
                        $line[$i] = str_replace('"', "", $line[$i]);
                        echo "<p>$line[$i]</p>";
                    }
                }
                
                
            }
            
        }
        fclose($file);

    ?>

    

</div>

</body>
</html>