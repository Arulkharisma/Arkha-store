<?php
session_start();
include 'koneksi.php';

$id = $_SESSION['login']['id_user'];
$second_query = mysqli_query($koneksi, "SELECT * FROM user_order WHERE id_user = '$id'");
$data = mysqli_fetch_assoc($second_query);
if (!$data) {
    echo "<script type='text/javascript'>
        swal({
            title: 'Orderan Kosong',
            text: 'Silahkan Melakukan Pembelian Dulu !',
            icon: 'warning',
            dangerMode: true,
        }).then(okay => {
            if (okay) {
            window.location.href ='index.php';
            };
        });
        </script>";
}

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
            color: #ffffff;
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

        .tombol-hover:hover {
            opacity: 0.9;
        }
    </style>

</head>

<body>
    <!-- Navbar -->
    <?php require 'navbar.php'; ?>
    <!-- Akhir Navbar -->


    <section id="keranjang" class="pt-3" style="height: 100vh; background-color: #ffffff; overflow: auto;">
        <div class="container">

            <div class="row pt-5 gap-4" style="justify-content: space-between;">
                <div class="col-lg-12">
                    <div class="tampilan-form spinner mt-5">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Total Harga</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>

                            <?php

                            $no = 1;
                            $query = mysqli_query($koneksi, "SELECT * FROM user_order where id_user = '$id'");

                            while ($cetak = mysqli_fetch_assoc($query)) {
                                $status = $cetak['status'];

                            ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td>
                                        <?php
                                        $id_order =  $cetak['id_order'];
                                        $query2 = "SELECT SUM(jumlah) AS jml FROM detail_order WHERE id_order='$id_order'";
                                        $result2 = mysqli_query($koneksi, $query2);
                                        $data2 = mysqli_fetch_assoc($result2);
                                        echo $data2['jml'];
                                        ?> Produk
                                    </td>
                                    <td>
                                        <?php
                                        if ($status == 'Belum Dibayar') {
                                            echo "<span class='pe-1 ps-1 text-white' style='background-color:#db3b3b; border-radius: 5px;'>" . $status . "</span>";
                                        } elseif ($status == 'Sudah Dibayar') {
                                            echo "<span class='pe-1 ps-1 text-white bg-success' style='border-radius: 5px;'>" . $status . "</span>";
                                        } elseif ($status == 'Menyiapkan Produk') {
                                            echo "<span class='pe-1 ps-1 text-white' style='background-color:gray; border-radius: 5px;'>" . $status . "</span>";
                                        } elseif ($status == 'Produk Dikirim') {
                                            echo "<span class='pe-1 ps-1 text-white' style='background-color:#edc84e; border-radius: 5px;'>" . $status . "</span> </br>";
                                        } elseif ($status == 'Produk Diterima') {
                                            echo "<span class='pe-1 ps-1 text-white bg-success' style='border-radius: 5px;'>" . $status . "</span>";
                                        }
                                        ?>
                                        </span>
                                    </td>
                                    <td><?= "Rp " . number_format($cetak["total_order"]) ?></td>
                                    <td>
                                        <?php if ($cetak['status'] == 'Belum Dibayar') { ?>
                                            <a href='konfirmasi-pembayaran.php?id=<?php echo $id_order; ?>' class='p-1 text-white tombol-hover' style='background-color: royalblue; border-radius: 5px;'>Konfirmasi Pembayaran</a>
                                        <?php } elseif ($cetak['status'] == 'Sudah Dibayar' || $cetak['status'] == 'Menyiapkan Produk') { ?>
                                            <a href="nota-order.php?id=<?php echo $id_order; ?>" class="p-1 text-white tombol-hover bg-secondary" style="border-radius: 5px;">Nota</a>
                                        <?php } elseif ($cetak['status'] == 'Produk Dikirim') { ?>
                                            <a href="nota-order.php?id=<?php echo $id_order; ?>" class="p-1 text-white tombol-hover bg-secondary" style="border-radius: 5px;">Nota</a>
                                            <button class=" btn btn-danger btn-sm p-1 text-white tombol-hover" style="border-radius: 5px; vertical-align: baseline;" onclick="validate();">Pesanan Diterima</button>

                                            <script>
                                                function validate() {
                                                    swal({
                                                        title: "Konfirmasi!",
                                                        text: "Apakah Anda Ingin Mengkonfirmasi Produk ?",
                                                        icon: "warning",
                                                        buttons: true,
                                                        dangerMode: true,
                                                    }).then((willDelete) => {
                                                        if (willDelete) {
                                                            swal({
                                                                title: "Konfirmasi!",
                                                                text: "Terimakasih Sudah Melakukan Konfirmasi",
                                                                icon: "success",
                                                            }).then(okay => {
                                                                if (okay) {
                                                                    window.location.href =
                                                                        "konfirmasi-barang.php?id=<?php echo $id_order; ?>";
                                                                };
                                                            });
                                                        } else {
                                                            swal("Lakukan Konfirmasi Jika Produk Sudah Diterima");
                                                        }
                                                    });
                                                }
                                            </script>
                                        <?php } elseif ($cetak['status'] == 'Produk Diterima') { ?>
                                            <a href="nota-order.php?id=<?php echo $id_order; ?>" class="btn btn-success btn-sm p-1" style="border-radius: 5px; vertical-align: baseline;">Nota</a>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <?php $no++; ?>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Awal Footer -->
    <?php require 'footer.php'; ?>
    <!-- Akhir footer -->


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