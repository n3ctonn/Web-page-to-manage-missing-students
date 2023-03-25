<?php 

include("../control.php");

?>  

<?php

$name = $_POST['name'];
$surname = $_POST['surname'];
$date = $_POST['date'];

$host = "localhost";
$username = "root";
$password = "";
$dbname = "assenze";

$conn = new mysqli($host, $username, $password, $dbname);

if (empty($_POST['name'])) {
    
} else {
    if (empty($_POST['surname'])) {


    } else {
        if (empty($_POST['date'])) {

        } else {

            $mysqli_query = "ALTER TABLE studente AUTO_INCREMENT = 1";
            $conn->query($mysqli_query);

            $id = $sql = "INSERT INTO studente (id_studente, Nome, Cognome, data_assenza) 
            VALUES(null, '$name', '$surname', '$date')";

            $conn->query($sql);
             


            header("Location: ../home/index.php", true, 301);
            exit();


        }

    }

}



?>