
<?php
//Till Schmidt
//Methode zum Hinzufügen von Kommentaren
function import_User($vorname,$nachname,$password,$username)
{
try{
//Methode zum erstellen und Configurieren der Datenbank Verbindung 
 $conn = new PDO("mysql:host=localhost;dbname=pinnwanddb","root","");
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //erstellen und Ausführen des SQL Statements
 $sql="INSERT INTO `benutzer`(`b_Vorname`,`b_Nachname`,`b_password`,`b_benutzername`)
 VALUES ('".$vorname."','".$nachname."','".$password."','".$username."')";
$conn->exec($sql);
}
    //Abfangen von Möglicher PDO Exception
catch(PDOExceptio $e)
{
return "Connection failed:".$e->getMessage();
}
}
?>
