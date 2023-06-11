<?php
session_start();
include 'koneksi.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arkha&Co | By Arul Kharisma</title>
    <link rel="icon" href="img/logo.png">

    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- AOS animasi -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- JQUERY -->
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
            color: #000000;
        }

        .bi-printer::before {
            color: black;
            vertical-align: middle;
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

        .bi-trash::before {
            padding: 7px;
            background-color: #eb3d6b;
            border-radius: 4px;
            vertical-align: middle;
        }

        .icon {
            color: black;
        }

        .list-nav:hover {
            border-bottom: 2px solid black;
            margin: 0;
        }

        .bi-plus::before,
        .bi-dash::before {
            vertical-align: middle;
        }

        .navbtn:hover {
            background-color: royalblue;
        }

        .border-b {
            border-bottom: 1px solid black;
            width: max-content;
        }

        .tampilan-form {
            background-color: #ffffff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            /* width: fit-content;
            overflow: auto; */
        }

        .isi-table-tengah {
            vertical-align: middle;
        }

        .form-check-input:checked[type=checkbox],
        .form-check .form-check-input {
            width: 18px;
            height: 18px;
        }
    </style>

</head>

<body>
    <!-- Navbar -->
    <?php require 'navbar.php'; ?>
    <!-- Akhir Navbar -->


    <section id="nota" class="pt-3 pb-5" style="height: auto; background-color: #ffffff; overflow: auto;">
        <div class="container">

            <div class="row pt-5 gap-4 justify-content-center">

                <div class="col-lg-10">
                    <h3 class="fw-bold mb-4 text-center pt-3 text-secondary">Nota Pembayaran</h3>
                    <div class="tampilan-form spinner mt-5">
                        <div class="fw-bold fs-4 d-flex justify-content-between" style="border-bottom: 1px solid gray;">
                            <span>Arkha&Co STORE</span>
                            <span>ID Order : <?php echo $_GET['id']; ?></span>
                        </div>
                        <div class="d-flex justify-content-between pt-3">
                            <?php
                            $id = $_GET['id'];
                            $query = mysqli_query($koneksi, "SELECT * FROM user_order WHERE id_order = '$id'");
                            $cetak = mysqli_fetch_assoc($query);
                            // $tgl = $cetak['tgl_order'];
                            ?>
                            <div class="">
                                <span class="fw-bold">Penerima</span>
                                <p class="m-0"><?= $cetak['nama_penerima']; ?></p>
                                <p><?= $cetak['phone']; ?></p>
                            </div>
                            <div>
                                <span class="fw-bold">Alamat Pengirim</span>
                                <p class="" style="width: 140px;"><?= $cetak['alamat'] ?></p>
                            </div>
                        </div>
                        <div class="">
                            <span class="fw-bold">Tanggal Order</span>
                            <p class="mt-1" style="border-bottom: 1px solid gray;">Maret 23, 2023</p>
                        </div>
                        <div>
                            <p class=" fw-bold" style="border-bottom: 1px solid gray ;">Rincian Order</p>
                            <table class="table">
                                <?php

                                $id_order = $_GET['id'];
                                $order = mysqli_query($koneksi, "SELECT ongkir, total_order FROM user_order WHERE id_order = '$id_order'");
                                $data_order = mysqli_fetch_assoc($order);
                                $subtotal = 0;


                                $query_produk = mysqli_query($koneksi, "SELECT * FROM detail_order d JOIN data_produk p ON d.id_produk = p.id_produk WHERE id_order= '$id_order'");
                                while ($produk = mysqli_fetch_assoc($query_produk)) {
                                ?>
                                    <tr>
                                        <th>Gambar</th>
                                        <th>Nama Produk</th>
                                        <th>Harga</th>
                                        <th>Jumlah</th>
                                        <th>Sub Harga</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php if ($produk['gambar_produk'] != null) : ?>
                                                <img src="./admin/img/fotoProduk/<?php echo $produk['gambar_produk'] ?>" width="50px" height="50px">
                                            <?php endif; ?>
                                        </td>
                                        <td><?= $produk['nama_produk']; ?></td>
                                        <td>Rp <?= number_format($produk['harga_produk']); ?></td>
                                        <td> <?= $produk['jumlah']; ?> </td>
                                        <td>Rp <?= number_format($produk['subharga']); ?></td>
                                    </tr>
                                <?php
                                    $subtotal += $produk['subharga'];
                                }
                                ?>
                            </table>
                            <div class="d-flex justify-content-end gap-3">
                                <div>
                                    <p>Subtotal</p>
                                    <p>Ongkir</p>
                                    <p>Total</p>
                                </div>
                                <div>
                                    <?php
                                    $ongkir = 10000;
                                    ?>
                                    <p>Rp <?= number_format($subtotal); ?></p>
                                    <p><?= number_format($ongkir); ?></p>
                                    <p><?= number_format($data_order['total_order']); ?></p>
                                </div>
                            </div>

                            <div class="d-flex justify-content-end d-print-none">
                                <a href="javascript:window.print()" style="background-color: #5cd847; padding: 4px 10px ; border-radius: 5px; border: 2px solid black;">Print <i class="bi bi-printer"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- link script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- JS AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- Gsap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
    <!-- text gsap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/TextPlugin.min.js"></script>

    <script>
        gsap.registerPlugin(TextPlugin);
        gsap.to(".tes", {
            duration: 3,
            delay: 1,
            text: "Hallo, Selamat Datang Di Store Kami"
        })
        gsap.from('.display-4', {
            duration: 1,
            XPathExpression: -50,
            opacity: 0,
            delay: 0.5,
            ease: 'back'
        });
    </script>
</body>

</html>