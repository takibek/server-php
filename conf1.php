<?php
$hostname="localhost";
        $username="root";
        $passowrd="";
        $dbname="new test";
        $con=mysqli_connect($hostname,$username,$passowrd,$dbname);
        $query="SELECT * FROM `cartracker` ORDER BY id DESC LIMIT 1; ";
        $result=mysqli_query($con,$query);
        
        
        
?>