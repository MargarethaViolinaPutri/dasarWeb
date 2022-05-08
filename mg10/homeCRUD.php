<!DOCTYPE html>
<html>
<head><title>Home</title>
<link rel="stylesheet" type="text/css" href="style.css"/></head>
<body>
    <h1>DATA MAHASISWA</h1>
    <a style="text-decoration: none"; href="insertForm.html">
    <input type="submit" value="Tambah Data" /></a>
        <table>
            <tr>
                <th> ID </th>
                <th> Nama </th>
                <th> Alamat </th>
                <th> Foto </th>
                <th> Aksi </th>
            </tr>
            <?php
            include "myconnection.php";
            $query = "SELECT * FROM student";
            $result = mysqli_query($connect,$query);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td> <?php echo $row["id"]; ?> </td>
                <td> <?php echo $row["name"]; ?> </td>
                <td> <?php echo $row["address"]; ?> </td>
                <td> <img src="Uploads/<?php echo $row["image"]; ?>" width="100" alt="image"> </td>
                <td>
                    <a href="editForm.php?id=<?php echo $row["id"];?>">
                    <button>Edit</button></a> 
                    <a href="delete.php?id=<?php echo $row["id"];?>">
                    <button>Hapus</button></a>
                </td>
            </tr>
            <?php
                }
            }
            else{
                echo "0 result";
            }
            ?>
        </table>
</body>
</html>