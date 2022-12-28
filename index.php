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
                    echo "<li><a class='admin_btns' href='task+.php'>+ tache</a></li>";
                    echo "<li><a class='admin_btns' href='edt.php'>Modifier EDT</a></li>";
                }
            ?>-

            <!--<li><a href="liens.php">Liens utile</a></li>-->
            <?php
                if(!isset($_COOKIE['ADMINISTRAiowepj'])){
                    echo "<li><a class='admin_connect' href='#'>Admin</a></li>";
                }
            ?>
        </ul>
    </div>

</nav>
<div class="adminMenu">
    <h2>Admin</h2>
    <form action="trait.php" method="POST">
        <input type="text" name="login" placeholder="Login">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" value="Se connecter">
    </form>
    <div class="exitBtn">X</div>
</div>

<div class="forTomorrow">
    <div class="edtPART">
        <table>
            <tr>
                <th></th>
                <th>Aujourdhui</th>
                <th>Demain</th>
            </tr>
            <tr>
                <td><p>8h</p> <p>-</p> <p>9h30</p></td>
                <td>
                    <h3>Module 1</h3>
                    <p>D4</p>
                    <p>2 taches</p>
                </td>
                <td>
                    <h3>module 2</h3>
                    <p>113D</p>
                </td>
            </tr>
            <tr>
                <td><p>9h40</p> <p>-</p> <p>11h10</p></td>
                <td>
                    <p>module 2</p>
                    <p>113D</p>
                </td>
                <td>
                    <h3>module 2</h3>
                    <p>113D</p>
                </td>
            </tr>
            <tr>
                <td><p>11h20</p> <p>-</p> <p>12h50</p></td>
                <td></td>
                <td>
                    <h3>Module 1</h3>
                    <p>D4</p>
                    <p>2 taches</p>
                </td>
            </tr>
            <tr>
                <td><p>13h</p> <p>-</p> <p>14h30</p></td>
                <td>
                    <h3>module 2</h3>
                    <p>113D</p>
                </td>
                <td></td>
            </tr>
            <tr>
                <td><p>14h40</p> <p>-</p> <p>16h10</p></td>
                <td>
                    <h3>Module 1</h3>
                    <p>D4</p>
                    <p>2 taches</p>
                </td>
                <td></td>
            </tr>
                <!--=============>      INSERT PHP HERE   (Table rows)    <============= -->
        </table>
        
        <!--<div class="PHONE_table_btn">
            <button id="tableBtn">Travaux -></button>
        </div>-->

    </div>

    <div class="taskPART">
        <h2>Travaux a remetre</h2>
        <div class="taskSECTION">
            <!--=============>      INSERT PHP HERE  (Tasks)   <============= -->
            <div class="task">
                <h2>Module 1</h2>
                <p>task 1: ......</p>
                <p>task 2: ......</p>
                <p>task 3: ......</p>
            </div>
            <div class="task">
                <h2>Module 2</h2>
                <p>task 1: ......</p>
                <p>task 2: ......</p>
            </div>
        </div>
        <!--<div class="PHONE_table_btn">
            <button id="tasksBtn"> <- Tableau</button>
        </div>-->
    </div>

    

</div>

<div class="switchBtn switchBtnRight">
    <button id="switchBtn">></button>
</div>

<script src="main.js" type="text/javascript"></script>
</body>
</html>