<?php
include("../control.php");

$name = $_POST['name'];
$surname = $_POST['surname'];
$date = $_POST['date'];

$host = "localhost";
$username = "root";
$password = "";
$dbname = "assenze";

$conn = new mysqli($host, $username, $password, $dbname);

$mysqli_query = "ALTER TABLE studente AUTO_INCREMENT = 1";
            $conn->query($mysqli_query);

if (!empty($name) && !empty($surname) && !empty($date)) {
    $query = "INSERT INTO studente (Nome, Cognome, data_assenza, giustifica) VALUES ('$name', '$surname', '$date', FALSE)";
    $conn->query($query);

    header("Location: ../home/index.php", true, 301);
    exit();
}
?>
