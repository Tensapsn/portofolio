<?php
session_start();
if (!isset($_SESSION['username']) || !$_SESSION['username']) {
    header('Location: login.php');
    exit();
}
?>

<?php
require 'function.php';

if(isset($_POST["submit"])){
    if(tambahGambar($_POST) > 0){
        echo"berhasil";
    }else{
        echo"gagal";
    }
}

if(isset($_POST["delete"])){
    if(hapusGambar($_POST["delete"]) > 0){
        echo"berhasil";
    }else{
        echo"gagal";
    }
}

$select = menampilkanData("SELECT * FROM pfp");

?>

<!DOCTYPE html>
<html>
<head>
    <title>My Page</title>
</head>
<body>
    <h1>Gallery Editor</h1>

    <center>
        <div class="card">
            <form action="" method="post" enctype="multipart/form-data">
                <label for="gambar">Select an image to upload:</label>
                <input type="file" name="gambar" id="gambar">
                <button type="submit" name="submit">Add Image</button>
            </form>
        </div>

        <?php foreach($select as $gambar): ?>
            <div>
                <img src="img/<?= $gambar["image"]?>" width="200">
                <form action="" method="post">
                    <input type="hidden" name="delete" value="<?= $gambar["id"] ?>">
                    <button type="submit">Delete</button>
                </form>
            </div>
        <?php endforeach;?>
        <br>
        <button onclick="location.href='index.php?page=profile';">Finish</button>
    </center>

</body>
</html>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-top: 0;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
        }

        input[type="file"] {
            margin-bottom: 10px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #3e8e41;
        }

        img {
            margin: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 5px;
            background-color: white;
            box-shadow: 0 0 5px 0 rgba(0,0,0,0.2);
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
    </style>