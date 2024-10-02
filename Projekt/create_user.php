<?php 

include_once "database.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["felhasználónév"];
    $email = $_POST["email"];
    $password = $_POST["jelszó"];
    $password_again = $_POST["jelszóújra"];
    
    if($password != $password_again) {
        echo "A két jelszó nem egyezik meg!";
    }

    $role_id = 1;
    $encrypted = hash("sha256", $password);

    $query = "INSERT INTO users (username, email, passwd, role_id) VALUES (?, ?, ?, ?)";
    $prepared = $connection->prepare($query);
    $prepared->bind_param("sssi", $username, $email, $encrypted, $role_id);

    if($prepared->execute()) {
        // Sikeres beszúrás után megszerezzük a beszúrt user_id-t
        $user_id = $connection->insert_id;

        // Felhasználó-szerep kapcsolat beszúrása a user_role táblába
        $query2 = "INSERT INTO user_role (user_id, role_id) VALUES (?, ?)";
        $prepared2 = $connection->prepare($query2);
        $prepared2->bind_param("ii", $user_id, $role_id);

        if($prepared2->execute()) {
            echo "Sikeresen regisztráltál, $username!";
        } else {
            echo "Nem sikerült az olvasói szerep beállítása!";
        }
    } else {
        echo "Nem sikerült a regisztráció!";
    }
}

?>