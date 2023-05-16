<?php
session_start();
session_destroy();
unset($_SESSION['Login']);
header("Location: ../index.php", true, 301);
?>