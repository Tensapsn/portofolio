<!DOCTYPE html>
<html>
	<head>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap"
      rel="stylesheet"/>
	</head>
	<body>
		<div class="container">
			<header>
				<h1 class="title">Website Demonstration Portofolio</h1>
				<h2 class="subtitle">Muhammad Tensa Anargya Rooseno</h3>
			</header>
			<nav>
				<ul>
					<li><a href="index.php?page=home">Home</a></li> 
          <?php
          if ($_GET['page'] === 'home') {
            echo '<li><a href="#kontak-section" class="scroll-button">Contacts</a></li>';
          }
            ?>
					<?php
          session_start();
          if(isset($_SESSION['username'])) {?>
          				<li><a href="index.php?page=profile">Profile</a></li>
          				<li><a href="index.php?page=games">Minigames</a></li>
        	<?php } ?>
				</ul>
        <script>
          // Smooth scrolling animation
document.querySelectorAll('a.scroll-button').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();

    document.querySelector(this.getAttribute('href')).scrollIntoView({
      behavior: 'smooth'
    });
  });
});
        </script> 
				<div class="auth-buttons">
					<?php
					if(isset($_SESSION['username'])) {
					echo '<a href="logout.php">LOG OUT</a>';
					} else {
					echo '<a href="login.php">LOG IN</a>';
                    echo '<a href="register.php">REGISTER</a>';
					}
					?>
				</div>
			</nav>
			<main>
			<?php 
			if(isset($_GET['page'])){
				$page = $_GET['page'];
		
				switch ($page) {
					case 'home':
						include "home.php";
						break;
					case 'kontak':
						include "kontak.php";
						break;
                    case 'login':
                        include "login.php";
                        break;
                    case 'register':
                        include "register.php";
                        break;
                    case 'profile':
                        include "profile.php";
                        break;
                    case 'games':
                        include "gamehub.php";
                        break;
					default:
						echo "<center><h3>Sorry. Page not found!</h3></center>";
						break;
				}
			}else{
				include "home.php";
			}
			?>
			</main>
		</div>
    <style>
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: Arial, sans-serif;
  background-color: #f0f0f0;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 10px;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

header {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  margin-bottom: 30px;
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

nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 30px;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
  padding: 10px;
}

nav ul {
  display: flex;
  list-style: none;
  margin: 0;
  padding: 0;
}
nav ul li {
  margin: 0 10px;
}
 
nav ul li a {
  display: block;   
  text-decoration: none;
  color: #2c2c2c;
  font-family: sans-serif;
  font-size: 14px;
  font-weight: bold;
  background-color: #fff;
  border: 2px solid #2c2c2c;
  border-radius: 5px;
  cursor: pointer;
  padding: 10px;
  transition: all 0.3s ease-in-out;
}
 
nav ul li a:hover,
nav ul li a.active {    
  color: #fff;
  background-color: #2c2c2c;
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
  left: 20px;
  text-decoration: none;
}
.auth-buttons {
  margin-left: auto;
  display: flex;
  align-items: center;
  margin: 0 10px; 
}
 
.auth-buttons a {
  display: block;
  padding: 0 20px;
  font-weight: bold;
  padding: 10px 20px;
  cursor: pointer;
  margin-top: 20px;
  border: 3px solid white;
  margin: 0 10px;
  transition: all 0.3s ease-in-out;
  display: block;   
  text-decoration: none;
  color: #2c2c2c;
  font-family: sans-serif;
  font-size: 14px;
  background-color: #fff;
  border: 2px solid #2c2c2c;
  border-radius: 5px;
}
 
.auth-buttons a:hover,
.auth-buttons a.hoverover {    
  cursor: pointer;    
  color: #fff;
  background-color: #2c2c2c;
}


::-webkit-scrollbar {
    width: 10px;
  }
  
  ::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 10px;
  }
  

  ::-webkit-scrollbar-thumb {
    background: #888;
    border-radius: 10px;
  }
  
  ::-webkit-scrollbar-thumb:hover {
    background: #555;
  }

</style>
