<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Akun Staff</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="icon.ico" rel="icon">
</head>
<body>
    <?php
    include "myconnection.php";
    $id = $_GET['id_user'];
    $query = mysqli_query($link,"SELECT * FROM user WHERE id_user = '$id'");
    while($row = mysqli_fetch_array($query)){
    ?>
    <div class="registration-form">
        <form action="edit_proses_akunStaff.php" enctype="multipart/form-data" method="post">
            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="id_user" readonly
                    value=<?php echo $row['id_user'] ?>>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="nama" value=<?php echo $row['nama_pegawai'] ?>>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="username" value=<?php echo $row['username'] ?>>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" name="password" value=<?php echo $row['password'] ?>>
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

</html>