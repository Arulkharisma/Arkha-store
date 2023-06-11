<?php
session_start();
include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT total_order FROM user_order WHERE id_order ='$id'");
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


    <?php
    if (isset($_POST['input'])) {
        $nama = $_POST['nama_pembayar'];
        $bank = $_POST['bank'];
        $jml = $_POST['jumlah_tf'];
        // $tgl = date('Y-m-d');
        $nmGambar = $_FILES['bukti_tf']['name'];
        $lokasi = $_FILES['bukti_tf']['tmp_name'];

        if ($jml != $cetak['total_order']) {
            echo "<script type='text/javascript'>swal('Gagal', 'Jumlah Yang Anda Bayarkan Tidak Sesuai', 'error');</script>";
        } elseif (!empty($lokasi)) //Jika temporari tidak kosong 
        {
            //memindah file gambar dari file temporari ke folder assets/img/bukti-transfer/
            move_uploaded_file($lokasi, "admin/img/bukti-transfer/" . $nmGambar);
            //Memasukkan data ke tabel tbl_produk
            $query = "INSERT INTO bukti_pembayaran (id_order,nama_pembayar,nama_bank,jumlah_pembayaran,bukti_transfer)
                                        VALUES('$id', '$nama', '$bank', '$jml','$nmGambar')";
            $hasil1 = mysqli_query($koneksi, $query);

            //ubah status orderan
            $query_update = "UPDATE user_order SET status='Sudah Dibayar' WHERE id_order='$id'";
            $hasil2 = mysqli_query($koneksi, $query_update);

            //Menampilkan pesan jika data berhasil di masukkan
            echo "<script type='text/javascript'>
                                            swal({
                                                title: 'Berhasil Konfirmasi',
                                                text: 'Produk Segera Kami Persiapkan Untuk Dikirim',
                                                icon: 'success',
                                                button: false
                                            });
                                            </script>";
            echo "<meta http-equiv='refresh' content='1;url=status-orderan.php'>";
        } else //jika temporari kosong
        {
            //Menampilkan pesan jika gambar belum dimasukkan
            echo "<p class='alert alert-danger' role='alert'>
                                        [Error] Upload Gambar Gagal.<br />
                                        </p>";
        }
    };
    ?>


    <section id="keranjang" class="pt-4 mb-3 pb-5" style="background-color: #ffffff;">
        <div class="container mt-5">

            <div class="row mt-5 ms-3 me-3 gap-5 pt-5 pb-5" style="justify-content: center;">
                <div class="col-lg-5 tampilan-form">
                    <p class="mb-4 fw-bold">Form Konfirmasi Pembayaran</p>
                    <p>mohon untuk melengkapi data di bawah ini untuk melakukan konfirasi</p>

                    <form method="post" action="" enctype="multipart/form-data">

                        <div class="mb-2">
                            <label for="nama_pembayar" class="form-label">Nama Pembayar</label>
                            <input type="text" placeholder="nama lengkap" class="form-control" id="nama_pembayar" name="nama_pembayar" autocomplete="off" required>
                        </div>

                        <div class="mb-2">
                            <label for="bank" class="form-label">Bank</label>
                            <select class="form-select" aria-label="Default select example" name="bank">
                                <option selected>Pilih Bank</option>
                                <option value="BNI">BNI</option>
                                <option value="BRI">BRI</option>
                                <option value="Sea Bank">Sea Bank</option>
                                <option value="BCA">BCA</option>
                                <option value="BSI">BSI</option>
                                <option value="Mandiri">Mandiri</option>
                            </select>
                        </div>

                        <div class="mb-2">
                            <label for="jumlah_tf" class="form-label">jumlah_Transfer</label>
                            <input type="text" class="form-control" id="jumlah_tf" name="jumlah_tf" autocomplete="off" required>
                        </div>

                        <div class="mb-2">
                            <label for="bukti_tf" class="form-label">bukti_Transfer</label>
                            <input type="file" class="form-control" id="bukti_tf" name="bukti_tf" autocomplete="off" required>
                        </div>

                        <button class="btn text-white me-3 mt-3" style="background-color: royalblue;" name="input">Kirim</button>

                    </form>

                </div>

                <div class="col-lg-5 tampilan-form" style="background-color: #ffeaea;">
                    <p class="mb-4">Total Tagihan :</p>
                    <h1><strong><?= "Rp " . number_format($cetak["total_order"], 0, '', '.') ?></strong></h1>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
    <?php
    require 'footer.php';
    ?>

    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>