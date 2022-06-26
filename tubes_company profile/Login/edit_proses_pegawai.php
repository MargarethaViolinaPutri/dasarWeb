<?php
        include "myconnection.php";
        $id_pegawai = $_POST['id_pegawai'];
        $nama_pegawai = $_POST["nama"];
        $jabatan = $_POST["jabatan"];
        $jenis_kelamin = $_POST["jenis_kelamin"];
        $no_telepon = $_POST["no_telepon"];
        $tgl_lahir = $_POST["tgl_lahir"];
        $foto ="Uploads/". $_FILES["myfoto"]['name'];

        $target_path="Uploads/";

        $target_path=$target_path.basename($_FILES['myfoto']['name']);

        $query1 = "SELECT * from pegawai where id_pegawai = $id_pegawai";
        $result = mysqli_query($link,$query1);
        $row = mysqli_fetch_array($result);

        if (file_exists($_FILES['myfoto']['name'])) {                unlink("$row[foto]");
        }
        if (move_uploaded_file($_FILES['myfoto']['tmp_name'],$target_path)) {
            unlink("$row[foto]");
            echo "The file ". basename($_FILES['myfoto']['name'])."has been uploaded <br><br>";
        }else {
            echo "There was an error uploading the file, please try again!";
        }
            
        $query = "UPDATE pegawai SET nama_pegawai = '$nama_pegawai',jabatan =  '$jabatan',
        jenis_kelamin = '$jenis_kelamin',
        no_telepon = '$no_telepon',
        tgl_lahir =  '$tgl_lahir', 
        foto =  '$foto' WHERE id_pegawai = '$id_pegawai'";

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