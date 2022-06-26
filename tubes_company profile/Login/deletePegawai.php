<?php
    include 'myconnection.php';
    $id_pegawai = $_GET['id_pegawai'];

    $query2 = "SELECT * from pegawai where id_pegawai = '$id_pegawai'";
    $result = mysqli_query($link,$query2);
    $row = mysqli_fetch_array($result);

    unlink("$row[foto]");

    $query = "DELETE FROM pegawai WHERE id_pegawai='$id_pegawai'";

if(mysqli_query($link, $query)){
    header('Location:Pegawai.php');
}else{
    echo "Data gagal dihapus <br>" . mysqli_error($link);
}
mysqli_close($link);
?>