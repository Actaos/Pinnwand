<?php
function csvExport_Entries($servername,$username,$password)
{
header('Content-Type: text/csv; charset=utf-8');  
header('Content-Disposition: attachment; filename=entries.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('id','Titel', 'Text', 'Autor','Autor'));  
      $sql = "SELECT e_id,e_titel,e_text,b_vorname,b_nachname from eintraege,benutzer WHERE benuter.b_id==eintraege.b_id";  
      $result = mysqli_query($con, $sql);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
}
?>
