<?php
session_start();
if (isset($_SESSION['username'])) {
    echo '<div style="background-color: rgba(255, 0, 0, 0.5); padding: 20px; color: white; text-align: center; font-size: 24px;">Már be vagy jelentkezve!<br><br><a href="../fooldal/index.php" style="background-color: #007bff; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none;">Vissza a főoldalra</a></div>';
    exit();
}
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="icon.jpg">
    <title>Bejelentkezés</title>
</head>
<body>
<style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 300px;
            margin: 40px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            margin-top: 0;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0069d9;
        }
        .my-button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
        }
        .my-button:hover {
            background-color: #0069d9;
        }
    </style>
    <div class="container">
        <h1>Bejelentkezés</h1>
        <form action="bejelentkezesell.php" method="POST">
            <label for="username">Felhasználónév:</label>
            <input type="text" id="username" name="username">
            <label for="password">Jelszó:</label>
            <input type="password" id="password" name="password">
            <input type="submit" value="Bejelentkezés">
        </form>
        <br>
        <a href="../index.php" class="my-button">Vissza a főoldalra</a>
    </div>
</body>
</html>
