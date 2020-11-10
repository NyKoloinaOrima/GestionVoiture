<!DOCTYPE html>
<html>
<head>
	<title>Car Management</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	
<!-- Create the form to collect the data -->
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<h2>FICHE DE SUIVI DES VOITURES</h2>
		<form action="affiche.php" method="post">
			<div>
				<label> <h5>Marque de la voiture</h5></label>
				<input type="text" name="car" class="form-control">
			</div>
			<div>
				<label><h5>Couleur de la voiture</h5></label>
				<input type="text" name="color" class="form-control">
			</div>
			<div>
				<label><h5>Chauffeur de la voiture</h5></label>
				<input type="text" name="driver" placeholder="Inserer le nom et le prénom du chauffeur de la voiture" class="form-control">	
			</div>
			<div class="Inst">
				<input type="submit" name="submit" class="form-control btn btn-primary" value="Inserer"> 
		</form>

	</div>
	<div class="col-md-3"></div>

	
</div>
</body>
</html>