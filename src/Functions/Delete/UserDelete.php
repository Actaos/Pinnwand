<?php
//Till Schmidt
//Methode zum löschen eines Benutzers anhand seiner Id
function delete_User($userId)
{
    //Prüfen auf gültige Parameter
 if($userId==null)
 {
  return "user id can not be null";
 }
try{
    //Erstellen und Configurieren einer Datenbank verbindung
 $conn = new PDO("mysql:host=localhost;dbname=pinnwanddb","root","");
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //Erstellen und Ausführen eines SQL Befehls
 $sql="DELETE FROM `benutzer`WHERE `b_Id`=".$userId.";";
$conn->exec($sql);
   }
    //Abfangen und ausgeben von möglichen PDOExceptions
catch(PDOException $e)
{
return "Connection failed:".$e->getMessage();
}
}
?>
