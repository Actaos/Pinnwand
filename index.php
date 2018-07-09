<?php
    // auskommentieren wenn der Funktionsaufruf gestartet werden soll:
    // require "src/Functions/Export/EntryCSVExport.php";

    require "src/Functions/Export/EntryExport.php";
    require "src/Functions/Import/EntryImport.php";

    

    $skip=0;
    $top=2;
    $result= array();
    $result=get_Entries($skip , $top);
    // var_dump($result);

    $id = sizeof($result) + 1;

    function increaseID ($id) {
        return $id + 1;
    }
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
            <button href="#" id="myBtn">Add Note</button>
        </li>
        <li>
            <button href="#">UAT</button>
        </li>
        <li>
            <button href="#">Export</button>
        </li>
        <li>
            <button href="./login.php">Login</button>
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

    <div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close">&times;</span>
            <h2>Modal Header</h2>
        </div>
        <form method="post" action="./src/Functions/Import/UserImport.php">
            <div class="modal-body">
                <p>Titel: </p><input type="text" name="titel" id="_titel">
                <p>Text: </p><input type="text" name="text" id="_text">
            </div>
            <div class="modal-footer">
                <button type="submit" value="click" name="submit">Add Note</button>
            </div>
        </form>
        <?php
            if(isset($_POST['submit'])) {
                increaseID();
                import_Entry($_POST['titel'],$_POST['text'],$id);
            } 
        ?>

    </div>

    <script>
        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }   

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>

</div>

    <footer>
        <a href="">All</a> | 
        <a href="">15</a> | 
        <a href="">25</a> | 
        <a href="">50</a> | 
    </footer>
</body>

</html>