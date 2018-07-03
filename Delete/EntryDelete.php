<?php
function delete_Entry($id,$username,$password,)
{
 if($id==null)
 {
  return "id can not be null"; 
 }
try{
 $conn = new PDO("mysql:host=localhost;dbname=pinwanddb",$username,$password);
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
