<?php 
    $name = "mahasiswa";
    $value = "Margaretha Violina Putri";
    setcookie($name, $value, time()+600);
    setcookie("kelas", "MI-1F", time()+3600);

?>
<html>
<body>
<?php   
echo "Cookies telah dibuat";
?>
</body>
</html>