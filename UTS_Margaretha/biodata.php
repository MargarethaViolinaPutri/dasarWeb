<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styleBiodata.css">
	<title>Biodata Pelanggan</title></head>

<body>
	<h2>Isi Data Anda</h2>
	<h2>Agar Kami Mengenal Pelanggan Setia Pondok Mbakyu Ku</h2>
	<br><br>
	<form action="submit.php" method="GET">
		<p>Nama : <input type="text" name="username" /></p>
		<p>E-mail : <input type="email" name="email" /></p>
		<p>Tanggal Lahir : <input type="date" name="tanggallahir" /></p>
		<p>Jenis Kelamin : 
		<input type="radio" name="jeniskelamin" value="Pria"> Pria
		<input type="radio" name="jeniskelamin" value="Wanita"> Wanita </p>
		<p>Satu Kata Paling Berkesan Untuk Kami : </p>
		<input type="radio" name="kata" value="Enak dan Bersih"> Enak dan Bersih
		<input type="radio" name="kata" value="Murah"> Murah Tapi Ga Murahan
		<input type="radio" name="kata" value="Good Service"> Good Service</p>
		<br>
		<p>Apakah Anda Member Kami?</p>
		<input type="radio" name="member" value="Ya"> Ya
		<input type="radio" name="member" value="Tidak"> Tidak </p>
		
		<input type="submit" name="submit" value="Submit" />
	</form>
</body>
</html>