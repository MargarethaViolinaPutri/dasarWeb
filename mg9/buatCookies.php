<?php 
    $name = "mahasiswa";
    $value = "Zia Zidani";
    setcookie($name, $value, time()+600);
    setcookie("kelas", "MI-IH", time()+3600);

?>
<html>
<body>
<?php   
echo "Cookies telah dibuat";
?>
</body>
</html>