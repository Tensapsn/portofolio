<?php 
  if(isset($_SESSION['username'])) {
      $username = $_SESSION['username'];
  } else {    
      echo "<script>window.location.href = 'login.php';</script>";
      ?>
      <?php
      exit;
  }