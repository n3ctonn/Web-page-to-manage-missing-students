<?php session_start(); ?>

<?php

if (!isset($_SESSION['Login'])) {
    header("Location: ../index.php");
    exit();
} else {
    if (isset($_SESSION['Ruolo']) && $_SESSION['Ruolo'] == 'admin') {
        header("Location: ../admin/index.php");
        exit();
    } else {
        if (isset($_SESSION['Ruolo']) && $_SESSION['Ruolo'] == 'professore') {
            header("Location: ../home/index.php");
            exit();
        } else {
            if (isset($_SESSION['Ruolo']) && $_SESSION['Ruolo'] == 'studente') {
                header("Location: ../studenti/index.php");

            }else{
                if (isset($_SESSION['Ruolo']) && $_SESSION['Ruolo'] == 'genitore') {
                    header("Location: ../genitore/index.php");
                }
            }
        }
    }
}
?>