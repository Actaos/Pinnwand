<?php
function delete_Entry($id)
{
 if($id==null)
 {
  return "id can not be null"; 
 }
try{
 $conn = new PDO("mysql:host=localhost;dbname=pinwanddb",root);
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
