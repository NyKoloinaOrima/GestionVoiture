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
$sql = "DELETE FROM voiture WHERE id=$id";

if (mysqli_query($conn, $sql)===TRUE) {
    header('location:affiche.php');
    echo "Record deleted successfully";
} 
else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>