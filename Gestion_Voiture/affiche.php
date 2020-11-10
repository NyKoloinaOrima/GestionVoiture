<!-- INSERT DATA INTO THE DATABASE -->

<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "gestion_voiture";

// Create connection between the form and the database gestion_voiture
	$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

// Check if variable are set //Check if cells are not empty
// Variable definition

	if(isset($_POST['car']) && isset($_POST['color']) && isset($_POST['driver'])){
				$car=$_POST['car'];
				$color=$_POST['color'];
				$driver=$_POST['driver'];
			}

// SQL request to command the insertion of the data into the voiture table of the gestion_voiture

	$sql = "INSERT INTO voiture (car, color, driver)
			VALUES ('$car', '$color', '$driver')";

	if (mysqli_query($conn, $sql)) {
		echo "New record created successfully";
	}
	else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
		mysqli_close($conn);
?>

<!-- SHOW INSERTED DATA  -->
<!-- Create table to show all inserted data  -->
 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 	<link rel="stylesheet" type="text/css" href="css/style.css">
 	<title>Liste des voitures</title>
 </head>
 <body>
 	<div class="row">
	 	<div class="col-md-2"></div>
	 	<div class="col-md-8 cadre">


		<!-- DISPLAY TEMPLATE -->
	 		<div class="row">

			<!-- ADD Button begin -->
	 			<div class="col-md-3">
			 		<a href="index.php" class="btn btn-success">Ajouter</a>
			 		<form action="affiche.php" method="post"></form>
			 	</div>
			<!-- ADD Button end -->

				<div class="col-md-4"></div>


			<!-- SEARCH Button begin-->
				<div class="col-md-5">
					<nav class="navbar navbar-expand-md">
						<form class="form-inline" method="post" action="affiche.php">
							<input class="form-control mr-sm-2" name="search" type="text" placeholder="voiture, couleur, Chauffeur...">

							<!-- 	<?php 

								// Variable definition
									if(isset($_POST['car']) && isset($_POST['color']) && isset($_POST['driver']) && isset($_POST['search'])){
										$car=$_POST['car'];
										$color=$_POST['color'];
										$driver=$_POST['driver'];
										$search=$_POST['search'];
									}

								// Database connection
									$servername = "localhost";
									$username = "root";
									$password = "";
									$dbname = "gestion_voiture";

								// Create connection between the form and the database gestion_voiture
									$conn = new mysqli($servername, $username, $password, $dbname);

								// Check the connection
									if (!$conn) {
									    die("Connection failed: " . mysqli_connect_error());
									}

								// THE SELECTION REQUEST
									/*$sql = "SELECT * FROM voiture WHERE $search=$car OR $search=$color OR $search=$driver";*/
									
/*
									$sql = "SELECT * FROM voiture";
									$search=$car;
									switch ($search) {
										case '$car':
											echo fetch_assoc();
											break;
										
										default:
											# code...
											break;*/
								?> -->

							<button class="btn btn-success" type="submit">Search</button>
						</form>
					</nav>
				</div>
			</div>
			<!-- SEARCH Button end-->

			<!-- TABLE begin -->
	 		<table class="table table-dark table-striped table-hover">
	 			<tr>
	 				<th>Marque de la voiture</th>
	 				<th>Couleur de la voiture</th>
	 				<th>Chauffeur de la voiture</th>
	 				<th>Action</th>
	 			</tr>
	 		
			 	<?php 

				// Variable definition
					if(isset($_POST['car']) && isset($_POST['color']) && isset($_POST['driver'])){
								$car=$_POST['car'];
								$color=$_POST['color'];
								$driver=$_POST['driver'];
							}
				// Database connection
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "gestion_voiture";

				// Create connection between the form and the database gestion_voiture
					$conn = new mysqli($servername, $username, $password, $dbname);

				// Check the connection
					if (!$conn) {
					    die("Connection failed: " . mysqli_connect_error());
					}

				// THE SELECTION
					$sql = "SELECT * FROM voiture";
					$result = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result) > 0) {
				 		while ( $row = $result->fetch_assoc()) {
			 	 ?>
			 	 	<tr>
			 	 		<td><?php echo $row['car'] ?></td>
			 	 		<td><?php echo $row['color'] ?></td>
			 	 		<td><?php echo $row['driver'] ?></td>


<!-- Create a link to the delete & edit file using the id as a parameter -->
			 	 		<td> <a href="delete.php?id=<?php echo $row ["id"]?>"><button class="btn btn-danger">Effacer</button></a>
			 	 			<a href="edit.php?id=<?php echo $row ["id"]?>"> <button class=" btn btn-primary">Modifier</button></a></td>
			 	 	</tr>
			 	<?php 
			 		}
			 	 ?>
	 	 </table>
	 		<?php 
	 			}
	 		 ?>
	 	</div>

	 	<div class="col-md-2"></div>
 	</div>
 </body>
 </html>