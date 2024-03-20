<?php 

session_start();

if($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit();
}

$nama = $_POST["nama"];
$email = $_POST["email"];
$password = $_POST["password"];

$_SESSION["name"] = $nama;
$_SESSION["email"] = $email;

if(isset($_FILES["photo"])) {
    $folder = "Assets/uploads/";

    $targetFile = $folder . basename($_FILES["photo"]["name"]);

    if(move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile)) {
        $_SESSION["photo"] = $targetFile;
    }
}

header("Location: profile.php");