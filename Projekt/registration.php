<?php 

include_once "database.php";


//$connection->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registráció</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <h1>Regisztráció</h1>
    <form action="create_user.php" method="POST">
        <label for="felhasználónév">Felhasználónév:</label>
        <input type="text" name="felhasználónév" id="felhasználónév" size="50" required>
        <br>
        <label for="email">E-Mail cím:</label>
        <input type="email" name="email" id="email" size="50" required>
        <br>
        <label for="jelszó">Jelszó:</label>
        <input type="password" name="jelszó" id="jelszó" minlength="8" size="50" required>
        <br>
        <label for="jelszóújra">Jelszó megerősítése:</label>
        <input type="password" name="jelszóújra" id="jelszóújra" minlength="8" size="50" required>
        <br>
        <input type="submit" value="Regisztráció">
    </form>
</body>
</html>

