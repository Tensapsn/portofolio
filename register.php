<?php
session_start();
if(isset($_SESSION['username'])) {
    header("Location: index.php?page=profile");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Page</title>
</head>
<body>
  <div class="form-container">
    <h2>Register</h2>
    <form action="registerprocess.php" method="post">
      <label for="username">Enter username</label>
      <input type="text" id="username" name="username" autocomplete="off" required>
      <div class="password-container">
        <label for="password">Enter your Password</label>
        <input type="password" id="password" name="password" autocomplete="off" required>
        <span class="toggle-password">&#128065;</span>
        <div id="password-strength"></div>
      </div>
      <input type="submit" value="Submit">
      <a class="back-button" href="index.php">Go Back</a>
    </form>
  </div>
  <script src="zxcvbn.js"></script>
  <script>
    const passwordInput = document.querySelector("#password");
    const togglePasswordButton = document.querySelector(".toggle-password");

    togglePasswordButton.addEventListener("click", () => {
      const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
      passwordInput.setAttribute("type", type);
      togglePasswordButton.classList.toggle("fa-eye-slash");
    });
</script>
<style>
body {
  background-color: #f5f5f5;
  font-family: Arial, sans-serif;
}
    
.form-container {
  width: 500px;
  background-color: #fff;
  padding: 30px;
  margin: 100px auto;
  box-shadow: 0 2px 10px rgba(0,0,0,0.1);
  border-radius: 10px;
}
    
h2 {
  text-align: center;
  color: #0066ff;
    margin-bottom: 30px;
}
    
label {
  font-size: 18px;
  margin-bottom: 10px;
  display: block;
}
    
input[type="text"], input[type="password"], input[type="submit"] {
  width: 100%;
  padding: 12px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
  font-size: 16px;
}
    
input[type="submit"] {
  background-color: #0066ff;
  color: #fff;
  cursor: pointer;
  border: none;
  width: 120px;
  height: 40px;
  margin: 0 auto;
  display: block;
  border-radius: 5px;
  font-size: 18px;
  font-weight: bold;
    }
    
input[type="submit"]:hover {
  background-color: #004c99;
}

.back-button {
  background-color: blue;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  text-align: center;
  position: absolute;
  bottom: 20px;
  left: 20px;
  text-decoration: none;
}
.back-button:hover {
  background-color: lightblue;
}
.password-container {
  position: relative;
}
    
#password {
  flex: 1;
}
    
.toggle-password {
  font-size: 1.5em;
  position: absolute;
  right: 0;
  top: 50%;
  transform: translateY(-50%);
  cursor: pointer;
  display: flex;
  align-items: center;
  padding-right: 20px;
  padding-top: 7px;
}
</style>