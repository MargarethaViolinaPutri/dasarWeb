<?php
        include "myconnection.php";
        $id_product = $_POST['id_product'];
        $nama_product = $_POST['nama_product'];
        $lebar = $_POST["lebar"];
        $tinggi = $_POST["tinggi"];
        $bahan = $_POST["bahan"];
        $harga = $_POST["harga"];
        $minimal_order = $_POST["minimal_order"];
        $keterangan = $_POST["keterangan"];
        $foto_produk ="Uploads/". $_FILES["foto_product"]['name'];

        $target_path="Uploads/";

        $target_path=$target_path.basename($_FILES['foto_product']['name']);

        $query1 = "SELECT * from product where id_product = $id_product";
        $result = mysqli_query($link,$query1);
        $row = mysqli_fetch_array($result);

        if (file_exists($_FILES['foto_product']['name'])) {                
            unlink("$row[foto_produk]");
        }
        if (move_uploaded_file($_FILES['foto_product']['tmp_name'],$target_path)) {
            unlink("$row[foto_produk]");
            echo "The file ". basename($_FILES['foto_product']['name'])."has been uploaded <br><br>";
        }else {
            echo "There was an error uploading the file, please try again!";
        }
            
        $query = "UPDATE product SET nama_product = '$nama_product',
        lebar =  '$lebar',
        tinggi =  '$tinggi',
        bahan =  '$bahan',
        harga = '$harga',
        minimal_order = '$minimal_order',
        keterangan =  '$keterangan', 
        foto_produk =  '$foto_produk' WHERE id_product = '$id_product'";

        if(mysqli_query($link, $query)){
            $message= "Data baru berhasil ditambahkan";
            echo "<SCRIPT>
                alert('$message')
                window.location.replace('Product.php');
                </SCRIPT>";
        }else{
            echo "Data baru gagal ditambahkan <br>" . mysqli_error($link);
        }
mysqli_close($link);
?>