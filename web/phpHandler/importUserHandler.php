<?php

require "../../src/Functions/Import/UserImport.php";

$vorname = "Timo";
$nachname = "Werner";
$password = "12345";
$username = "BesterKicker";
import_User($vorname, $nachname, $password, $username);

?>