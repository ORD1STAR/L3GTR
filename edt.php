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
<form action="crenew.php" class="new">
<tr>
<th>Demain</th>
<td><input type="text" name="une"></td>
<td><input type="text" name="de"></td>
<td><input type="text" name="twa"></td>
<td><input type="text" name="katr"></td>
<td><input type="text" name="sink"></td>
<td><input type="submit" value="Valider"></td>
</tr>



</form>





</body>
</html>


