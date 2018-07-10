<?php

session_start();
unset($_SESSION["isLogedIn"]);
session_destroy();

header("Location: ../../index.php");

?>