<?php
    session_start();

    // Import Coonection file
    $hostname = "localhost";
    $username = "root";
    $password = "mysql";
    $dbname = "meuble";

   $conn = mysqli_connect($hostname, $username, $password, $dbname);

   if(!$conn){
       die("Connection feiled" . mysqli_connect_error());
   }else {
       echo "Connected" . "<br>";
   }


    $id = $_GET['id'];

    // Define Connection

    // Delete Query
    $sql = "DELETE FROM card WHERE card_id='" . $id . "';";

    echo $sql;

    // execute query aka insert data
    mysqli_query($conn, $sql) or die($conn);

    // close connection


    // Redirect to posts page
    header("Location: card.php");
?>