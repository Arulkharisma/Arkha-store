<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Screamous | By Arul Kharisma</title>
    <link rel="icon" href="img/logo.png">

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;600&display=swap" rel="stylesheet">



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
            border-bottom: 1px solid black;
            width: max-content;
        }

        .tampilan-form {
            background-color: #ffffff;
            padding: 30px 40px;
            border-radius: 10px;
        }
    </style>
</head>

<body>

    <?php
    include 'koneksi.php';

    $select = mysqli_query($koneksi, "SELECT * FROM kategori");

    if (isset($_POST["input"])) {

        $idkategori = htmlspecialchars($_POST["id_kategori"]);
        $nama_penerima = htmlspecialchars($_POST["nama_penerima"]);
        $no_hp = htmlspecialchars($_POST["no_hp"]);
        $provinsi = htmlspecialchars($_POST["provinsi"]);
        $kota = htmlspecialchars($_POST["kota"]);
        $kecamatan = htmlspecialchars($_POST["kecamatan"]);
        $kode_pos = htmlspecialchars($_POST["kode_pos"]);
        $alamat = ($_POST["alamat"]);


        $query = "INSERT INTO data_produk (id_produk,id_kategori,nama_produk,harga_produk,stok_produk,produk_terjual,gambar_produk, deskripsi_produk) VALUE('','$idkategori','$namaProduk', '$harga', '$stok','$produkTerjual', '$gambarProduk', '$deskripsi')";

        mysqli_query($koneksi, $query);
        if ($query > 0) {
            echo "
                <script>
                alert('Data Berhasil di tambahkan');
                </script>";
        } else {
            echo "
                <script>
                alert('Data Gagal di tambahkan');
                </script>";
        }
    }
    ?>

    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold fs-4" href="index.php"><img src="img/logo.png" alt="Logo" width="35px" height="30px" class="d-inline-block align-text-top me-1"><span style="color:#1887d1;">Arkha</span><span>&co</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse me-5" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link list-nav " aria-current="page" href="index.php">Home</a>
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
                        <a href="login.php" class="nav-link ps-3 pe-3 navbtn" style="border: 2px solid #1887d1; border-radius: 10px;">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="keranjang.php"><img src="img/basket.png" alt="Keranjang" width="28px" height="28px"></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->


    <section id="keranjang" class="pt-3 mb-3">
        <div class="container">

            <h3 class="border-b mt-5 pt-2">chekout</h3>

            <div class="row mt-3 gap-4" style="justify-content: space-between;">

                <div class="col-lg-5 tampilan-form">
                    <h3 class="fw-bold mb-2">Data Pengiriman</h3>
                    <p class="mb-4">Sebelum melanjutkan pembayaran, isilah data pengiriman dibawah ini dengan lengkap dan benar</p>

                    <form method="post" action="" enctype="multipart/form-data">


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

                        <button type="submit" class="btn text-white me-3 mt-3" style="background-color: #1887d1;" name="input">Buat Pesanan</button>

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
                                <tr>
                                    <td><img src="img/hoodie1.jpeg" width="50px" height="50px" alt=""></td>
                                    <td>Hoodie new crown black</td>
                                    <td>2</td>
                                    <td>Rp 300.000</td>
                                </tr>
                                <tr>
                                    <td><img src="img/celana3.jpeg" width="50px" height="50px" alt=""></td>
                                    <td> Unclejin Hoodie new crown black</td>
                                    <td>2</td>
                                    <td>Rp 400.000</td>
                                </tr>
                                <tr>
                                    <td><img src="img/thsirt4.jpeg" width="50px" height="50px" alt=""></td>
                                    <td>Hoodie new crown black</td>
                                    <td>1</td>
                                    <td>Rp 50.000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4 tampilan-form">
                        <h5 class="fw-bold">Rincian Pembayaran</h5>
                        <table class="table">
                            <tr>
                                <td>Subtotal Produk</td>
                                <td class="text-end">RP 300.000</td>
                            </tr>
                            <tr>
                                <td>Biaya Pengiriman</td>
                                <td class="text-end">RP 400.000</td>
                            </tr>
                            <tr>
                                <td>Total Pembayaran</td>
                                <td class="text-end fw-bold">Rp 700.000</td>
                            </tr>
                        </table>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>