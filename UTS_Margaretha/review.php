<?php
date_default_timezone_set("Asia/Jakarta");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Review Pelanggan</title>
	<link rel="stylesheet" type="text/css" href="styleReview.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
    <header><h2>Isikan Review Anda Agar Resto Kami Semakin Maju dan Memuaskan Kedepannya</h2>
    <br>
<form method="post" action="salamReview.html">
Nama : <input type="text" name="Nama"/><br /><br>
Alamat : <input type="text" name="Alamat" /><br /><br>
Email : <input type="text" name="Email" /><br /><br>
Keanggotaan Resto : <input type="radio" name="Keanggotaan" value="Keanggotaan"/> 
Member <input type="radio" name="Keanggotaan" value="member" />  Non Member <br>
<br />

Jenis Kelamin : <input type="radio" name="Jenis Kelamin" value="laki-laki" /> 
Laki - Laki <input type="radio" name="Jenis Kelamin" value="perempuan" />  Perempuan <br>
<br />
 
Menu Makanan :
 <select name="Menu Makanan" >
     <option value="Menu Makanan"> Soto Ayam Lamongan</option>
     <option value="Menu Makanan">Aneka Penyetan</option>
     <option value="Menu Makanan">Papeda</option>
     <option value="Menu Makanan">Sate Ayam</option>
     <option value="Menu Makanan">Ayam Mentega</option>
     <option value="Menu Makanan">Gulai Kambing</option>
     <option value="Menu Makanan">Gudeg Jogja</option>
     <option value="Menu Makanan">Pecel Madiun</option>
     <option value="Menu Makanan">Rujak Cingur</option>
     <option value="Menu Makanan">Bakso</option>
     <option value="Menu Makanan">Pempek Palembang</option>
     <option value="Menu Makanan" selected>Rendang Sapi</option>
 </select>
<br /><br>
 
Komentar Anda :
<textarea name="Komentar" rows="5" cols="45">
Silahkan katakan isi hati anda disini :
</textarea>
<br />
<br>
 <button type="submit" name="Submit" value=<?php echo date("h:i:sa"); ?> >Submit Review</button>
 
</form>
<br><br>
	<div class="rating">
		<input type="radio" name="star" id="star1"><label for="star1"></label>
		<input type="radio" name="star" id="star2"><label for="star2"></label>
		<input type="radio" name="star" id="star3"><label for="star3"></label>
		<input type="radio" name="star" id="star4"><label for="star4"></label>
		<input type="radio" name="star" id="star5"><label for="star5"></label>
	</div>
</body>
</html>