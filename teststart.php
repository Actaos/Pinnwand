<?php


//User Export Test

require "Export/UserExport.php";
$username="Popeye";
$passwort="DerBoss";
$userExport=get_User($username , $passwort);
$name=$userExport;
echo "<script>console.log('".$name."');</script>";

//Entry Delete Test

//require "Delete/EntryDelete.php";
//$id=2;
//$entryDeleteResult=delete_Entry($id);


//User Delete Test

//require "Delete/UserDelete.php";
//$userId=1;
//$userDeleteResult=delete_User($userId);
?>
