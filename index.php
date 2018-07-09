<?php
    // auskommentieren wenn der Funktionsaufruf gestartet werden soll:
    // require "src/Functions/Export/EntryCSVExport.php";

    require "src/Functions/Export/EntryExport.php";

    $skip=0;
    $top=2;
    $result= array();
    $result=get_Entries($skip , $top);
    // var_dump($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="web/css/style.css">
    <title>Pinnwand</title>
</head>

<body>
    <ol>
        <li>
            <button href="#">Add Note</button>
        </li>
        <li>
            <button href="#">UAT</button>
        </li>
        <li>
            <button href="#">Export</button>
        </li>
        <li>
            <button href="login.php">Login</button>
        </li>
    </ol>
    <ul>
    
    <?php foreach ($result as $key=>$value): ?>
        <?php if (isset($value['titel'])) { ?>
        <li>
            <a href="#">
                <h2><?= $value['titel']; ?></h2>
                <p><?= $value['text']; ?></p>
            </a>
        </li>
        <?php }?>
    <?php endforeach;?>

    </ul>

    <footer>
        <a href="">All</a> | 
        <a href="">15</a> | 
        <a href="">25</a> | 
        <a href="">50</a> | 
    </footer>
</body>

</html>