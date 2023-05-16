<?php

include("../db/controlLogin.php");

?>

<?php

include("../db/timer.php");

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
  <title> Prof Area</title>
  <link rel="stylesheet" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="./favicon/favion.ico">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>

<body class="<?php echo $_COOKIE['tema']; ?>">
  <div class="container">
    <header>
      <div class="title">
        <h1> Welcome
          <?php echo $_SESSION['Login']; ?>
        </h1>
      </div>

      <nav>
        <a href="../db/logout.php" class="logout">Logout</a>
      </nav>
    </header>

    <main>
    <div class="table-div" id="div1">
      <table class="table">
        <thead class="table-head">
          <tr>
            <th>N.</th>
            <th>Index</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Missing Day</th>

          </tr>
        </thead>
        <tbody class="table-body">
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
              </tr>

            ";

              $k++;
            }
          }
          ?>
        </tbody>
        <tfoot class="table-foot">
          <tr>
            <td colspan="5"></td>
          </tr>
        </tfoot>
      </table>
    </div>
    </main>
  </div>
  </div>
</body>

</html>