<?php

include("../db/controlLogin.php");

?>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "assenze";

$conn = mysqli_connect($servername, $username, $password, $dbname);


$query = "SELECT*FROM studente";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);


?>

<!DOCTYPE html>
<html lang="it">

<head>
  <title>Gestione Assenze</title>
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
        <h1> GoodMorning Prof.
          <?php echo $_SESSION['Login']; ?>
        </h1>
      </div>
      <div class="navBar">
        <nav>
          <a href="../aggiungi/index.php" class="aggiungi">Add Absence</a>
          <a href="../db/logout.php" class="logOut">Logout</a>
        </nav>
      </div>
    </div>

    <div class="table-div" id="div1">
      <table class="table">
        <thead>
          <tr class="table-head">

            <th>N.</th>
            <th>Index</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Date Absence</th>

          </tr>
        </thead>
        <tbody>
          <?php
          if ($total != 0) {
            $k = 1;
            while ($result = mysqli_fetch_assoc($data)) {
              echo "
              <tr class='table-body'>
                <td>" . $k . "</td>
                <td>" . $result['id_studente'] . "</td>
                <td>" . $result['Nome'] . "</td>
                <td>" . $result['Cognome'] . "</td>
                <td>" . $result['data_assenza'] . "</td>
                <td class='x'><a href='../azioni/delete.php?rn=$result[id_studente]' class='btn'>X</a></td>
              </tr>

            ";

              $k++;
            }
          }
          ?>
        </tbody>
        <tfoot>
          <tr class="table-foot">

          </tr>
        </tfoot>

      </table>
    </div>
  </div>
  </div>
</body>

</html>