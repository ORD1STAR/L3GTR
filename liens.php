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

<br>
<h4> Belache: <a href="http://gbelache.alwaysdata.net/pweb/index.php">http://gbelache.alwaysdata.net/pweb/index.php</a> </h4>
<h4>Drive: <a href="https://drive.google.com/drive/folders/15lo0Wm1MrzxGn5wG9Tt_A4fE0FBFJgut?usp=sharing">https://drive.google.com/drive/folders/LienTwilBezaf</a> </h4>

</body>
</html>