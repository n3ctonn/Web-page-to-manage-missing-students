<?php
include("../db/controlLogin.php");
include("../db/timer.php");

?>

<?php

if (isset($_POST['btn'])) {
  header("location:../adminAdd/index.php");
}

?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "assenze";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$query = "SELECT*FROM utente";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Area</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="<?php echo $_COOKIE['tema']; ?>">
  <div class="container">
    <header>
      <h1>Benvenuto nell'area admin,
        <?php echo $_SESSION['Login']; ?>
      </h1>
      <nav>
        <ul>
          <li><a class="tab-link active " href="#" data-target="dashboard-content">Dashboard</a></li>
          <li><a class="tab-link" href="#" data-target="users-content">Utenti</a></li>
          <li><a  class="logout"href="../db/logout.php">Logout</a></li>
        </ul>
      </nav>
    </header>

    <main>
      <div id="dashboard-content" class="tab-content">
        <h2>Dashboard</h2>
      </div>
      <div id="users-content" class="tab-content" style="display:none;">
        <h2>Utenti</h2>
        <form action="" method="post">
          <div class="button">
            <button name="btn" class="btt">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
              </svg>
              <span>Utente</span></button>
          </div>
        </form>
        <div class="table-div" id="div1">
          <table class="table">
            <thead class="table-head">
              <tr>
                <th>N.</th>
                <th>index</th>
                <th>Username</th>
                <th>Email</th>
                <th>Sesso</th>
                <th>Data di nascita</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody class="table-body">
              <?php
              if ($total != 0) {
                $k = 1;
                while ($result = mysqli_fetch_assoc($data)) {
                  echo "
                                <tr>
                                    <td>" . $k . "</td>
                                    <td>" . $result['id_utente'] . "</td>
                                    <td>" . $result['username'] . "</td>
                                    <td>" . $result['email'] . "</td>
                                    <td>" . $result['sesso'] . "</td>
                                    <td>" . $result['data_nascita'] . "</td>
                                    <td class='x-col'><a href='../azioni/deleteUser.php?rn=$result[id_utente]' class='btn'>X</a></td>
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
      </div>
  </div>

  </main>
  </div>
  <script src="../script/adminSwitch.js"></script>
</body>

</html>