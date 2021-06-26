<?php
//$matricile='1990';
  $matricile = $_POST['matricile'];
//  $matricile=intval($_POST['matricile']);
$hostname="localhost";
        $username="root";
        $passowrd="";
        $dbname="new test";
	// Database connection
	 $con=mysqli_connect($hostname,$username,$passowrd,$dbname);
        $query="SELECT client.id,client.first_name,client.last_name,client.age,client.phone_number FROM`client`,car,cartracker WHERE cartracker.matricile=".$matricile." && car.chassis_number=cartracker.matricile && client.id=car.id ORDER BY client.id ";
        $result=mysqli_query($con,$query);
header('Content-Type:text/html; charset=utf-8');

$stu=array();
while( $row=mysqli_fetch_array($result))
{
    $stu[]=$row;
}
print "{client:".json_encode($stu,JSON_UNESCAPED_UNICODE)."}";
?>
