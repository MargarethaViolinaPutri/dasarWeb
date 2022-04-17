<html>
<head>
<link rel="stylesheet" type="text/css" href="styleSubmit.css">
	<title>
		Biodata Pelanggan
	</title>
</head>
<body>
    <?php 
    echo "<br>"."<br>";
    echo "Terimakasih telah mengisi data pelanggan kami." ."<br>";
    echo "Salam Kuliner !" ."<br>"."<br>"."<br>";
    $username=$_GET["username"];
    $email=$_GET["email"];
    $tanggallahir=$_GET["tanggallahir"];
    $jeniskelamin=$_GET["jeniskelamin"];
    $kata=$_GET["kata"];
    $member=$_GET["member"];
    echo "Nama : ".$username."<br>"."<br>";
    echo "Email : ".$email."<br>"."<br>";
    echo "Tanggal Lahir : ".$tanggallahir."<br>"."<br>";
    echo "Jenis Kelamin : ".$jeniskelamin."<br>"."<br>";
    echo "Satu Kata Paling Berkesan Tentang Kami : ".$kata."<br>"."<br>";
    echo "Keanggotaan Member : ".$member."<br>"."<br>";
    ?>
    <br><br><br>
    <a style="text-decoration: none" ; href="biodata.php"> <input type="button" name="kembali" value="Kembali Ke Menu Isi Data" /> </a>
    <a style="text-decoration: none" ; href="Index_Uts.html"> <input type="button" name="kembali" value="Kembali Ke Menu Utama" /> </a>
</body>
</html>