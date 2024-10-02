<?php 

session_start(); // Session indítása

if (!isset($_SESSION['username'])) {
    // Ha nincs bejelentkezve, visszairányítjuk a bejelentkező oldalra
    header("Location: login.php");
    exit();
}

echo "Üdv, " . $_SESSION['username'] . "! Ez a profiloldalad.";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['kijelentkezés'])) {
    session_destroy();
    header("Location: login.php");
    exit();
}




?>

<!DOCTYPE html>
<html>
<head>
    <title>Felhasználói profil</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Felhasználói profil</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html#home">Főoldal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Kategóriák</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Videók</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Képek</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Kedvenc cikkek</a>
        </li>
      </ul>
        <form class="d-flex" method="POST">
            <button class="btn btn-outline-success" type="submit" value="Kijelentkezés", name="kijelentkezés">Kijelentkezés</button>
        </form>
      <span class="navbar-text">
        Híroldal neve
      </span>
    </div>
  </div>
</nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>