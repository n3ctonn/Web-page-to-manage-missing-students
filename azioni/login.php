<?php
session_start();

$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['name'];

$host = 'localhost';
$username = 'root';
$pass = '';
$dbname = 'assenze';

$conn = new mysqli($host, $username, $pass, $dbname);

$query = $conn->prepare("SELECT * FROM utente WHERE (username=? OR email=?) AND password = MD5(?)");
$query->bind_param("sss", $name, $email, $password);

$query->execute();

$result = $query->get_result();
$row = $result->fetch_array();
$username = $row['username'];

if ($result->num_rows != 0) {

    $sql = $conn->prepare("SELECT ruoli.tipo 
                            FROM utente
                            JOIN gerarchia ON utente.id_utente = gerarchia.id_utente 
                            JOIN ruoli ON gerarchia.id_ruolo = ruoli.id_ruolo 
                            WHERE utente.username = ?");
    $sql->bind_param("s", $username);
    $sql->execute();
    $result2 = $sql->get_result();
    $row2 = $result2->fetch_array();
    $ruolo = $row2['tipo'];

    $_SESSION['Login'] = $username;
    $_SESSION['Ruolo'] = $ruolo;
    $_SESSION['timeout'] = time();
    header("Location: ../db/sort.php", true, 301);
} else {
    $_SESSION['error'];
    header("Location: ../index.php", true, 301);
}
?>