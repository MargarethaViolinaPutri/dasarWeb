<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="styleNon.css">
    <title>Nota Pembelian Non Member</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Nota Pembelian Non Member</h1>
            <br><br>
        </div>
        <?php
        $username = $_POST["nama"];
        $makanan = $_POST["makanan"];
        $porsimakanan = $_POST["jumlah1"];

        if ($makanan == "Soto Ayam") {
            $hargamakanan = 25000;
        } elseif ($makanan == "Aneka Penyetan") {
            $hargamakanan = 25000;
        } elseif ($makanan == "Papeda") {
            $hargamakanan = 20000;
        } elseif ($makanan == "Sate") {
            $hargamakanan = 30000;
        }elseif ($makanan == "Ayam Mentega") {
            $hargamakanan = 35000;
        } elseif ($makanan == "Gulai") {
            $hargamakanan = 40000;
        }elseif ($makanan == "Gudeg") {
            $hargamakanan = 30000;
        }elseif ($makanan == "Pecel") {
            $hargamakanan = 20000;
        }elseif ($makanan == "Rujak") {
            $hargamakanan = 25000;
        }elseif ($makanan == "Bakso") {
            $hargamakanan = 25000;
        }elseif ($makanan == "Pempek") {
            $hargamakanan = 35000;
        }elseif ($makanan == "Rendang Sapi") {
            $hargamakanan = 45000;
        }

        $total1 = $hargamakanan * $porsimakanan;

        $sebelum_diskon = $total1;

        $porsi=$porsimakanan;
        if ($porsi > 0 && $porsi <= 3) {
            $potongan_harga_makanan = 0;
            $total_harga = $total1 - $potongan_harga_makanan;
        } elseif ($porsi > 2 && $porsi<= 5) {
            $potongan_harga_makanan = $total1 * 0.05;
            $total_harga = $total1 - $potongan_harga_makanan;
        } elseif ($porsi > 5) {
            $potongan_harga_makanan = $hargamakanan * 0.05;
            $total_harga = $total1 - ($potongan_harga_makanan * $porsi);
        }
            echo "Nama Pembeli : ". $username. "<br>";
            echo "Status : Non Member ". "<br>"."<br>";
            echo "Makanan : ". $makanan. "<br>";
            echo "Harga Makanan : " . $hargamakanan . "<br>";
            echo "Jumlah porsi : ". $porsimakanan. "<br>";
            echo "Diskon Makanan : ". $potongan_harga_makanan . "<br>";
            echo "Jumlah pembayaran sebelum diskon : ". $sebelum_diskon. "<br>";
            echo "Jumlah pembayaran setelah diskon : ". $total_harga. "<br>";
        ?>
        <br><br>
        <a style="text-decoration: none" ; href="pemesananIndex.html"> <input type="button" name="kembali" value="KEMBALI PESAN" /> </a>
    </div>
</body>
</html>