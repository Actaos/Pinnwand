<?php

require "../../src/Functions/Export/UserExport.php";

$username = $_POST['inputUser'];

session_start();

$_SESSION['isLogedIn'] = 1;

function mySha256($str, $salt, $iterations)
{
    for ($x = 0; $x < $iterations; $x++) {
        $str = hash('sha512', $str . $salt);
    }
    return $str;
}

$str = $_POST['inputPassword'];
$salt = '9891cba92a02b9b7a9ae317feab675511657647f63c734b8d882c8624d51fcb7';

$passwort = mySha256($str, $salt, 10000);

$userExport = get_User($username, $passwort);
$name = $userExport;


//var_dump(mySha256($str, $salt, 10000));
//var_dump($_POST['inputPassword'], $_POST['inputUser']);

header('Location: ../../index.php');

?>