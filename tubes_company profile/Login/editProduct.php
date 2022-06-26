<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Product</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="icon.ico" rel="icon">
</head>

<body>
    <?php
    include "myconnection.php";
    $id = $_GET['id_product'];
    $query = mysqli_query($link,"SELECT * FROM product WHERE id_product = '$id'");
    while($row = mysqli_fetch_array($query)){
    ?>
    <div class="registration-form">
        <form action="edit_proses_product.php" enctype="multipart/form-data" method="post">
            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="id_product" readonly
                    value=<?php echo $row['id_product'] ?>>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="nama_product" value=<?php echo $row['nama_product'] ?>>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="lebar" value=<?php echo $row['lebar'] ?>>
            </div>
           
            <div class="form-group">
                <input type="text" class="form-control item" name="tinggi" value=<?php echo $row['tinggi'] ?>>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="bahan" value=<?php echo $row['bahan'] ?>>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="harga" value=<?php echo $row['harga'] ?>>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="minimal_order" value=<?php echo $row['minimal_order'] ?>>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="keterangan" value=<?php echo $row['keterangan'] ?>>
            </div>
            <div class="form-group">
                <img src="<?php echo $row["foto_produk"]; ?>" width="100" alt="foto_produk">
                <input type="file" name="foto_product">
            </div><br>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-block tambah-data"></input>
            </div>
        </form>
        <?php } ?>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js">
    </script>
    <script src="assets/js/script.js"></script>
</body>

</html>