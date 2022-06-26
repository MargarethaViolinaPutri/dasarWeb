<?php
    include "myconnection.php";

    $nama_pegawai = $_POST["nama"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "INSERT INTO user (nama_pegawai,username,
    password) VALUES
    ('$nama_pegawai', '$username', '$password')";

if(mysqli_query($link, $query)){
    $message= "Data baru berhasil ditambahkan";
     echo "<SCRIPT>
        alert('$message')
        window.location.replace('AkunStaff.php');
        </SCRIPT>";
}else{
    echo "Data baru gagal ditambahkan <br>" . mysqli_error($link);
}
mysqli_close($link);
?>
