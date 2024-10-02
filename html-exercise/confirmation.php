<?php
session_start(); // Start session
?>

<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reģistrācijas apstiprinājums</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav>
        <ul>
            <li><a href="index.php">Sākums</a></li>
            <li><a href="blog.php">Dienasgrāmata</a></li>
        </ul>
    </nav>

    <h1>Reģistrācijas apstiprinājums</h1>

    <?php
    // Get data from the URL parameters
    if (isset($_GET['name']) && isset($_GET['email']) && isset($_GET['level'])) {
        $name = htmlspecialchars($_GET['name']); // Sanitize the input
        $email = htmlspecialchars($_GET['email']); // Sanitize the input
        $level = htmlspecialchars($_GET['level']); // Sanitize the input

        // Display confirmation message
        echo "<p>$name, jūs esat veiksmīgi reģistrējusies(-ies) webināram ar e-pastu $email.</p>";

        // Add user to the session for future reference
        $_SESSION['registered_users'][] = [
            "name" => $name,
            "email" => $email,
            "level" => $level
        ];
    } else {
        echo "<p>Nav saņemti reģistrācijas dati.</p>";
    }
    ?>

</body>
</html>
