<?php
function get_Entries($skip,$top)
{
    if( $top==null)
    {
        return"top can not be null";
    }
    try {
        $conn = new PDO("mysql:host=localhost;dbname=pinnwanddb","root","");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql="SELECT `e_ID`, `e_Titel`, `e_Text`, `b_Vorname`,`b_Nachname` FROM `eintraege`,`benutzer` WHERE eintraege.b_Id = benutzer.b_Id
        ORDER BY e_ID
        Limit ".$top." OFFSET ".$skip." ; ";
        
        $entryList[]=array();
        $counter=0;
         foreach($conn->query($sql) as $row)
         {
             array_push($entryList,$counter=array(
                   'id'=>$row['e_ID'],
                   'titel'=>$row['e_Titel'],
                    'text'=>$row['e_Text'],
                    'vorname'=>$row['b_Vorname'],
                    'nachname'=>$row['b_Nachname'],
                ));
         }
            return $entryList;
        }
    catch(PDOException $e)
        {
        return"Connection failed: " . $e->getMessage();
        }
}
?>
