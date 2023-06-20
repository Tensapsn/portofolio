<?php
session_start();
  if(isset($_SESSION['username'])) {
      $username = $_SESSION['username'];
  } else {    
      echo "<script>window.location.href = 'login.php';</script>";
      ?>
      <?php
      exit;
  }
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Memory Game</title>
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="game1.css" />
  </head>
  <body>
    <div class="wrapper">
      <div class="stats-container">
        <div id="moves-count"></div>
        <div id="time"></div>
      </div>
      <div class="game-container"></div>
      <button id="stop" class="hide">Stop Game</button>
    </div>
    <div class="controls-container">
      <p id="result"></p>
      <button id="start">Start Game</button>
    </div>
    <!-- Script -->
    <script src="game1.js"></script>
    <a class="back-button" href="index.php">Quit</a>
    <style>
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
    </style>
  </body>
</html>