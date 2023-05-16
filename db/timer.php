<?php
$inactive = 900;
if (isset($_SESSION['timeout'])) {
    $session_life = time() - $_SESSION['timeout'];
    if ($session_life > $inactive) {
        session_destroy();
        header("Location: ../index.php", true, 301);
    }
}
$_SESSION['timeout'] = time();

?>