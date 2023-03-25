<?php

include("../db/controlLogin.php");

?>


<!DOCTYPE html>
<html lang="eng">

<head>
  <title>Absence management</title>
  <link rel="stylesheet" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="./favicon/favion.ico">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&display=swap" rel="stylesheet">
</head>

<body>
  <div class="work-area">

    <div class="header">
      <div class="title">
        <h1> Goodmorning prof.
          <?php echo $_SESSION['Login']; ?>
        </h1>
      </div>
      <div class="navBar">
        <nav>
          <a href="../home/index.php" class="aggiungi">Home</a>
          <a href="../db/logout.php" class="logOut">Logout</a>
        </nav>
      </div>
    </div>

    <div class="container">
      <form action="../azioni/aggiungi.php" method="post">
        <div class="add-area">
          <h1 class="text">Add new absence</h1>
          <div class="nameAdd">
            <input type="text" name="name" class="add-form"class placeholder="Student Name" required>
          </div>
          <div class="surnameAdd">
            <input type="text" name="surname" class="add-form" placeholder="Student Surname" required>
          </div>
          <div class="dateAdd">
            <input type="date" name="date" class="date"class placeholder="Cognome Alunno" required>
          </div>

          <div class="buttonAdd">
            <button class="Add">Add</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>

</html>