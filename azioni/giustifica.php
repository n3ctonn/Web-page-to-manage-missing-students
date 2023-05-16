<?php

$id=$_GET['id'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "assenze";

$conn = mysqli_connect($servername, $username, $password, $dbname);



$query = "UPDATE studente SET giustifica = TRUE WHERE id_studente = '$id'";
if ($conn->query($query) === TRUE) {
    header("Location: ../genitore/index.php");
} else {
    echo "Error updating table: " . $conn->error;
}
?>