<?php
session_start();
include("../db/controlLogin.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'] ?? '';
    $password = $_POST['password'] ?? '';
    $crypted_password = md5($password);
    $email = $_POST['email'] ?? '';
    $sesso = $_POST['sesso'] ?? '';
    $date = $_POST['date'] ?? '';
    $ruolo = $_POST['ruolo'] ?? '';

    if (empty($name) || empty($password) || empty($email) || empty($sesso) || empty($date) || empty($ruolo)) {
        $_SESSION['error'] = 'Tutti i campi sono obbligatori';
        header('Location: ../admin/addUser.php');
        exit();
    }

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "assenze";

    $conn = new mysqli($host, $username, $password, $dbname);

    if ($conn->connect_error) {
        $_SESSION['error'] = "Errore di connessione al database: " . $conn->connect_error;
        header('Location: ../admin/addUser.php');
        exit();
    }

    $option1 = isset($_POST['sesso']) ? $_POST['sesso'] : '';
    $option2 = isset($_POST['ruolo']) ? $_POST['ruolo'] : '';

    if (empty($option1) || empty($option2)) {
        $_SESSION['error'] = 'Si prega di selezionare entrambi gli elementi';
        header('Location: ../admin/addUser.php');
        exit();
    }

    $mysqli_query = "ALTER TABLE utente AUTO_INCREMENT = 1";
    $conn->query($mysqli_query);

    $sql = "INSERT INTO utente (id_utente, username, email, password, sesso, data_nascita) 
            VALUES(null, '$name', '$email', '$crypted_password', '$sesso', '$date')";
    $conn->query($sql);

    $mysqli_query2 = "ALTER TABLE gerarchia AUTO_INCREMENT = 1";
    $conn->query($mysqli_query2);

    $sql2 = "INSERT INTO gerarchia (id_utente, id_ruolo)
            VALUES((SELECT MAX(utente.id_utente) FROM utente), (SELECT ruoli.id_ruolo FROM ruoli WHERE ruoli.tipo='$ruolo'))";
    $conn->query($sql2);

    $_SESSION['success'] = 'Utente aggiunto con successo';
    header("Location: ../admin/index.php");
    exit();
} else {
    $_SESSION['error'] = 'Richiesta non valida';
    header('Location: ../admin/addUser.php');
    exit();
}