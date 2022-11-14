<?php include('post.php'); ?>
<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="UTF-8">
        <title>Rejestracja</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form action="index.php" method="POST">
            <label for="fname">Podaj imię: </label><br>
            <input type="text" id="fname" name="fname" placeholder="Imie"><br>

            <label for="lname">Podaj nazwisko: </label><br>
            <input type="text" id="lname" name="lname" placeholder="Nazwisko"><br>

            <label for="age">Podaj wiek: </label><br>
            <input type="number" id="age" name="age" min="1" placeholder="Wiek"><br>

            <label for="email">Podaj E-Mail: </label><br>
            <input type="email" id="email" name="email" placeholder="E-Mail"><br>

            <label for="location">Podaj swoją lokalizację: </label><br>
            <input type="text" id="location" name="location" placeholder="Lokalizacja">

            <input type="submit" name="signUp" value="Zarejestruj">
    </body>
</html>
