<?php
include "myconnection.php";

if(isset($_POST['proses'])){
    mysqli_query($connect,"insert into contact_us set
    nama = '$_POST[name]',
    email = '$_POST[email]',
    subjek = '$_POST[subjek]',
    message = '$_POST[message]'");

    $message= "Terimakasih Telah Berpartisipasi. Mohon Tunggu Balasan Dari Admin";
    echo "<SCRIPT>
    alert('$message')
    window.location.replace('index.html');
    </SCRIPT>";
    
}
?>