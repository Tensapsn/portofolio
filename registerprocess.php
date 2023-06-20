<?php

session_start();
if(isset($_SESSION['username'])) {
    header("Location: index.php?page=profile");
    exit;
}

$conn = mysqli_connect("localhost","
id20934445_tensa","@R0053n0psn","id20934445_portofolio");

    // Verify the reCAPTCHA response
    $recaptcha_response = $_POST['g-recaptcha-response'];
    $secret_key = '6LdIZvckAAAAALqBxXD8ZqpxCqDK2ePELF7JDk5P';

    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secret_key}&response={$recaptcha_response}");
    $response = json_decode($response, true);

    if (!$response['success']) {
        echo "<script>alert('Captcha authentication failed, Please try again.');</script>";
        echo "<script>window.location.href = 'register.php';</script>";
        die("reCAPTCHA verification failed. Please try again.");
    }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$username = $_POST['username'];
	$password = $_POST['password'];

  $query = "SELECT * FROM login WHERE username = '$username'";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('Username already taken.');</script>";
    echo "<script>window.location.href = 'register.php';</script>";
  }

  $query = "INSERT INTO login (username, password) VALUES ('$username', '$password')";
  if (mysqli_query($conn, $query)) {
    echo "<script>alert('You have registered Successfully');</script>";
    echo "<script>window.location.href = 'login.php';</script>";
  } else {  
    echo "Error: " . mysqli_error($conn);
  }
  $query = "INSERT INTO profile (username) VALUES ('$username')";
  if (mysqli_query($conn, $query)) {
    echo "<script>alert('test');</script>";
    echo "<script>window.location.href = 'login.php';</script>";
  } else {  
    echo "Error: " . mysqli_error($conn);
  }
}
if (!$result) {
    echo "Error: " . mysqli_error($conn);
    exit;
}
?>
