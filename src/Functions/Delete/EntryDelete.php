<?php
//Till Schmidt
//Methode zum Löschen eines Eintrags anhand seiner Id
function delete_Entry($id)
{
    //Prüfung ob der Eingegebene Parameter nicht Null ist
 if($id==null)
 {
  return "id can not be null"; 
 }
try{
    
    //Erstellen und Configurieren der Datenbank Verbindung
 $conn = new PDO("mysql:host=localhost;dbname=pinnwanddb","root","");
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    //Definieren und Ausführen der SQL Abfrage
 $sql="DELETE FROM `eintraege` WHERE `e_ID`=".$id.";";
$conn->exec($sql);
}
    //Abfangen und ausgeben von möglichen PDOExceptions
catch(PDOException $e)
{
return "Connection failed:".$e->getMessage();
}
}
?>
