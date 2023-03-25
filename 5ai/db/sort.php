<?php session_start(); ?>

<?php

if (!isset($_SESSION['Login'])) {
    header("Location: ../index.html");
    exit();
} else {
    if (isset($_SESSION['Ruolo']) && $_SESSION['Ruolo'] == 'admin') {
        header("Location: ../admin/index.php");
        exit();
    } else{
        if (isset($_SESSION['Ruolo']) && $_SESSION['Ruolo'] == 'professore') {
            header("Location: ../home/index.php");
            exit();
        }
    }
}
?>