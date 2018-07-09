<?php
//Till Schmidt
//Methode zum Ausgeben der Einträgen in einer CSV Datei
 function csvExport_Entries()
 {
     //Erstellen einer CSV DAtei
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=entries.csv');
     
     //Öffnen und gestalten von Spalten Überschriften einer CSV Datei
      $output = fopen("php://output", "w");  
      fputcsv($output, array('id','Titel', 'Text', 'Autor','Autor'));  
     
     //Erstellen und Configurieren einer Datenbank Verbindung
       $conn = new PDO("mysql:host=localhost;dbname=pinnwanddb","root","");
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
     //Definieren und Ausführen eines SQL Befehls
       $sql = "SELECT `e_Titel`,`e_Text`, `b_Vorname`,`b_Nachname` FROM `eintraege`, benutzer WHERE eintraege.b_Id = benutzer.b_Id ;";  
     $result=$conn->query($sql)->fetchall(PDO::FETCH_ASSOC);
      foreach($result as $row)
       { 
          //Schreiben in die Geöffnete CSV DAtei
           fputcsv($output, $row);  
       }  
     
     //Schließen der CSV Datei
       fclose($output);  
 }
?>

