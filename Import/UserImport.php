
<?php
function import_User($servername,$username,$password,$vorname,$nachname)
{
try{
 $conn = new PDO("mysql:host=$servername;dbname=pinwanddb",$username,$password);
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