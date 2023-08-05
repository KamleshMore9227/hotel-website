<?php
	$name = $_POST['name'];
	$number = $_POST['number'];
	$pplnumber = $_POST['pplnumber'];


	// Database connection
	$conn = new mysqli('localhost','root','','db');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into db(name, number, pplnumber) values(?, ?, ?)");
		$stmt->bind_param("sii", $name, $number, $pplnumber);
		$execval = $stmt->execute();
		echo $execval;
		// echo "Reservation Successful";
		echo "Reservation Successful";
		$stmt->close();
		$conn->close();
	}
?>