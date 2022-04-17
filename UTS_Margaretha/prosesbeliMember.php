<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="styleMember.css">
    <title>Nota Pembelian Member</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Nota Pembelian Member</h1>
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
        }elseif ($makanan == "Tidak Membeli") {
            $hargamakanan = 0;
        }

        $total1 = $hargamakanan * $porsimakanan;

        $porsimakanan;
        if ($porsimakanan == 1) {
            $potongan_harga_makanan = $hargamakanan * 0.05;
            $total_harga = $total1 - $potongan_harga_makanan;
        } elseif ($porsimakanan > 1 && $porsimakanan <= 3) {
            $potongan_harga_makanan = $hargamakanan * 0.07;
            $total_harga = $total1 - ($potongan_harga_makanan * $porsimakanan);
        } elseif ($porsimakanan > 3) {
            $potongan_harga_makanan = $hargamakanan * 0.1;
            $total_harga = $total1 - ($potongan_harga_makanan * $porsimakanan);
        }

            echo "Nama Pembeli : ". $username. "<br>";
            echo "Status : Member ". "<br>"."<br>";
            echo "Makanan : ". $makanan. "<br>";
            echo "Harga Makanan : " . $hargamakanan . "<br>";
            echo "Jumlah porsi : ". $porsimakanan. "<br>";
            echo "Diskon Makanan : ". $potongan_harga_makanan . "<br>";
            echo "Jumlah pembayaran sebelum diskon : ". $total1. "<br>";
            echo "Jumlah pembayaran setelah diskon : ". $total_harga. "<br>";
        ?>
        <br><br>
        <a style="text-decoration: none" ; href="pemesananIndex.html"> <input type="button" name="kembali" value="KEMBALI PESAN" /> </a>
    </div>
</body>
</html>