<?php
// habs noch nicht auspropiert kam noch nicht dazu Test daten zu erstellen^^
//@Georg:   skip ist wert ab dem eintraege genommen werden Top ist anzahl werte die genommen werden sollen
function get_Entries($servername,$username,$password,$skip,$top)
{
    try {
        $conn = new PDO("mysql:host=$servername;dbname=pinwanddb", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql="SELECT `e_id`, `e_titel`, `e_text`, `b_vorame`,`b_nachname` FROM `eintraege`,`benutzer` WHERE eintraege.b_id==benutzer.b_id
        ORDER BY `e_id` 
        Limit $top OFFSET $skip ; ";

        $result=$conn->exec($sql);
       
        if ($result->num_rows > 0) {
             $entryList=array();

            while($row = $result->fetch_assoc()) {
                $object=(object)[
                    'e_id'=>$row["e_id"],
                    'e_titel'=>$row["e_titel"],
                    'e_text'=>$row["e_text"],
                    'b_vorname'=>$row["b_vorname"],
                    'b_nachname'=>$row["b_nachname"]
                ];
                $entryList->append($object);
            }
//reagieren auf object List/array als return
            return $entryList;
            
          } else {
//reagieren auf string
            return "0 results";
         }
        }
    catch(PDOException $e)
        {
//reagieren auf error message
        return"Connection failed: " . $e->getMessage();
        }
}
?>