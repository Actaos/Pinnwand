<?php
function get_User($username , $passwort)
{
    if($username==null||$passwort==null)
    {
       return "parameter can not be null"; 
    }
    try {
        $db = new PDO("mysql:host=localhost;dbname=pinnwanddb","root","");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query="SELECT `b_Vorname`, `b_Nachname`FROM `benutzer` WHERE(  `b_benutzername` = '".$username."' AND `b_password` = '".$passwort."' );";
        $sth=$db->query($query);
       while($row=$sth->fetch(PDO::FETCH_ASSOC));
        {
                    $object=(object)[
                        'b_Vorname'=>$row->b_Vorname,
                        'b_Nachname'=>$row->b_Nachname,
                    ];
            return $row->b_Vorname;
        }
        }
    catch(PDOException $e)
        {
//reagieren auf error message
        return"Connection failed: " . $e->getMessage();
        }
}
?>
