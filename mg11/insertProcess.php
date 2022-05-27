<?php
    include "myconnection.php";
    $target_path="Uploads/";

    $target_path=$target_path.basename($_FILES['myfoto']['name']);

    if (move_uploaded_file($_FILES['myfoto']['tmp_name'],$target_path)) {
        echo "The file ". basename($_FILES['myfoto']['name'])." has been uploaded <br><br>";
    }else {
        echo "There was an error uploading the file, please try again!";
    }
    $name = $_POST["myname"];
    $address = $_POST["myaddress"];
    $image = $_FILES["myfoto"]['name'];

    $query = "INSERT INTO student (name,address,image) VALUES
    ('$name', '$address', '$image')";

if(mysqli_query($connect, $query)){
    echo "Data baru berhasil ditambahkan";
}else{
    echo "Data baru gagal ditambahkan <br>" . mysqli_error($connect);
}
mysqli_close($connect);
?>
