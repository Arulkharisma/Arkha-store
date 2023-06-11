<?php
session_start();
include 'koneksi.php';
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
            width: max-content;
        }

        .isi-table-tengah {
            vertical-align: middle;
        }

        .tampilan-form {
            background-color: #ffffff;
            padding: 30px 40px;
            border-radius: 10px;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <?php require 'navbar.php'; ?>
    <!-- Akhir Navbar -->


    <section id="keranjang" class="pt-3 mb-3">
        <div class="container">

            <h3 class="border-b mt-5 pt-2">chekout</h3>

            <div class="row mt-3 gap-4" style="justify-content: space-between;">

                <div class="col-lg-5 tampilan-form">
                    <h3 class="fw-bold mb-2">Data Pengiriman</h3>
                    <p class="mb-4">Sebelum melanjutkan pembayaran, isilah data pengiriman dibawah ini dengan lengkap dan benar</p>

                    <form method="post" action="" enctype="multipart/form-data">

                        <input type="hidden" name="subtotal" id="subtotal_value">
                        <input type="hidden" name="ongkir" id="ongkir_value">
                        <div class="mb-2">
                            <label for="nama_penerima" class="form-label">Nama</label>
                            <input type="text" placeholder="nama lengkap" class="form-control" id="nama_penerima" name="nama_penerima" autocomplete="off" required>
                        </div>

                        <div class="mb-2">
                            <label for="no_hp" class="form-label">No Telp</label>
                            <input type="number" placeholder="contoh: 085xxxx" class="form-control" id="no_hp" name="no_hp" autocomplete="off" required>
                        </div>

                        <div class="mb-2">
                            <label for="provinsi" class="form-label">Provinsi</label>
                            <input type="text" class="form-control" id="provinsi" name="provinsi" autocomplete="off" required>
                        </div>

                        <div class="mb-2">
                            <label for="kota" class="form-label">Kota</label>
                            <input type="text" class="form-control" id="kota" name="kota" autocomplete="off" required>
                        </div>

                        <div class="mb-2">
                            <label for="kecamatan" class="form-label">Kecamatan</label>
                            <input type="text" class="form-control" id="kecamatan" name="kecamatan" autocomplete="off" required>
                        </div>

                        <div class="mb-2">
                            <label for="kode_pos" class="form-label">Kode Pos</label>
                            <input type="text" placeholder="contoh: 82347" class="form-control" id="kode_pos" name="kode_pos" autocomplete="off" required>
                        </div>

                        <div class="mb-2">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control" placeholder="Masukkan alamat lengkap" id="alamat" rows="3" name="alamat"></textarea>
                        </div>

                        <button class="btn text-white me-3 mt-3" style="background-color: royalblue;" name="pesan">Buat Pesanan</button>

                    </form>
                </div>

                <div class="col-lg-6 p-0 ">
                    <div class="tampilan-form">
                        <h3 class="fw-bold mb-2">Detail Produk</h3>
                        <p class="mb-4">Periksa kembali pesanan anda sebelum membayar</p>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Nama Produk</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Harga</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $subtotal = 0;
                                foreach ($_SESSION['cart'] as $id_produk => $jumlah) : ?>
                                    <?php
                                    $query = mysqli_query($koneksi, "SELECT * FROM data_produk WHERE id_produk = '$id_produk'");
                                    $cetak = mysqli_fetch_array($query);
                                    $subharga = $cetak["harga_produk"] * $jumlah;
                                    ?>

                                    <tr>
                                        <td>
                                            <?php
                                            if ($cetak['gambar_produk'] != null) : ?>
                                                <img src="./admin/img/fotoProduk/<?= $cetak["gambar_produk"]; ?>" width="50px" height="50px" alt="">
                                            <?php endif; ?>
                                        </td>
                                        <td class="isi-table-tengah">
                                            <?= $cetak["nama_produk"]; ?>
                                        </td>
                                        <td class="isi-table-tengah"><?= $jumlah; ?></td>
                                        <td class="isi-table-tengah"><?= "Rp " . number_format($subharga, 0, '', '.'); ?></td>
                                    </tr>
                                    <?php $subtotal += $subharga; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4 tampilan-form">
                        <h5 class="fw-bold">Rincian Pembayaran</h5>
                        <table class="table">
                            <?php
                            $biaya_pengiriman = 10000;
                            ?>
                            <tr>
                                <td>Subtotal Produk</td>
                                <td class="text-end"><?php echo "Rp " . number_format($subtotal, 0, '', '.'); ?></td>
                            </tr>
                            <tr>
                                <td>Biaya Pengiriman</td>
                                <td class="text-end"><?= "Rp " . number_format($biaya_pengiriman, 0, '', '.'); ?></td>
                            </tr>
                            <tr>
                                <td>Total Pembayaran</td>
                                <td class="text-end fw-bold"><?= "Rp " . number_format($subtotal + $biaya_pengiriman, 0, '', '.') ?></td>
                            </tr>
                        </table>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <?php

    if (isset($_POST["pesan"])) {

        $id_pelanggan = $_SESSION['login']['id_user'];
        $nama_penerima = htmlspecialchars($_POST["nama_penerima"]);
        $no_hp = htmlspecialchars($_POST["no_hp"]);
        $provinsi = htmlspecialchars($_POST["provinsi"]);
        $kota = htmlspecialchars($_POST["kota"]);
        $kecamatan = htmlspecialchars($_POST["kecamatan"]);
        $kode_pos = htmlspecialchars($_POST["kode_pos"]);
        $alamat = htmlspecialchars($_POST["alamat"]);
        $ongkir = $biaya_pengiriman;
        $total_order = $subtotal;
        $status = "Belum Dibayar";

        //simpan data ke user
        $query1 = "INSERT INTO user_order (id_user, nama_penerima, kota, provinsi, kecamatan, kode_pos, alamat, phone, ongkir, total_order, status) VALUES('$id_pelanggan','$nama_penerima', '$kota', '$provinsi','$kecamatan', '$kode_pos', '$alamat',$no_hp, '$ongkir', '$total_order', '$status')";
        $hasil = mysqli_query($koneksi, $query1);

        //mengambil id order
        $id_order = $koneksi->insert_id;

        //simpan id order
        foreach ($_SESSION['cart'] as $id_produk2 => $jumlah2) :
            //mendapatkan data produk berdasarkan id produk
            $ambil = "SELECT * FROM data_produk WHERE id_produk = '$id_produk2'";
            $hasil2 = mysqli_query($koneksi, $ambil);
            $data = mysqli_fetch_array($hasil2);

            $nama_produk = $data['nama_produk'];
            $harga = $data['harga_produk'];
            $subharga2 = $harga * $jumlah2;

            $query3 = "INSERT INTO detail_order (id_order,id_produk, nama_produk, harga_produk, jumlah, subharga) VALUES('$id_order','$id_produk2', '$nama_produk','$harga','$jumlah2','$subharga2')";
            $hasil3 = mysqli_query($koneksi, $query3);

            //update stok
            $query4 = "UPDATE data_produk SET stok_produk = stok_produk - $jumlah2 WHERE id_produk ='$id_produk2'";
            $hasil4 = mysqli_query($koneksi, $query4);
        endforeach;

        //mengosongkan keranjang
        unset($_SESSION['cart']);

        //redirect ke halamn nota pembayaran
        echo "<script type='text/javascript'>
                            swal({
                                title: 'Pemesanan Berhasil',
                                text: 'Barang akan segera kami kirimkan',
                                icon: 'success',
                                button: false
                            });
                            </script>";
        echo "<meta http-equiv='refresh' content='1; url=pembayaran.php?id=$id_order'>";
    }
    ?>

    <!-- footer -->
    <?php require 'footer.php'; ?>

    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>