<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "assenze";
   
   $conn = mysqli_connect($servername, $username, $password, $dbname);
  

   $id_studente=$_GET['rn'];
   $query="DELETE FROM studente WHERE `studente`.`id_studente` = '$id_studente';";

   $data=mysqli_query($conn,$query);

   if($data){
    header("location: ../home/index.php");
  exit;
   }else{
    echo "unlucky";
   }

?>