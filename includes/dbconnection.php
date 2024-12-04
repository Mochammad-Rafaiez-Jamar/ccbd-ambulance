<?php
$con = mysqli_connect("localhost", "root", "", "ambulan");
if (mysqli_connect_errno()) {
    echo "Connection failed: " . mysqli_connect_error();
} else {
    echo "Connected successfully to the database!";
}
?>