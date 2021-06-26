<?php
$matricile = $_POST['matricile'];
$date = $_POST['date'];
$time = $_POST['time'];
$location = $_POST['location'];
	// Database connection
	$conn = new mysqli('localhost','root','','new test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into cartracker(matricile,date,time,location) values(?,?,?,?)");
		$stmt->bind_param("ssss", $matricile,$date,$time,$location);
		$execval = $stmt->execute();
        
		echo $execval;
        echo "Registration successfully...";
        $stmt->close();
		$conn->close();
	}
?>