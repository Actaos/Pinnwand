
<?php
function import_User($vorname,$nachname,$password,$username)
{
try{
 $conn = new PDO("mysql:host=localhost;dbname=pinnwanddb","root","");
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $sql="INSERT INTO `benutzer`(`b_Vorname`,`b_Nachname`,`b_password`,`b_benutzername`)
 VALUES ('".$vorname."','".$nachname."','".$password."','".$username."')";
$conn->exec($sql);
}
catch(PDOExceptio $e)
{
return "Connection failed:".$e->getMessage();
}
}
?>
