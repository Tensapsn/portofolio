<?php 
  if(isset($_SESSION['username'])) {
      $username = $_SESSION['username'];
  } else {    
      echo "<script>window.location.href = 'login.php';</script>";
      exit;
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Minigames</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      position: relative;
    }


    footer {
      color: gray;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      text-align: center;
      position: absolute;
      bottom: 20px;
      right: 20px;
      font-size: 12px;
    }

    .center {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 50vh;
    }

    button {
      font-size: 24px;
      padding: 16px;
      margin: 16px;
      background-color: #2c2c2c;
      color: #fff;
      border-radius: 5px;
      border: none;
      cursor: pointer;
      transition: all 0.3s ease-in-out;
      box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
    }

    button:hover {
      background-color: #000;
      transform: translateY(-2px);
      box-shadow: 0px 12px 20px rgba(0, 0, 0, 0.3);
    }

    .subtitle {
      font-size: 24px;
      font-weight: normal;
      color: #868e96;
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="container">
    <header>
      <h1 class="title">Minigames</h1>
      <h2 class="subtitle">Little fun Minigames can't hurt eh?</h2>
    </header>

    <div class="center">
      <button onclick="window.location.href='game2.php'">Hangman Game</button>
      <button onclick="window.location.href='game1.php'">Memory Game</button>
      <button onclick="window.location.href='game3.php'">Tic Tac Toe</button>
      <button onclick="window.location.href='game4.php'">Typing Test</button>
      <button onclick="window.location.href='game5.php'">Age Calculator</button>
    </div>

    <footer>
      Disclaimer: Not all elements are rightfully owned
    </footer>
  </div>
</body>
</html>
