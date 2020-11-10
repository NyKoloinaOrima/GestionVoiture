<?php 

// Variable definition

	if(isset ($_POST ['id']) && isset($_POST['car']) && isset($_POST['color']) & isset($_POST['driver'])){
		$id=$_POST['id'];
		$car=$_POST['car'];
		$color=$_POST['color'];
		$driver=$_POST['driver'];
	}

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "gestion_voiture";


// Create connection between the form and the database

	$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
// The SQL request for the update command

	$sql = "UPDATE voiture SET car='$car', color='$color', driver='$driver' WHERE id=$id";

	if (mysqli_query($conn, $sql)===TRUE) {
    header('location:affiche.php');
    echo "Record upddate successfully successfully";
	} 
	
	else {
	    echo "Error updating record: " . mysqli_error($conn);
	}

	mysqli_close($conn);
 ?>