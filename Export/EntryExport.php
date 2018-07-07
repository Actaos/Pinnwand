<?php
function get_Entries($skip,$top)
{
    if($skip==null|| $top==null)
    {
        return"parameter can not be null";
    }
    try {
        $conn = new PDO("mysql:host=localhost;dbname=pinnwanddb","root","");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql="SELECT `e_id`, `e_titel`, `e_text`, `b_vorame`,`b_nachname` FROM `eintraege`,`benutzer` WHERE `eintraege.b_id` = `benutzer.b_id`
        ORDER BY `e_id` 
        Limit ".$top." OFFSET ".$skip." ; ";

        $entryList=array();
         foreach($conn->query($sql) as $row)
         {
             $object=(object)[
                    'id'=>$row['e_id'],
                    'titel'=>$row['e_titel'],
                    'text'=>$row['e_text'],
                    'vorname'=>$row['b_Vorname'],
                    'nachname'=>$row['b_Nachname'],
                ];
                $entryList->array_push($object);
         }
            return $entryList;
        }
    catch(PDOException $e)
        {
        return"Connection failed: " . $e->getMessage();
        }
}
?>
