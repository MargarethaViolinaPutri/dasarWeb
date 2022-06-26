<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Pegawai</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="icon.ico" rel="icon">
</head>

<body>
    <?php
    include "myconnection.php";
    $id = $_GET['id_pegawai'];
    $query = mysqli_query($link,"SELECT * FROM pegawai WHERE id_pegawai = '$id'");
    while($row = mysqli_fetch_array($query)){
    ?>
    <div class="registration-form">
        <form action="edit_proses_pegawai.php" enctype="multipart/form-data" method="post">
            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="id_pegawai" readonly
                    value=<?php echo $row['id_pegawai'] ?>>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="nama" value=<?php echo $row['nama_pegawai'] ?>>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="jabatan" value=<?php echo $row['jabatan'] ?>>
            </div>
            <div class="form-group">
                Pilih Jenis Kelamin : <br>
                <input type="radio" name="jenis_kelamin" value="Laki-laki" checked> Laki-laki<br>
                <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="no_telepon" value=<?php echo $row['no_telepon'] ?>>
            </div>
            <div class="form-group">
                <input type="date" class="form-control item" name="tgl_lahir" value=<?php echo $row['tgl_lahir'] ?>>
            </div>
            <div class="form-group">
                <img src="<?php echo $row["foto"]; ?>" width="100" alt="foto">
                <input type="file" name="myfoto">
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