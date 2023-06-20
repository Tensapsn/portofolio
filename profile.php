
<?php 
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
  <html>
  <head>
    <title>Profile Page</title>
  </head>
  <body>
  <h1>Welcome <?php echo $username; ?></h1>
    <div>
      <form action="logout.php" method="post">
        <input class="button" type="submit" value="Logout">
      </form>
    </div>
  </body>
  </html>

  <style>
.menu{
    background-color: #87CEFA;
    border: 1px solid #f0f0f0;
    border-radius: 8px;
    padding: 20px;
    margin-bottom: 10px;
    display: flex;
    justify-content: space-between;
}
 
div.menu ul {
    list-style:none;
    overflow: hidden;
    display: flex;
    align-items: center;
    margin: 0;
}
 
div.menu ul li {
    float:left;       
    text-transform:uppercase;
    margin: 0;
}
 
div.menu ul li a {
    display:block;   
    padding:0 20px;
    text-decoration:none;
    color:#2c2c2c;
    font-family: sans-serif;
    font-size:13px;
    font-weight:400;
    transition:all 0.3s ease-in-out;
}
 
div.menu ul li a:hover,
div.menu ul li a.hoverover {    
    cursor: pointer;    
    color:#fff;
}
  body {
    font-family: 'Roboto', sans-serif;
    background-color: #f2f2f2;
  }
  
  h1 {
    text-align: center;
    margin-top: 50px;
    font-weight: bold;
    color: #4d4d4d;
    font-size: 3rem;
  }
  
  .card {
    width: 400px;
    margin: 0 auto;
    margin-top: 15px;
    text-align: center;
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
  }
  
  .button {
    background-color: #4d4d4d;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 20px;
    transition: background-color 0.3s ease;
  }
  
  .button:hover {
    background-color: #333333;
  }
  
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  #content{
    width: 50%;
    justify-content: center;
    align-items: center;
    margin: 20px auto;
    border: 1px solid #cbcbcb;
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
  }

  form{
    width: 100%;
    margin: 20px auto;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }

  input[type="text"], input[type="number"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: none;
    border-radius: 5px;
    background-color: #f2f2f2;
  }

  input[type="submit"] {
    width: 50%;
    padding: 10px 20px;
    margin-top: 20px;
    border: none;
    border-radius: 5px;
    background-color: #4d4d4d;
    color: white;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  input[type="submit"]:hover {
    background-color: #333333;
  }

  #display-image{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding: 10px;
  }

  img{
    margin: 10px;
    padding: 5px;
    border-radius: 5px;
    box-shadow: 0 0 5px 0 rgba(0,0,0,0.2);
    border: 5px solid #ddd;
  }
  .custom-scrollbar::-webkit-scrollbar {
  width: 12px;
}

.custom-scrollbar::-webkit-scrollbar-track {
  background: #f1f1f1;
  border-radius: 10px;
}

.custom-scrollbar::-webkit-scrollbar-thumb {
  background: #888;
  border-radius: 10px;
}

.custom-scrollbar::-webkit-scrollbar-thumb:hover {
  background: #555;
}

.title {
      font-size: 48px;
      font-weight: bold;
      color: #343a40;
      text-align: center;
      margin-bottom: 10px;
    }

.subtitle {
      font-size: 24px;
      font-weight: normal;
      color: #868e96;
      text-align: center;
    }


</style>