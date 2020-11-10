<?php
$id= $_GET['id'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gestion_voiture";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "SELECT * FROM voiture WHERE id=$id";
$result= $conn-> query ($sql);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Car Management</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<h2>FICHE DE SUIVI DES VOITURES</h2>
		<form action="update.php" method="post">
			<div>
				<input type="integer" name="id" value="<?php echo $row["id"]?>" hidden>
			</div>
			<div>
				<label> <h5>Marque de la voiture</h5></label>
				<input type="text" name="car" class="form-control" value="<?php echo $row["car"]?>">
			</div>
			<div>
				<label><h5>Couleur de la voiture</h5></label>
				<input type="text" name="color" class="form-control" value="<?php echo $row["color"]?>">
			<div>
				<label><h5>Chauffeur de la voiture</h5></label>
				<input type="text" name="driver" class="form-control" value="<?php echo $row["driver"]?>">	
			</div>
			<div class="Inst">
				<input type="submit" name="submit" value="Mettre a jour" class="form-control btn btn-primary">
			</div>
		</form>
	</div>
</div>
</body>
</html>