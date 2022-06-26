<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) 
$link = mysqli_connect("localhost", "root", "", "demo");*/
 
// Check connection
/*if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM users";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>username</th>";
                echo "<th>password</th>";
                echo "<th>created_at</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
                echo "<td>" . $row['created_at'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data Pegawai</title>
    <link href="icon.ico" rel="icon">
</head>

<body>

    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <H2>DATA PEGAWAI WISE PACK SURABAYA </H2>
                    </div>
                    <div class="card-body">
                        <a href="insert_pegawai.html" class="btn btn-md btn-success" style="margin-bottom: 10px">ADD
                            DATA</a>
                        <a href="cetak_pegawai.php" class="btn btn-md btn-success" style="margin-bottom: 10px">CETAK
                            DATA</a>
                        <table class="table table-bordered" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Jabatan</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">No Telepon</th>
                                    <th scope="col">Tanggal Lahir</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                      include('myconnection.php');
                      $query = mysqli_query($link,"SELECT * FROM pegawai");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                                <tr>
                                    <td><?php echo $row['id_pegawai'] ?></td>
                                    <td><?php echo $row['nama_pegawai'] ?></td>
                                    <td><?php echo $row['jabatan'] ?></td>
                                    <td><?php echo $row['jenis_kelamin'] ?></td>
                                    <td><?php echo $row['no_telepon'] ?></td>
                                    <td><?php echo $row['tgl_lahir'] ?></td>
                                    <td> <img src="<?php echo $row['foto']; ?>" width="100" alt="foto"> </td>
                                    <td class="text-center">
                                        <a href="editPegawai.php?id_pegawai=<?php echo $row['id_pegawai'];?>"
                                            class="btn btn-sm btn-primary">EDIT</a>
                                        <a href="deletePegawai.php?id_pegawai=<?php echo $row['id_pegawai']; ?>"
                                            class="btn btn-sm btn-danger">DELETE</a>
                                    </td>
                                </tr>

                                <?php } ?>
                            </tbody>
                        </table>
                        <a href="indexLogin.html" class="btn btn-md btn-success" style="margin-bottom: 10px">Kembali</a>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
        </script>
</body>

</html>