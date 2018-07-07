<?php
function get_User($username , $passwort)
{
    if($username==null||$passwort==null)
    {
       return "parameter can not be null"; 
    }
    try {
        $conn = new PDO("mysql:host=localhost;dbname=pinnwanddb","root","");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql="SELECT `b_Vorname`, `b_Nachname`FROM `benutzer` WHERE(  `b_benutzername` = '".$username."' AND `b_password` = '".$passwort."' );";
        foreach($conn->query($sql) as $row)
        {
                    $object=(object)[
                        'Vorname'=>$row['b_Vorname'],
                        'Nachname'=>$row['b_Nachname'],
                    ];
            return $object;
        }
        }
    catch(PDOException $e)
        {
//reagieren auf error message
        return"Connection failed: " . $e->getMessage();
        }
}
?>
