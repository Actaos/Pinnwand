<?php
function delete_User($servername,$userId,$username,$password)
{
try{
 $conn = new PDO("mysql:host=$servername;dbname=pinwanddb",$username,$password);
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
