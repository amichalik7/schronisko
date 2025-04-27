<?php
$conn = mysqli_connect("localhost", "user", "user123", "schronisko");
if (!$conn) {
    die("Połączenie nie powiodło się: " . mysqli_connect_error());
}
?>