<?php

require('../database.php');

//untuk inputan
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];
$confirm_password = $_POST["confirm_password"];

//menyimpan kedalam database
$sql = "INSERT INTO user (email, username, password) VALUES ('$email', '$username', '$password')";

if ($conn->query($sql)) {
    $msg = "Register berhasil. Silahkan Login!";
} else {
    $msg = "Register Gagal!";
}
header("Location: ../login.php?msg=" . $msg);
