<?php
session_start();
unset($_SESSION['utente']);
header("Location: ../index.html", true, 301);
?>