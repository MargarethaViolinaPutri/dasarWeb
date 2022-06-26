<?php
    include 'myconnection.php';
    $id_product = $_GET['id_product'];

    $query2 = "SELECT * from product where id_product = '$id_product'";
    $result = mysqli_query($link,$query2);
    $row = mysqli_fetch_array($result);

    unlink("$row[foto]");

    $query = "DELETE FROM product WHERE id_product='$id_product'";

if(mysqli_query($link, $query)){
    header('Location:Product.php');
}else{
    echo "Data gagal dihapus <br>" . mysqli_error($link);
}
mysqli_close($link);
?>