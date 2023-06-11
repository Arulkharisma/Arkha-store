<?php
session_start();
include 'koneksi.php';
$id=$_GET['id'];
$query = mysqli_query($koneksi, "SELECT subharga FROM detail_order WHERE id_order ='$id'");
$cetak = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arkha&Co | By Arul Kharisma</title>
    <link rel="icon" href="img/logo.png">

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;600&display=swap" rel="stylesheet">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="jquery.min.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Jost:wght@300;400&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;1,100&display=swap');

        body {
            font-family: 'Jost', sans-serif;
            background-color: #f6f5f5;
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

        i {
            color: rgb(255, 189, 58);
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

        .icon {
            color: black;
        }

        .list-nav:hover {
            border-bottom: 2px solid black;
            margin: 0;
        }

        .navbtn:hover {
            background-color: #1887d1;
        }

        .border-b {
            border-bottom: 2px solid royalblue;
            width: 30px;
        }

        .isi-table-tengah {
            vertical-align: middle;
        }

        .tampilan-form {
            background-color: #ffffff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <?php require 'navbar.php'; ?>
    <!-- Akhir Navbar -->


    <section id="keranjang" class="pt-4 mb-3 pb-5" style="background-color: #ffffff;">
        <div class="container mt-5">

            <div class="row mt-5 ms-3 me-3 gap-5 pt-5 pb-5" style="justify-content: center;">
                <div class="col-lg-5 tampilan-form">
                    <p class="mb-4">silahkan melakukan pembayaran ke nomor rekening di bawah ini :</p>

                    <ul>
                        <li><strong>MANDIRI</strong> 245789136461</li>
                        <li><strong>BRI</strong> 215487956631</li>
                        <li><Strong>BCA</Strong> 14756446974</li>
                    </ul>
                    <p>Semua rekening atas nama Arkha&co store, selain itu palsu</p>
                    <p>Mohon melakukan konfirmasi di menu <a href="status-orderan.php" style="color: royalblue;">orderan </a>setelah melakukan pembayaran</p>

                </div>

                <div class="col-lg-5 tampilan-form">
                    <p class="mb-4">Total Pembayaran :</p>
                    <h1><strong><?=  "Rp " . number_format($cetak["subharga"], 0, '', '.') ?></strong></h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php
    require 'footer.php';
    ?>

    <!-- Akhir footer -->
    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>