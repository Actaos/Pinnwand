<?php
function delete_Entry($servername,$id,$username,$password)
{
try{
 $conn = new PDO("mysql:host=$servername;dbname=pinwanddb",$username,$password);
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $sql="DELETE FROM `eintraege`WHERE `e_id==".$id."`";
$conn->exec($sql);
}
catch(PDOExceptio $e)
{
return "Connection failed:".$e->getMessage();
}
}
?>