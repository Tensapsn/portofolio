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
    <title>Hangman</title>
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="game2.css" />
  </head>
  <body>
    <div class="container">
      <div id="options-container"></div>
      <div id="letter-container" class="letter-container hide"></div>
      <div id="user-input-section"></div>
      <canvas id="canvas"></canvas>
      <div id="new-game-container" class="new-game-popup hide">
        <div id="result-text"></div>
        <button id="new-game-button">New Game</button>
      </div>
    </div>
    <script src="game2.js"></script>
    <a class="back-button" href="index.php">Quit</a>
  </body>
</html>