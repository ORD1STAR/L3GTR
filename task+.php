
<?php

    if(isset($_GET["mod"]) && isset($_GET["titre"])){
        $file = fopen("tasks.csv", "r");
        $lines = array();
        while(($elements = fgetcsv($file, 1000, ";")) !== FALSE){ 
            if($elements[0] == $_GET["mod"]){
                array_push($elements, $_GET["titre"]);
            }
            array_push($lines, $elements);
        }
        fclose($file);
        $file = fopen("tasks.csv", "w");
        foreach($lines as $line){
            fputcsv($file, $line, ";");
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

<div class="tasks">
    <table border="1">
        <tr>
            <th>RSF</th>
            <td>
                <form action="task+.php">
                    <input type="hidden" name="mod" value="RSF">
                    <input type="text" name="titre" value="" required>
                    <input type="submit" value="Add">
                </form>
            </td>
            <?php
            //affichier toutes les taches de rsf
            $file = fopen("tasks.csv", "r");
            while(!feof($file)){
                $line = fgets($file);
                if($line){
                    $line = explode(";", $line);
                    if($line[0] == "RSF"){
                        echo "<tr>";
                        for($i = 1; $i < count($line); $i++){
                            $line[$i] = str_replace('"', "", $line[$i]);
                            echo "<td>$line[$i]<br><a href='del.php?mod=RSF&n=$i'>Supprimer</a></td>";
                        }
                        echo "</tr>";
                    }
                }
            }
            fclose($file);
            ?>
        </tr>
        <tr>
            <th>SCAN</th>
            <td>
                <form action="task+.php">
                    <input type="hidden" name="mod" value="SCAN">
                    <input type="text" name="titre" required>
                    <input type="submit" value="Add">
                </form>
            </td>
            <?php
            //affichier toutes les taches de scan
            $file = fopen("tasks.csv", "r");
            while(!feof($file)){
                $line = fgets($file);
                if($line){
                    $line = explode(";", $line);
                    if($line[0] == "SCAN"){
                        echo "<tr>";
                        for($i = 1; $i < count($line); $i++){
                            $line[$i] = str_replace('"', "", $line[$i]);
                            echo "<td>$line[$i]<br><a href='del.php?mod=SCAN&n=$i'>Supprimer</a></td>";
                        }
                        echo "</tr>";
                    }
                }
            }
            fclose($file);
            ?>
        </tr>
        <tr>
            <th>STIR</th>
            <td>
                <form action="task+.php">
                    <input type="hidden" name="mod" value="STIR">
                    <input type="text" name="titre" required>
                    <input type="submit" value="Add">
                </form>
            </td>
            <?php
            //affichier toutes les taches de stir
            $file = fopen("tasks.csv", "r");
            while(!feof($file)){
                $line = fgets($file);
                if($line){
                    $line = explode(";", $line);
                    if($line[0] == "STIR"){
                        echo "<tr>";
                        for($i = 1; $i < count($line); $i++){
                            $line[$i] = str_replace('"', "", $line[$i]);
                            echo "<td>$line[$i]<br><a href='del.php?mod=STIR&n=$i'>Supprimer</a></td>";
                        }
                        echo "</tr>";
                    }
                }
            }
            fclose($file);
            ?>
        </tr>
        <tr>
            <th>TICT</th>
            <td>
                <form action="task+.php">
                    <input type="hidden" name="mod" value="TICT">
                    <input type="text" name="titre" required>
                    <input type="submit" value="Add">
                </form>
            </td>
            <?php
            //affichier toutes les taches de tict
            $file = fopen("tasks.csv", "r");
            while(!feof($file)){
                $line = fgets($file);
                if($line){
                    $line = explode(";", $line);
                    if($line[0] == "TICT"){
                        echo "<tr>";
                        for($i = 1; $i < count($line); $i++){
                            $line[$i] = str_replace('"', "", $line[$i]);
                            echo "<td>$line[$i]<br><a href='del.php?mod=TICT&n=$i'>Supprimer</a></td>";
                        }
                        echo "</tr>";
                    }
                }
            }
            fclose($file);
            ?>
        </tr>
        <tr>
            <th>WEB</th>
            <td>
                <form action="task+.php">
                    <input type="hidden" name="mod" value="WEB">
                    <input type="text" name="titre" required>
                    <input type="submit" value="Add">
                </form>
            </td>
            <?php
            //affichier toutes les taches de web
            $file = fopen("tasks.csv", "r");
            while(!feof($file)){
                $line = fgets($file);
                if($line){
                    $line = explode(";", $line);
                    if($line[0] == "WEB"){
                        echo "<tr>";
                        for($i = 1; $i < count($line); $i++){
                            $line[$i] = str_replace('"', "", $line[$i]);
                            echo "<td>$line[$i]<br><a href='del.php?mod=WEB&n=$i'>Supprimer</a></td>";
                        }
                        echo "</tr>";
                    }
                }
            }
            fclose($file);
            ?>
        </tr>
        <tr>
            <th>ADM</th>
            <td>
                <form action="task+.php">
                    <input type="hidden" name="mod" value="ADM">
                    <input type="text" name="titre" required>
                    <input type="submit" value="Add">
                </form>
            </td>
            <?php
            //affichier toutes les taches de adm
            $file = fopen("tasks.csv", "r");
            while(!feof($file)){
                $line = fgets($file);
                if($line){
                    $line = explode(";", $line);
                    if($line[0] == "ADM"){
                        echo "<tr>";
                        for($i = 1; $i < count($line); $i++){
                            $line[$i] = str_replace('"', "", $line[$i]);
                            echo "<td>$line[$i]<br><a href='del.php?mod=ADM&n=$i'>Supprimer</a></td>";
                        }
                        echo "</tr>";
                    }
                }
            }
            fclose($file);
            ?>
        </tr>
        <tr>
            <th>TTMIP</th>
            <td>
                <form action="task+.php">
                    <input type="hidden" name="mod" value="TTMIP">
                    <input type="text" name="titre" required>
                    <input type="submit" value="Add">
                </form>
            </td>
            <?php
            //affichier toutes les taches de ttmip
            $file = fopen("tasks.csv", "r");
            while(!feof($file)){
                $line = fgets($file);
                if($line){
                    $line = explode(";", $line);
                    if($line[0] == "TTMIP"){
                        echo "<tr>";
                        for($i = 1; $i < count($line); $i++){
                            $line[$i] = str_replace('"', "", $line[$i]);
                            echo "<td>$line[$i]<br><a href='del.php?mod=TTMIP&n=$i'>Supprimer</a></td>";
                        }
                        echo "</tr>";
                    }
                }
            }
            fclose($file);
            ?>
        </tr>


        


        
            
    </table>
</div>

</body>
</html>


