<?php
    include "myconnection.php";
    $id_user = $_GET['id_user'];

    $query = "DELETE FROM user WHERE id_user='$id_user'";

if(mysqli_query($link, $query)){
    header('Location:AkunStaff.php');
}else{
    echo "Data gagal dihapus <br>" . mysqli_error($link);
}
mysqli_close($link);
?>