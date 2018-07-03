<?php
function delete_User($userId,$username,$password)
{
 if($userId==null)
 {
  return "user id can not be null";
 }
try{
 $conn = new PDO("mysql:host=localhost;dbname=pinwanddb",$username,$password);
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $sql="DELETE FROM `benutzer`WHERE `b_id==".$userId."`";
$conn->exec($sql);
}
catch(PDOExceptio $e)
{
return "Connection failed:".$e->getMessage();
}
}
?>
