<?php

require_once "dbconnection.php";

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$adv_name = $_POST["adv_name"];
$phone = $_POST["phone"];
$date = $_POST["date"];


$sql = "INSERT INTO sluserinfo(first_name, last_name, adv_name, phone, date) VALUES ('$first_name','$last_name','$adv_name','$phone','$date')";

// mysqli_query($conn, $sql);
// echo "Data added Successfully";



// Execute the query and check if it was successful
if (mysqli_query($conn, $sql)) {
    // If the query was successful, display a success alert
    echo "<script type='text/javascript'>
            alert('Data added successfully');
            window.location.href = 'index.php';
          </script>";
} else {
    // If the query failed, display an error alert
    echo "<script type='text/javascript'>
            alert('Error adding data: " . mysqli_error($conn) . "');
            window.location.href = 'index.php';
          </script>";


}

?>