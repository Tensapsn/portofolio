<?php

session_start();
if(isset($_SESSION['username'])) {
    header("Location: index.php?page=profile");
    exit;
}
   $server = mysqli_connect("localhost","id20934445_tensa","@R005n30psn","id20934445_portofolio");

    $username = $_POST["username"]; 
    $password = $_POST["password"];
    
    $sql = "SELECT * FROM login WHERE username = '$username'";
    $result = mysqli_query($server, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if ($row["password"] == $password) {
            echo "<script>window.location.href = 'index.php?page=profile';</script>";
            $_SESSION['username'] = $username;
        } else {
            echo "<script>alert('Wrong password');</script>";
            echo "<script>window.location.href = 'login.php';</script>";
        }
    } else {
        echo "<script>alert('Wrong username');</script>";
        echo "<script>window.location.href = 'login.php';</script>";
    }
?>
