<?php
        include "myconnection.php";
        $id_user = $_POST['id_user'];
        $nama_pegawai = $_POST["nama"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        $query = "UPDATE user SET 
        id_user = '$id_user',
        nama_pegawai = '$nama_pegawai',
        username = '$username',
        password = '$password' WHERE id_user =$id_user";

        if (mysqli_query($link,$query)){
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