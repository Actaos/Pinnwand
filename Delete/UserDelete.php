<?php
function delete_User($userId)
{
 if($userId==null)
 {
  return "user id can not be null";
 }
try{
 $conn = new PDO("mysql:host=localhost;dbname=pinnwanddb","root","");
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $sql="DELETE FROM `benutzer`WHERE `b_Id`=".$userId.";";
$conn->exec($sql);
}
catch(PDOExceptio $e)
{
return "Connection failed:".$e->getMessage();
}
}
?>
