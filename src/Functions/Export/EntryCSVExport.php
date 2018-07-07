<?php
 function csvExport_Entries()
 {
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=entries.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('id','Titel', 'Text', 'Autor','Autor'));  
       $conn = new PDO("mysql:host=localhost;dbname=pinnwanddb","root","");
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql = "SELECT `e_Titel`,`e_Text`, `b_Vorname`,`b_Nachname` FROM `eintraege`, benutzer WHERE eintraege.b_Id = benutzer.b_Id ;";  
      foreach($conn->query($sql) as $row)
       { 
           fputcsv($output, $row);  
       }  
       fclose($output);  
 }
?>

