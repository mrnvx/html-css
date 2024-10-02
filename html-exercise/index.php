<?php
session_start(); // Start session
?>

<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piesakies webināram!</title>
    <link rel="stylesheet" href="style.css">
    <script src="app.js"></script> 
</head>
<body>

    <nav>
        <ul>
            <li><a href="index.php">Sākums</a></li>
            <li><a href="blog.php">Dienasgrāmata</a></li>
        </ul>
    </nav>

    <h1>Piesakies webināram!</h1>
    <form id="registrationForm">
        <label for="name">Vārds:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">E-pasts:</label>
        <input type="email" id="email" name="email" required>

        <label for="level">Kursa līmenis:</label>
        <select id="level" name="level" required>
            <option value="Beginner">Beginner</option>
            <option value="Intermediate">Intermediate</option>
            <option value="Advanced">Advanced</option>
        </select>

        <fieldset>
            <legend>Vai vēlies saņemt info par citiem mūsu organizētajiem pasākumiem?</legend>
            <label>
                <input type="radio" name="info" value="yes" required> Jā
            </label>
            <label>
                <input type="radio" name="info" value="no" required> Nē
            </label>
        </fieldset>

        <button type="submit">Pieteikties</button>
    </form>

    <h2>Jau reģistrējušies:</h2>
    <ul>
        <?php
        // Display registered users from the session
        if (isset($_SESSION['registered_users'])) {
            foreach ($_SESSION['registered_users'] as $user) {
                echo "<ul>
                <li>Vārds: {$user['name']}</li>
                <li> E-pasts: {$user['email']}</li>
                <li> Līmenis: {$user['level']}</li>
                </ul>";
            }
        }
        ?>
    </ul>

</body>
</html>
