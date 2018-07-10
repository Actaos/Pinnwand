<?php

require "src/Functions/Export/UserExport.php";
$username = "Popeye";
$passwort = "DerBoss";
$userExport = get_User($username, $passwort);
$name = $userExport;

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pinnwand</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
          integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="./web/css/style.css">
</head>
<body>
<div class="list">
    <div class="top">
        <h1 class="header">UAT</h1>
    </div>

    <div class="fnc_btn">
        <a class="function" href="index.php"><i class="fas fa-undo"></i></a>
        <p>Zurück</p>
    </div>

    <ul class="items">
        <li>
            <strong><span class="item">B_ID:</span> "1" - </strong>
            <span class="item">Schmidt, Till, Till33, 5e884898da28047151
                        d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8</span>
        </li>
        <li>
            <strong><span class="item">B_ID:</span> "2" - </strong>
            <span class="item">Popp, Georg, Popeye, 58525ed95ece60d9b94a6bd4829f
                63a4ab4f1b4fb1acd6b8c435308734303a7de</span>
        </li>
    </ul>

    <form class="item-add" action="index.php"><!-- action="add.php" -->
        <input class="input" type="text" placeholder="Benutzername" autocomplete="off"
               required>
        <input class="input" type="text" placeholder="Vorname" autocomplete="off"
               required>
        <input class="input" type="text" placeholder="Nachname" autocomplete="off"
               required>
        <input class="input" type="password" placeholder="Passwort" autocomplete="off"
               required>
        <input type="submit" value="Add" class="submit" name="onSubmit">
    </form>
</div>
</body>
</html>
