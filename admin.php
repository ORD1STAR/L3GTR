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
            <li><a href="liens.php">Liens utile</a></li>
            <li><a href="admin.php">I'm an admin</a></li>
        </ul>
    </div>

</nav>

    <div class="login">
        <form action="trait.php">

            <label for="login">Login</label>
            <input type="text" name="login" id="login" required>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>

            <input type="submit" value="Login">

        </form>
    </div>

</body>
</html>