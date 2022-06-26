<?php
session_start();
include 'myconnection.php';
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$_SESSION['username'] = $username;
	$password = $_POST['password'];
	$query = "SELECT * FROM user WHERE username ='$username'";
	$check = $link->query($query);

if (mysqli_num_rows($check)==1) {
    $hasil = $check->fetch_array();
    if($hasil['password']==$password){
        $message = 'SELAMAT BERHASIL LOGIN';
        
        echo "<SCRIPT>
        alert('$message')
        window.location.replace('indexLogin.html');
        </SCRIPT>";

        $_SESSION["username"]=$username;

        mysqli_close($link);
    } 
    $message = 'MAAF PASSWORD SALAH';                   

        echo "<SCRIPT>
        alert('$message')
        window.location.replace('login.php');
        </SCRIPT>";

        mysqli_close($link);
}
$message = 'User Tidak Ditemukan';                  

    echo "<SCRIPT>
        alert('$message')
        window.location.replace('login.php');
        </SCRIPT>";
}
    mysqli_close($link);
?>

<!doctype html>
<html lang="en">

<head>
    <title>Login Staff Wise Pack</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">
    <link href="icon.ico" rel="icon">
</head>

<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Login Staff Wise Pack Surabaya</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">Masukkan username dan password yang sesuai</h3>
                        <form action="#" class="signin-form" method="POST">
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <input id="password-field" name="password" type="password" class="form-control"
                                    placeholder="Password" required>
                                <span toggle="#password-field"
                                    class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="submit"
                                    class="form-control btn btn-primary submit px-3">Continue</button>
                            </div>
                        </form>
                        <br><br>
                        <h3 class="mb-4 text-center">Only Wise Pack Staff Can Login</h3>
                    </div>
                </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>