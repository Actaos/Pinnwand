<?php
function import_Entry($titel,$text,$userId)
{
try{
 $conn = new PDO("mysql:host=localhost;dbname=pinnwanddb","root","");
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $sql="INSERT INTO `eintraege`(`e_titel`,`e_text`,`b_id`)
 VALUES ('".$titel."','".$text."',".$userId.")";
$conn->exec($sql);
}
catch(PDOExceptio $e)
{
return "Connection failed:".$e->getMessage();
}
}
?>
