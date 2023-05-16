<?php
include("../db/controlLogin.php");
include("../db/timer.php");

?>




<!DOCTYPE html>
<html lang="eng">

<head>
  <title>Missing Students management</title>
  <link rel="stylesheet" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="./favicon/favion.ico">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&display=swap" rel="stylesheet">
</head>

<body class="<?php echo $_COOKIE['tema']; ?>">

  <div class="container">
    <form action="../azioni/aggiungi.php" method="post">
      <div class="add-area">
        <h1 class="text">Aggiungi Assenze</h1>
        <div class="nameAdd">
          <input type="text" name="name" class="add-form" placeholder="Nome Studente" required>
        </div>
        <div class="surnameAdd">
          <input type="text" name="surname" class="add-form" placeholder="Cognome Studente" required>
        </div>
        <div class="dateAdd">
          <input type="date" name="date" class="add-form" placeholder="Cognome Alunno" required>
        </div>
        <div class="buttonAdd">
          <button class="Add">Add</button>
          <button onclick="goBack()" class="Back">Indietro</button>
        </div>
      </div>
    </form>
  </div>
  <script>
    function goBack() {
      window.history.back();
    }
  </script>
</body>

</html>