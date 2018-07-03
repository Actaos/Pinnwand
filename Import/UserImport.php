
<?php
function import_User($vorname,$nachname)
{
try{
 $conn = new PDO("mysql:host=localhost;dbname=pinwanddb",root);
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $sql="INSERT INTO `benutzer`(`b_vorname`,`b_nachname`,`b_password`,`b_username`)
 VALUES (".$vorname.",".$nachname.",".$password.",".$username.")";
$conn->exec($sql);
}
catch(PDOExceptio $e)
{
return "Connection failed:".$e->getMessage();
}
}
?>
