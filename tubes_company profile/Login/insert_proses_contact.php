<?php
    include "myconnection.php";

    $nama = $_POST["name"];
    $email = $_POST["email"];
    $subjek = $_POST["subject"];
    $message = $_POST["message"];
    
    $query = "INSERT INTO contact_us(nama,email,
    subjek, message) VALUES
    ('$nama', '$email', '$subjek', '$message')";

if(mysqli_query($link, $query)){
    $message= "Data baru berhasil ditambahkan";
     echo "<SCRIPT>
        alert('$message')
        window.location.replace('Pegawai.php');
        </SCRIPT>";
}else{
    echo "Data baru gagal ditambahkan <br>" . mysqli_error($link);
}
mysqli_close($link);
?>