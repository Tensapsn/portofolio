<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Age Calculator</title>
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="game5.css" />
  </head>
  <body>
    <div class="container">
      <div class="input-wrapper">
        <input type="date" id="date-input" />
        <button id="calc-age-btn">Calculate</button>
      </div>
      <div class="output-wrapper">
        <div>
          <span id="years">-</span>
          <p>Years</p>
        </div>
        <div>
          <span id="months">-</span>
          <p>Months</p>
        </div>
        <div>
          <span id="days">-</span>
          <p>Days</p>
        </div>
      </div>
    </div>
    <!-- Script -->
    <script src="game5.js"></script>
    <a class="back-button" href="index.php">Quit</a>
  </body>
</html>