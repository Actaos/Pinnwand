<?php
//Till Schmidt
//Methode zum Hinzufügen eines neuen Benutzers
function import_Entry($titel,$text,$userId)
{
try{
    
    //Erstellen und Configurieren einer Datenbank Verbuíndung
 $conn = new PDO("mysql:host=localhost;dbname=pinnwanddb","root","");
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    //Definieren und ausführen eines SQL Statements
 $sql="INSERT INTO `eintraege`(`e_titel`,`e_text`,`b_id`)
 VALUES ('".$titel."','".$text."',".$userId.")";
$conn->exec($sql);
}
    //Abfangen einer Möglichen PDO Exception
catch(PDOExceptio $e)
{
return "Connection failed:".$e->getMessage();
}
}
?>
