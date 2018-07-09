<?php
    // auskommentieren wenn der Funktionsaufruf gestartet werden soll:
    include "src/Functions/Export/EntryCSVExport.php";

    include "src/Functions/Export/EntryExport.php";
    include "src/Functions/Import/EntryImport.php";


    $skip=0;
    $top=2;
    $result= array();
    $result=get_Entries($skip , $top);
    // var_dump($result);

    $id = 2;

    if(isset($_POST['submit'])) {
        $titel = $_POST['titel'];
        $text = $_POST['text'];

        import_Entry($titel, $text, $id);

        // increaseID();
        // import_Entry($_POST['titel'],$_POST['text'],$id);
    }

    if (isset($_POST['Export']))
    {
        csvExport_Entries();
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

    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="./web/css/style.css">
</head>
<body>
<div class="list">
    <h1 class="header">Pinnwand</h1>

    <div>
        <button>+</button>
        <button>+</button>
        <button>+</button>
        <button>+</button>
    </div>

    <?php if (!empty($result)): ?>
    <ul class="items">
        <?php foreach ($result as $item): ?>
        <li>
            <span class="item"><?php $item[1]['text']; ?></span>
            <a href="#" class="done-button">Löschen!</a>
        </li>
        <?php endforeach; ?>
        <li>
            <span class="item">Learn PHP</span>
        </li>
    </ul>
<?php else: ?>
    <p>Du hast noch keine Einträge hinzugefügt!</p>
    <?php endif; ?>

    <form class="item-add" action="add.php" method="post">
        <input class="input" type="text" name="name" id="" placeholder="Neuer Eintrag ..." autocomplete="off"
               required>
        <input type="submit" value="Add" class="submit">
    </form>
</div>
</body>
</html>