<?php
include("../db/controlLogin.php");
include("../db/timer.php");

?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aggiungi un nuovo Utente</title>
  <link rel="stylesheet" href="style.css">
</head>

<body class="<?php echo $_COOKIE['tema']; ?>">
  <div class="container">
    <form action="../azioni/addUser.php" method="post">
      <div class="add-area">
        <h1 class="text">Aggiungi Utenti</h1>
        <div class="userAdd">
          <input type="text" name="name" class="add-form" placeholder="Username" required>
        </div>
        <div class="emailAdd">
          <input type="email" name="email" class="add-form" placeholder="Email" required>
        </div>
        <div class="passAdd">
          <input type="password" name="password" class="add-form" placeholder="Password" required>
        </div>
        <div class="sexAdd">
          <select name="sesso" class="add-form" required>
            <option value="" selected disabled hidden>Sesso</option>
            <option value="maschio">M</option>
            <option value="femmina">F</option>
            <option value="altro">Altro</option>
          </select>
        </div>
        <div class="birthAdd">
          <input type="date" name="date" id="date" placeholder="Birthday" class="add-form" required>
        </div>
        <div class="roleAdd k">
          <select name="ruolo" class="add-form" required>
            <option value="" selected disabled hidden>Ruolo</option>
            <option value="professore">Professore</option>
            <option value="genitore">Genitore</option>
            <option value="studente">Studente</option>
          </select>
        </div>
        <div class="buttonAdd">
          <button class="Add">Aggiungi</button>
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