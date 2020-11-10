<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gestion_voiture";


// Create connection between the form and the database
$conn = new mysqli($servername, $username, $password, $dbname);


// Check the connection
//Maninona moa no die no nampiasaina teto fa tsy echo ?
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Check if variable are set. Check if cells are not empty

if(isset($_POST['car']) && isset($_POST['color']) & isset($_POST['driver'])){
			$car=$_POST['car'];
			$color=$_POST['color'];
			$driver=$_POST['driver'];
		}


$sql = "SELECT voiture SET car='$car', color='$color', driver='$driver' WHERE id=$id, or car=$car or color=$color or driver=$driver" ;

		if (mysqli_query($conn, $sql)===TRUE) {
			
	    echo "Record upddate successfully successfully";
		} 
		
		else {
		    echo "Error updating record: " . mysqli_error($conn);
		}

	mysqli_close($conn);
?>


<!-- Create a table to show all inserted data  -->
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
	 		<div class="row">
	 			<div class="col-md-3"> 
	 		<a href="index.php" class="btn btn-success">Ajouter</a>
	 		<form action="affiche.php" method="post">
	 			</div>


<!-- DATA SEARCH --> 
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="affiche.php">
	     <div>
	        <input type="text" class="form-control" placeholder="Search">
	    </div>
	 	<button type="submit" class="btn btn-primary srch">Search</button>
	</form>
</body>
</html>

<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "gestion_voiture";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	}


	if(isset($_POST['car']) && isset($_POST['color']) & isset($_POST['driver'])){
			$car=$_POST['car'];
			$color=$_POST['color'];
			$driver=$_POST['driver'];
		}




// The SQL request for the search command

	$sql = "SELECT voiture SET car='$car', color='$color', driver='$driver' WHERE id=$id";

		if (mysqli_query($conn, $sql)===TRUE) {
	    header('location:affiche.php');
	    echo "Record upddate successfully successfully";
		} 
		
		else {
		    echo "Error updating record: " . mysqli_error($conn);
		}

	mysqli_close($conn);
 ?>






THE HTLM CODE FOR THE RESEARCH (AJAX)
	 		 	<div class="col-md-7 form-control"> 
		 		<html>
					<head>
						<script>
							function showResult(str) {
						  		if (str.length==0) {
						    document.getElementById("liveSearch").innerHTML="";
						    document.getElementById("liveSearch").style.border="0px";
						    return;
						  	}
						  
						  	if (window.XMLHttpRequest) {
						    // code for IE7+, Firefox, Chrome, Opera, Safari
						    xmlhttp=new XMLHttpRequest();
						  	} else {  // code for IE6, IE5
						    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
						  	}
						  	xmlhttp.onreadystatechange=function() {
						    
						    if (this.readyState==4 && this.status==200) {
						      document.getElementById("livesearch").innerHTML=this.responseText;
						      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
						    }
						  }
						 	 xmlhttp.open("GET","liveSearch.php?q="+str,true);
						  	xmlhttp.send();
							}
						</script>
					</head>
					<body>

						<form>
							<input type="text" size="30" onkeyup="showResult(this.value)">
							<div id="livesearch"></div>
							</form>
				</div>
				</body>
				</html>
	 			<div class="col-md-2"><input type="submit" name="search" value="Chercher"></div>
				
				
				</div> 

<!-- The table that show inserted data  -->
	 			
	 		</form>
	 		<table class="table table-dark table-striped table-hover">
	 			<tr>
	 				<th>Marque de la voiture</th>
	 				<th>Couleur de la voiture</th>
	 				<th>Chauffeur de la voiture</th>
	 				<th>Action</th>
	 			</tr>
	 		
			 	<?php 
			 	if (mysqli_num_rows($result) > 0){
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


<!-- DATA INSERTION -->

<?php 

if(isset($_POST['car']) && isset($_POST['color']) & isset($_POST['driver'])){
		$car=$_POST['car'];
		$color=$_POST['color'];
		$driver=$_POST['driver'];
	}


//Ask the form to insert data into the table voiture
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



