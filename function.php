<?php


$conn = mysqli_connect("localhost","
id20934445_tensa","@R0053n0psn","id20934445_portofolio");

function menampilkanData($query){
    global $conn;              
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }return $rows;
}


function tambahGambar($query){
    global $conn;
    if(isset($_FILES["gambar"])) {
        $gambar = upload();

        $result ="  INSERT INTO pfp 
                    VALUES
                    ('','$gambar')";

        mysqli_query($conn, $result);
        return mysqli_affected_rows($conn);
    }
    return 0;
}

function hapusGambar($id){
    global $conn;
    $query = "DELETE FROM pfp WHERE id = '$id'";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


function upload(){
    $nama = $_FILES["gambar"]["name"];
    $tmp = $_FILES["gambar"]["tmp_name"];

    move_uploaded_file($tmp, 'img/' . $nama);
    return $nama;
}
?>

