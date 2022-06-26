<?php
    include "myconnection.php";
    $id_contact = $_GET['id_contact'];

    $query = "DELETE FROM contact_us WHERE id_contact='$id_contact'";

if(mysqli_query($link, $query)){
    header('Location:Contact.php');
}else{
    echo "Data gagal dihapus <br>" . mysqli_error($link);
}
mysqli_close($link);
?>