<?PHP

$name = $_POST['username'];
$password = $_POST['password'];
$crypted_password = md5($password);
$email = $_POST['email'];
$sesso = $_POST['sesso'];
$date = $_POST['date'];
$ruolo =$_POST['ruolo'];


$host = 'localhost';
$username = 'root';
$pass = '';
$dbname = 'assenze';

$conn = new mysqli($host, $username, $pass, $dbname);

$mysqli_query = "ALTER TABLE utente AUTO_INCREMENT = 1";
$conn->query($mysqli_query);

$sql = "INSERT INTO utente (id_utente, username, email, password, sesso, data_nascita) 
        VALUES(null, '$name', '$email', '$crypted_password', '$sesso', '$date')";
$conn->query($sql);

$sql2="INSERT INTO gerarchia (gerarchia.id_utente, gerarchia.id_ruolo)
        VALUES((SELECT MAX(utente.id_utente) FROM utente), (SELECT ruoli.id_ruolo FROM ruoli WHERE ruoli.tipo='$ruolo'))";

$conn->query($sql2);



header("Location: ../index.html", true, 301);
exit();
?>