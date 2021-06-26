<?php
include ("conf1.php");
header('Content-Type:text/html; charset=utf-8');

$stu=array();
while( $row=mysqli_fetch_array($result))
{
    $stu[]=$row;
}
print "{cartracker:".json_encode($stu,JSON_UNESCAPED_UNICODE)."}";

?>
    