<?php 

ob_start();

include_once "database.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["felhasználónév"];
    $password = $_POST["jelszó"];

    $encrypted = hash("sha256", $password);

    $query = "SELECT * FROM users WHERE username = ? AND passwd = ?";
    $prepared = $connection->prepare($query);
    $prepared->bind_param("ss", $username, $encrypted);

    $prepared->execute();
    $result = $prepared->get_result();

    if ($result->num_rows == 1) {
        session_start();
        $_SESSION['username'] = $username;

        // Átirányítás, de előtte semmi kimenet nem lehet
        error_log("Sikeres bejelentkezés: $username, Átirányítás előtt");
        header("Location: user_profile.php");
        error_log("Sikeres bejelentkezés: $username, Átirányítás után");
        exit(); // Fontos, hogy leállítsa a további kód futását
    } else {
        echo "Sikertelen bejelentkezés!";
    }
}

ob_end_flush();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Bejelentkezés</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <h1>Bejelentkezés</h1>
    <form action="" method="POST">
        <label for="felhasználónév">Felhasználónév:</label>
        <input type="text" name="felhasználónév" id="felhasználónév" size="50" required>
        <br>
        <label for="jelszó">Jelszó:</label>
        <input type="password" name="jelszó" id="jelszó" minlength="8" size="50" required>
        <br>
        <input type="submit" value="Bejelentkezés">
    </form>
</body>
</html>