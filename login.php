<?php
$username = $_POST["username"]; 
       $password = $_POST["password"];
//$username="drid";
//$password="12345";
$hostname="localhost";
        $user="root";
        $pass="";
        $dbname="new test";
        $con=mysqli_connect($hostname,$user,$pass,$dbname);

 $select1 = "SELECT password FROM admin WHERE username = '".$username."'";

        $result1=mysqli_query($con,$select1);
            //$conn->query($select1);
        $row1=$result1->fetch_assoc();

        $select2 = "SELECT username FROM admin WHERE password = '".$password."'";

        $result2=mysqli_query($con,$select2);
            //$conn->query($select2);
        $row2=$result2->fetch_assoc();
if($username == $row2["username"] && $password == $row1["password"]) 
        { 
            // $_SESSION["logged_in"] = true; 
           // $_SESSION["naam"] = $name; 
             $return_data["status"] = 1;
    

        }
        else
        {
        
            $return_data["status"] = 0;
        }

    $return[]=$return_data["status"];

//echo json_encode($return_data);
print "{admin:".json_encode($return,JSON_UNESCAPED_UNICODE)."}";
?>