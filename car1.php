<?php
$hostname="localhost";
        $username="root";
        $passowrd="";
        $dbname="new test";
        $con=mysqli_connect($hostname,$username,$passowrd,$dbname);
        $query="select *from car ";
        $result=mysqli_query($con,$query);
header('Content-Type:text/html; charset=utf-8');

$stu=array();
while( $row=mysqli_fetch_array($result))
{
    $stu[]=$row;
}
print "{car:".json_encode($stu,JSON_UNESCAPED_UNICODE)."}";

?>

    