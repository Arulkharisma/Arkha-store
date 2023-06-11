<?php

session_start();
include 'koneksi.php';

// if(isset($_SESSION["login"])){
//     header("Location: 'index.php'");
// }

if (isset($_POST["input"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $hasil = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");

    // Validasi password yang sudah di hash
    //  $row = mysqli_fetch_assoc($hasil);
    // if(mysqli_num_rows($hasil) === 1 && password_verify($password, $row["password"])){

    //cek Username dan password
    if (mysqli_num_rows($hasil)) {
        $akun = mysqli_fetch_assoc($hasil);
        $_SESSION["login"] = $akun;

        echo "<meta http-equiv='refresh' content='1;url=index.php'>";
        exit;
        // cek Password
    }
    $eror = true;
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arkha&Co | By Arul Kharisma</title>
    <link rel="icon" href="img/logo.png">

    <!-- link ke file css -->
    <link rel="stylesheet" href="css/style.css">

    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="jquery.min.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Jost:wght@300;400&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;1,100&display=swap');

        body {
            font-family: 'Jost', sans-serif;
        }

        .garisbawah {
            border-bottom: 2px solid black;
            max-width: max-content;
        }

        a {
            text-decoration: none;
            color: black;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        img {
            -webkit-transition: 0.6s ease;
            transition: 0.6s ease;

        }

        img:hover {
            -webkit-transform: scale(1.08);
            transform: scale(1.08);
        }

        .navbar-expand-lg .navbar-nav {
            gap: 15px;
        }

        a.nav-link.list-nav {
            color: black;
            font-family: 'Mulish', sans-serif;
            font-weight: 400;
            font-size: 17px;
            color: #000000;
            gap: 20px;
        }

        .tampilan-form {
            background-color: #ffffff;
            padding: 35px 60px;
            border-radius: 15px;
            justify-content: center;
            align-items: center;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            width: auto;
            /* width: 30%; */
        }

        .icon {
            color: black;
        }

        .list-nav:hover {
            border-bottom: 2px solid black;
            margin: 0;
        }
    </style>
</head>

<body>

    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg bg-light fixed-top ">
        <div class="container">
            <a class="navbar-brand fw-bold fs-4 text-poppins" href="index.php"><img src="img/logo.png" alt="Logo" width="35px" height="30px" class="d-inline-block align-text-top me-1"><span style="color:royalblue">Arkha</span><span style="color: hotpink;">&co</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse me-5" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link list-nav" aria-current="page" href="index.php">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link list-nav" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Kategori <i class="bi bi-chevron-down text-black"></i></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="T-shirt.php">T-Shirt</a></li>
                            <li><a class="dropdown-item" href="celana.php">Celana</a></li>
                            <li><a class="dropdown-item" href="hoodie.php">Hoodie/Jacket</a></li>
                            <li><a class="dropdown-item" href="aksesoris.php">Aksesoris</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link list-nav" href="alamat.php">Alamat</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link list-nav" href="#kontak">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a href="daftar.php" class="btn btn-outline-primary nav-link ps-3 pe-3">Daftar</a>
                    </li>
                    <li class="nav-item">
                        <form action="" method="post">
                            <button type="submit" class="nav-link" name="validasi_keranjang" style="border: none; background: none;"><img src="img/basket.png" alt="Keranjang" width="28px" height="28px"></button>
                        </form>

                        <?php
                        if (isset($_POST["validasi_keranjang"])) {
                            if (!isset($_SESSION["login"])) {
                                echo " 
                            <script type='text/javascript'>
                                swal('Anda belum login', 'login terlebih dahulu', 'info')
                                .then((value) => {
                                    document.location.href='login.php';
                                });
                            </script>
                            ";
                            } else {
                                echo "
                                <script>
                                document.location.href='keranjang.php';
                                </script>
                                ";
                            }
                        }
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- section -->
    <?php
    if (isset($eror)) :
        echo "<script type='text/javascript'>swal('Login Gagal!', 'Username Dan Password Anda Salah', 'info');</script>"; ?>
    <?php endif; ?>

    <section id="input" class="mt-3" style="height: 100vh;">
        <div class="container mt-5 pt-5">

            <div class="row justify-content-center">
                <div class=" col-5 tampilan-form mt-5">
                    <div class="logo fw-bold mb-4 fs-5" style="display: flex; justify-content: center; align-items: flex-end;">
                        <img src="img/logo.png" width="40px" height="40px" alt=""> Arkha&Co
                    </div>

                    <form method="post" action="" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control border-primary" id="username" name="username" autocomplete="off" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control border-primary" id="password" name="password" required>
                            <p class="text-primary" style="display: flex; justify-content: flex-end;">Lupa Password?</p>
                        </div>

                        <button type="submit" class="btn text-white flex col-4" style="background-color: royalblue;" name="input">Login</button>

                        <p class="mt-4">belum punya akun? silahkan <a href="daftar.php" style="color: royalblue;">Daftar</a></p>

                    </form>
                </div>
                <!-- <p class="fs-5" style="display: flex; align-items: flex-end;">Order Via Whatshapp <i class="bi bi-whatsapp"></i></p> -->
            </div>
        </div>
    </section>
    <!-- akhir section -->
    <?php
    require 'footer.php';
    ?>

    <!-- Akhir footer -->

    <!-- link script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


</body>

</html>