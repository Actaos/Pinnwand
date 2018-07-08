<?php
//Till Schmidt
//Methode zum Abfragen von Benutzern anhand des Benutzernamens und des Passwords
function get_User($username , $passwort)
{
    //Prüfen der Parameter
    if($username==null||$passwort==null)
    {
       return "parameter can not be null"; 
    }
    try {
        //Erstellen und Configurieren der Datenbank Verbindung
        $conn = new PDO("mysql:host=localhost;dbname=pinnwanddb","root","");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        //Definieren und Ausführen der SQL Abfrage
        $sql="SELECT `b_Vorname`, `b_Nachname`FROM `benutzer` WHERE(  `b_benutzername` = '".$username."' AND `b_password` = '".$passwort."' );";
        foreach($conn->query($sql) as $row)
        {
            //Füllen und Zurückgeben der Inhalte als Objekt
                    $object=(object)[
                        'Vorname'=>$row['b_Vorname'],
                        'Nachname'=>$row['b_Nachname'],
                    ];
            return $object;
          }
        }
    //Reagieren auf PDO Exception
    catch(PDOException $e)
        {
        return"Connection failed: " . $e->getMessage();
        }
}
?>
