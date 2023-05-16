<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "assenze";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$id_utente = $_GET['rn'];

$query = "DELETE FROM utente WHERE `utente`.`id_utente` = '$id_utente';";
$data = mysqli_query($conn, $query);


$sqll = $conn->prepare("DELETE FROM gerarchia WHERE id_utente = ?");
$sqll->bind_param("i", $id_utente);
$sqll->execute();


if ($data) {
   header("location: ../admin/index.php");
   exit;
} else {
   echo "unlucky";
}

?>
