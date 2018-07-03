<?php
 function csvExport_Entries()
 {
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=entries.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('id','Titel', 'Text', 'Autor','Autor'));  
       $conn = new PDO("mysql:host=localhost;dbname=pinwanddb",root);
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql = "SELECT e_id,e_titel,e_text,b_vorname,b_nachname from eintraege,benutzer WHERE benuter.b_id==eintraege.b_id";  
       $result=$conn->exec($sql);
       if ($result->num_rows > 0) {
       while($row = mysqli_fetch_assoc($result))  
       {  
           fputcsv($output, $row);  
       }  
       fclose($output);  
 }
?>
