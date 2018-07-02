<?php
function import_Entry($servername,$username,$password,$titel,$text,$userId)
{
try{
 $conn = new PDO("mysql:host=$servername;dbname=pinwanddb",$username,$password);
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $sql="INSERT INTO `eintraege`(`e_titel`,`e_text`,`b_id`)
 VALUES (".$titel.",".$text.",".$userId.")";
$conn->exec($sql);
}
catch(PDOExceptio $e)
{
return "Connection failed:".$e->getMessage();
}
}
?>