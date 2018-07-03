<?php
function get_User($username,$password)
{
    try {
        $conn = new PDO("mysql:host=localhost;dbname=pinwanddb",root);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql="SELECT `b_vorname`, `b_nachname`FROM`benutzer`WHERE b_password==".$password."AND b_username==".$username.";";
        $result=$conn->exec($sql);
       
        if ($result->num_rows > 0) {
                return (object)[
                    'b_vorname'=>$row["b_vorname"],
                    'b_nachname'=>$row["b_nachname"]
                ];
            
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
