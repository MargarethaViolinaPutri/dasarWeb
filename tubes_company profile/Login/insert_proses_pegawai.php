<?php
    include "myconnection.php";
    $target_path="Uploads/";

    $target_path=$target_path.basename($_FILES['myfoto']['name']);

    if (move_uploaded_file($_FILES['myfoto']['tmp_name'],$target_path)) {
        echo "The file ". basename($_FILES['myfoto']['name'])." has been uploaded <br><br>";
    }else {
        echo "There was an error uploading the file, please try again!";
    }
    $nama_pegawai = $_POST["nama"];
    $jabatan = $_POST["jabatan"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $no_telepon = $_POST["no_telepon"];
    $tgl_lahir = $_POST["tgl_lahir"];
    $foto = "Uploads/". $_FILES["myfoto"]['name'];

    $query = "INSERT INTO pegawai (nama_pegawai,jabatan,
    jenis_kelamin, no_telepon, tgl_lahir, foto) VALUES
    ('$nama_pegawai', '$jabatan', '$jenis_kelamin', '$no_telepon',
    '$tgl_lahir', '$foto')";

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