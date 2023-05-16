<?php

include("../db/controlLogin.php");
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

$sql = "SELECT giustifica FROM studente";
$q = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="it" class="<?php echo $_COOKIE['tema']; ?>">


<head>
  <title> Prof Area</title>
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
    <header>
      <div class="title ">
        <h1>Welcome Prof.
          <?php echo $_SESSION['Login']; ?>
        </h1>
      </div>

      <nav>
        <a href="../aggiungi/index.php" class="aggiungi">Add Absence</a>
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
              <th>Nime</th>
              <th>Cognome</th>
              <th>Data Assenza</th>
              <th>Stato</th>
              <th>Azione</th>
            </tr>
          </thead>
          <tbody class="table-body">
            <?php
            if ($total != 0) {
              $k = 1;
              while ($result = mysqli_fetch_assoc($data)) {
                $resul = mysqli_fetch_assoc($q);
                $giustifica = $resul['giustifica'];
                $giustifica_stringa = $giustifica ? 'Giustificata' : 'Non Giustificata';

                echo "
                                <tr>
                                    <td>" . $k . "</td>
                                    <td>" . $result['id_studente'] . "</td>
                                    <td>" . $result['Nome'] . "</td>
                                    <td>" . $result['Cognome'] . "</td>
                                    <td>" . $result['data_assenza'] . "</td>
                                    <td class='x-col'>" . $giustifica_stringa . " </td>
                                    <td class='x-col'><a href='../azioni/delete.php?rn=$result[id_studente]' class='btn'>X</a></td>
                                </tr>";
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
</body>

</html>