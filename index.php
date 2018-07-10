<?php
//Georg Popp
//Erstellen des HTML-Documents und umsetzung der gegebenen Methoden

require "src/Functions/Import/EntryImport.php";
require "src/Functions/Export/EntryExport.php";

session_start();

$skip = 0;
$top = 100;
$result = array();
$result = get_Entries($skip, $top);
// var_dump($result);

$id = 2;

if (isset($_POST['submit'])) {
    $titel = $_POST['titel'];
    $text = $_POST['text'];

    import_Entry($titel, $text, $id);
}

if (isset($_POST['Export'])) {
    csvExport_Entries();
}

if (isset($_GET['text'])) {
    $titel = $_GET['titel'];
    $text = $_GET['text'];

    import_Entry($titel, $text, 1);

    header('Location: index.php');
}

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
        <h1 class="header">Pinnwand</h1>
    </div>

    <div class="fnc_btn">
        <?php if (isset($_SESSION['isLogedIn'])): ?>
            <a class="function" href="./web/phpHandler/csvExportHandler.php"><i class="fas fa-file-export"></i></a>
        <?php endif; ?>
        <?php if (!isset($_SESSION['isLogedIn'])): ?>
        <a class="function" href="login.php"><i class="fas fa-sign-in-alt"></i></a>
        <?php endif; ?>
        <?php if (isset($_SESSION['isLogedIn'])): ?>
            <a class="function" href="uat.php"><i class="fas fa-users"></i></a>
        <?php endif; ?>

        <?php if (isset($_SESSION['isLogedIn'])): ?>
            <a class="function" href="./web/phpHandler/logoutHandler.php"><i class="fas fa-times"></i></a>
        <?php endif; ?>
    </div>

    <ul class="items">
        <?php foreach ($result as $item => $value): ?>
            <?php if (isset($value['titel'])) { ?>
                <li>
                    <strong><span class="item"><?= $value['titel']; ?></span> - </strong>
                    <span class="item"><?= $value['text']; ?></span><!--     -    (ID:<?= $value['id']; ?>) -->
                    <?php if (isset($_SESSION['isLogedIn'])): ?>
                        <a href="web/phpHandler/deleteHandler.php?id=<?= $value['id']; ?>" type="submit" name="delete"
                           class="done-button">Löschen!</a>
                    <?php endif; ?>
                </li>
            <?php } ?>
        <?php endforeach; ?>
    </ul>

    <form class="item-add" method="get"><!-- action="add.php" -->
        <input class="input" type="text" name="titel" placeholder="Titel des Eintrags eingeben" autocomplete="off"
               required>
        <input class="input" type="text" name="text" placeholder="Text des Eintrags eingeben" autocomplete="off"
               required>
        <input type="submit" value="Add" class="submit" name="onSubmit">
    </form>
</div>
</body>
</html>