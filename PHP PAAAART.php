
<!--<?php
    // Setting up date (auj + demain)

    $date = date("d-m-Y");
    $auj = $date;
    
    $date = explode("-", $date);
    $date[0] = $date[0] + 1;
    $date = implode("-", $date);


    // Deleting newEDT.csv is not up to date

    if (file_exists('newEDT.csv')) {
        
        $file = fopen('newEDT.csv', 'r');
        $lines = fgets($file);
        $firstLine = explode(';', $lines);

        if ($firstLine[0] != $date && $firstLine[0] != $auj) {
            unlink('newEDT.csv');
        }
        fclose($file);
    }

?>-->









<?php
        // Displaying tomorrow's date
        echo "Date de demain : " . $date;
    ?>

    <div class="edt">
        <?php

        //if file "newEDT.csv" doesnt exist then do this 
        // Creating table from EDT.csv

        if(!file_exists("newEDT.csv")){
            $file = fopen("EDT.csv", "r");

            // Getting Date Variables

            $auj = explode("-", $auj);
            $jour = $auj[0];
            $mois = $auj[1];
            $annee = $auj[2];
            $numJour = date("N", mktime(0, 0, 0, $mois, $jour, $annee)); // 1=Monday, 7=Sunday


            $i = 6;  // ???

            //echo "<table border='1'>";
            //echo "<tr>";
            //echo "<th> </th>";
            //echo "<th>8-9:30</th>";
            //echo "<th>9:40-11:10</th>";
            //echo "<th>11:20-12:50</th>";
            //echo "<th>13-14:30</th>";
            //echo "<th>14:40-16:10</th>";
            //echo "</tr>";
            while(!feof($file)){
                $line = fgets($file);
                if($line){
                    $line = explode(";", $line);
                    if($i == $numJour+1){
                        echo "<tr>";
                        echo "<td>Demain</td>";
                        for($j = 0; $j < count($line); $j++){
                            
                            $line[$j] = str_replace("$", "<br>", $line[$j]);
                            $line[$j] = str_replace('"', "", $line[$j]);
                            echo "<td>$line[$j]</td>";
                            $j++;
                            $line[$j] = str_replace("$", "<br>", $line[$j]);
                            $line[$j] = str_replace('"', "", $line[$j]);
                            echo "<td>$line[$j]</td>";
                            $j++;
                            $line[$j] = str_replace("$", "<br>", $line[$j]);
                            $line[$j] = str_replace('"', "", $line[$j]);
                            echo "<td>$line[$j]</td>";
                            $j++;
                            $line[$j] = str_replace("$", "<br>", $line[$j]);
                            $line[$j] = str_replace('"', "", $line[$j]);
                            echo "<td>$line[$j]</td>";
                            $j++;
                            $line[$j] = str_replace("$", "<br>", $line[$j]);
                            $line[$j] = str_replace('"', "", $line[$j]);
                            echo "<td>$line[$j]</td>";
                            
                        }
                        echo "</tr>";
                    }
                    if($numJour == $i){
                        echo "<tr>";
                        echo "<td>Aujourd'hui</td>";
                        for($j = 0; $j < count($line); $j++){
                            
                            $line[$j] = str_replace("$", "<br>", $line[$j]);
                            $line[$j] = str_replace('"', "", $line[$j]);
                            echo "<td>$line[$j]</td>";
                            $j++;
                            $line[$j] = str_replace("$", "<br>", $line[$j]);
                            $line[$j] = str_replace('"', "", $line[$j]);
                            echo "<td>$line[$j]</td>";
                            $j++;
                            $line[$j] = str_replace("$", "<br>", $line[$j]);
                            $line[$j] = str_replace('"', "", $line[$j]);
                            echo "<td>$line[$j]</td>";
                            $j++;
                            $line[$j] = str_replace("$", "<br>", $line[$j]);
                            $line[$j] = str_replace('"', "", $line[$j]);
                            echo "<td>$line[$j]</td>";
                            $j++;
                            $line[$j] = str_replace("$", "<br>", $line[$j]);
                            $line[$j] = str_replace('"', "", $line[$j]);
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
                    $new[$j] = str_replace('"', "", $new[$j]);
                    echo "<td>$new[$j]</td>";
                    $j++;
                    $new[$j] = str_replace("$", "<br>", $new[$j]);
                    $new[$j] = str_replace('"', "", $new[$j]);
                    echo "<td>$new[$j]</td>";
                    $j++;
                    $new[$j] = str_replace("$", "<br>", $new[$j]);
                    $new[$j] = str_replace('"', "", $new[$j]);
                    echo "<td>$new[$j]</td>";
                    $j++;
                    $new[$j] = str_replace("$", "<br>", $new[$j]);
                    $new[$j] = str_replace('"', "", $new[$j]);
                    echo "<td>$new[$j]</td>";
                    $j++;
                    $new[$j] = str_replace("$", "<br>", $new[$j]);
                    $new[$j] = str_replace('"', "", $new[$j]);
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
                                    $line[$j] = str_replace('"', "", $line[$j]);
                                    echo "<td>$line[$j]</td>";
                                    $j++;
                                    $line[$j] = str_replace("$", "<br>", $line[$j]);
                                    $line[$j] = str_replace('"', "", $line[$j]);
                                    echo "<td>$line[$j]</td>";
                                    $j++;
                                    $line[$j] = str_replace("$", "<br>", $line[$j]);
                                    $line[$j] = str_replace('"', "", $line[$j]);
                                    echo "<td>$line[$j]</td>";
                                    $j++;
                                    $line[$j] = str_replace("$", "<br>", $line[$j]);
                                    $line[$j] = str_replace('"', "", $line[$j]);
                                    echo "<td>$line[$j]</td>";
                                    $j++;
                                    $line[$j] = str_replace("$", "<br>", $line[$j]);
                                    $line[$j] = str_replace('"', "", $line[$j]);
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
                                    $line[$j] = str_replace('"', "", $line[$j]);
                                    echo "<td>$line[$j]</td>";
                                    $j++;
                                    $line[$j] = str_replace("$", "<br>", $line[$j]);
                                    $line[$j] = str_replace('"', "", $line[$j]);
                                    echo "<td>$line[$j]</td>";
                                    $j++;
                                    $line[$j] = str_replace("$", "<br>", $line[$j]);
                                    $line[$j] = str_replace('"', "", $line[$j]);
                                    echo "<td>$line[$j]</td>";
                                    $j++;
                                    $line[$j] = str_replace("$", "<br>", $line[$j]);
                                    $line[$j] = str_replace('"', "", $line[$j]);
                                    echo "<td>$line[$j]</td>";
                                    $j++;
                                    $line[$j] = str_replace("$", "<br>", $line[$j]);
                                    $line[$j] = str_replace('"', "", $line[$j]);
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
                            $new[$j] = str_replace('"', "", $new[$j]);
                            echo "<td>$new[$j]</td>";
                            $j++;
                            $new[$j] = str_replace("$", "<br>", $new[$j]);
                            $new[$j] = str_replace('"', "", $new[$j]);
                            echo "<td>$new[$j]</td>";
                            $j++;
                            $new[$j] = str_replace("$", "<br>", $new[$j]);
                            $new[$j] = str_replace('"', "", $new[$j]);
                            echo "<td>$new[$j]</td>";
                            $j++;
                            $new[$j] = str_replace("$", "<br>", $new[$j]);
                            $new[$j] = str_replace('"', "", $new[$j]);
                            echo "<td>$new[$j]</td>";
                            $j++;
                            $new[$j] = str_replace("$", "<br>", $new[$j]);
                            $new[$j] = str_replace('"', "", $new[$j]);
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