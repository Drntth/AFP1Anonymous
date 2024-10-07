<!DOCTYPE html>
<html>
<head>
    <title>Felhasználói adatok módosítása</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<header>
        <nav>
            <ul class="balnav">
                <li><img src="logo.jpg" alt="A kép leírása"></li>
                <li><a href="#home">Híroldal neve</a></li>
            </ul>
            <ul class="kategoria">
                <li><a href="#">Felhasználói adatok módosítása</a></li>
                <li><a href="index.html">Főoldal</a></li>
            </ul>
            <ul class="jobbnav">
                <form method="POST">
                  <input type="submit" name="kijelentkezés" value="Kijelentkezés">
                </form>
            </ul>
        </nav>               
    </header>
    <div class="news-article" width="600px" height="500px">
    <h1>Felhasználói adatok módosítása</h1>
    <form action="" method="POST">
        <label for="felhasználónév">Új felhasználónév:</label>
        <input type="text" name="felhasználónév" id="felhasználónév" size="50">
        <br>
        <label for="email">Új E-Mail cím:</label>
        <input type="email" name="email" id="email" size="50">
        <br>
        <label for="jelszó">Új jelszó:</label>
        <input type="password" name="jelszó" id="jelszó" minlength="8" size="50">
        <br>
        <label for="jelszóújra">Új jelszó megerősítése:</label>
        <input type="password" name="jelszóújra" id="jelszóújra" minlength="8" size="50">
        <br>
        <input type="submit" value="Módosítás">
        <br>
        <label for="lekérdezés">Felhasználói adatok megjelenítése:</label>
        <br>
        <input type="submit" name="lekérdezés" value="Adatok megjelenítése">
        <br>
        <br>
        <label for="törlés">Profil törlése:</label>
        <br>
        <input style="border: 1px solid red; color: red;" type="submit" name="törlés" value="Profil törlése">
    </form>
    </div>
</body>
</html>

<?php
include_once "database.php";

session_start(); // Session indítása

if (isset($_SESSION['id'])) {
    $user_id = $_SESSION['id'];
    $query = "SELECT * FROM users WHERE id = ?";
    $prepared = $connection->prepare($query);
    $prepared->bind_param("i", $user_id);
    $prepared->execute();
    $result = $prepared->get_result();
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $row['username']; // username beállítása sessionben
    } else {
        echo "<p style='color: red;> Nincs ilyen felhasználó!</p>";
    }
} else {
    header("Location: login.php");
    exit();
}

$_SESSION['id'] = $row['id']; // Az id oszlop elérése

echo "<p style='font-weight: bold; color: yellow;'>Üdv, " . $_SESSION['username'] . "! Ez a profiloldalad.</p>";

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['felhasználónév']) && !empty($_POST['felhasználónév'])) {
    $new_username = $_POST["felhasználónév"];
    $user_id = $_SESSION['id'];
    $username_query = 'UPDATE users SET username = ? WHERE id = ?';
    $prepared = $connection->prepare($username_query);
    $prepared->bind_param("si", $new_username, $_SESSION['id']);

    if($prepared->execute()) {
        echo "<p style='color: green;'>Felhasználónév sikeresen módosítva! Az új felhasználónév: $new_username</p>";
    } else {
        echo "<p style='color: red;'>Nem sikerült a felhasználónév módosítása!</p>";
    }
    $_SESSION['username'] = $new_username;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email']) && !empty($_POST['email'])) {
    $new_email = $_POST['email'];

    // E-mail cím validálása
    if (!filter_var($new_email, FILTER_VALIDATE_EMAIL)) {
        echo "Hibás E-Mail cím!";
    } else {
        $email_query = 'UPDATE users SET email = ? WHERE id = ?';
        $prepared = $connection->prepare($email_query);
        $prepared->bind_param("ss", $new_email, $_SESSION['id']);

        if ($prepared->execute()) {
            echo "<p style='color: green;'>E-Mail cím sikeresen módosítva! Az új E-Mail cím: $new_email</p>";
        } else {
            echo "<p style='color: red;'>Nem sikerült az e-mail cím módosítása!</p>";
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['jelszó']) && !empty($_POST['jelszó']) && isset($_POST['jelszóújra']) && !empty($_POST['jelszóújra'])) {
    $new_password = $_POST['jelszó'];
    $new_password_again = $_POST['jelszóújra'];

    if ($new_password != $new_password_again) {
        echo "A két jelszó nem egyezik meg!";
    } else {
        $encrypted = hash("sha256", $new_password);

        $password_query = 'UPDATE users SET passwd = ? WHERE id = ?';
        $prepared = $connection->prepare($password_query);
        $prepared->bind_param("ss", $encrypted, $_SESSION['id']);

        if ($prepared->execute()) {
            echo "<p style='color: green;'>Jelszó sikeresen módosítva!</p>";
        } else {
            echo "<p style='color: red;'>Nem sikerült a jelszó módosítása!</p>";
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['törlés'])) {
    $delete_query = 'DELETE FROM users WHERE id = ?';
    $prepared = $connection->prepare($delete_query);
    $prepared->bind_param("s", $_SESSION['id']);

    if ($prepared->execute()) {
        echo "<p style='color: green;'>Profil sikeresen törölve!</p>";
        session_destroy();
        header("Location: login.php");
        exit();
    } else {
        echo "<p style='color: red;'>Nem sikerült a profil törlése!</p>";
    }
}

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['lekérdezés'])) {
    $query = "SELECT * FROM users WHERE id = ?";
    $prepared = $connection->prepare($query);
    $prepared->bind_param("i", $_SESSION['id']);
    $prepared->execute();
    $result = $prepared->get_result();
    $row = $result->fetch_assoc();

    echo "<p style='font-weight: bold; color: yellow;'>Felhasználónév: " . $row['username'] . "</p>";
    echo "<p style='font-weight: bold; color: yellow;'>E-Mail cím: " . $row['email'] . "</p>";
    echo "<p style='font-weight: bold; color: yellow;'>Jelszó: " . $row['passwd'] . "</p>";

    $query2 = "SELECT users.role_id FROM users 
            INNER JOIN user_role ON users.id = user_role.user_id 
            WHERE users.id = ?";

    $query3 = "SELECT role.role_name FROM role 
            INNER JOIN user_role ON role.id = user_role.role_id 
            WHERE user_role.user_id = ?";

    $prepared2 = $connection->prepare($query2);
    $prepared2->bind_param("i", $_SESSION['id']);
    $prepared2->execute();
    $result2 = $prepared2->get_result();
    $row2 = $result2->fetch_assoc();

    $prepared3 = $connection->prepare($query3);
    $prepared3->bind_param("i", $_SESSION['id']);
    $prepared3->execute();
    $result3 = $prepared3->get_result();
    $row3 = $result3->fetch_assoc();

    echo "<p style='font-weight: bold; color: yellow;'>Szerep ID: " . $row2['role_id'] . "</p>";
    echo "<p style='font-weight: bold; color: yellow;'>Szerep: " . $row3['role_name'] . "</p>";



}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['kijelentkezés'])) {
    session_destroy();
    header("Location: login.php");
    exit();
}
    
?>