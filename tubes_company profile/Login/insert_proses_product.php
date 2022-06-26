<?php
    include "myconnection.php";
    $target_path="Uploads/";

    $target_path=$target_path.basename($_FILES['foto_product']['name']);

    if (move_uploaded_file($_FILES['foto_product']['tmp_name'],$target_path)) {
        echo "The file ". basename($_FILES['foto_product']['name'])." has been uploaded <br><br>";
    }else {
        echo "There was an error uploading the file, please try again!";
    }
    $nama_product = $_POST["nama_product"];
    $lebar = $_POST["lebar"];
    $tinggi = $_POST["tinggi"];
    $bahan = $_POST["bahan"];
    $harga = $_POST["harga"];
    $minimal_order = $_POST["minimal_order"];
    $keterangan = $_POST["keterangan"];
    $foto_product = "Uploads/". $_FILES["foto_product"]['name'];

    $query = "INSERT INTO product (nama_product,lebar,
    tinggi, bahan, harga, minimal_order, keterangan, foto_produk) VALUES
    ('$nama_product','$lebar','$tinggi', '$bahan', '$harga', '$minimal_order',
    '$keterangan', '$foto_product')";

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