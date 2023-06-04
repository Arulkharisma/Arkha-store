<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Screamous | By Arul Kharisma</title>
    <link rel="icon" href="img/logo.png">
    <!-- link ke file css -->
    <link rel="stylesheet" href="css/style.css">



    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- AOS animasi -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="jquery.min.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Jost:wght@300;400&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;1,100&display=swap');

        body {
            font-family: 'Jost', sans-serif;
        }

        a {
            text-decoration: none;
            color: black;
        }

        .tombol:hover {
            background-color: #fff;
        }

        .bi-star-fill::before,
        .bi-cart-plus::before {
            display: contents;
        }

        .garisbawah {
            border-bottom: 2px solid black;
            max-width: max-content;
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

    <nav class="navbar navbar-expand-lg bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold fs-4" href="index.php"><img src="img/logo.png" alt="Logo" width="35px" height="30px" class="d-inline-block align-text-top me-1"><span style="color:#1887d1;">Arkha</span><span>&co</span></a>
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
                        <button type="button" class="btn btn-outline-primary nav-link ps-3 pe-3">Login</button>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="keranjang.php"><img src="img/basket.png" alt="Keranjang" width="28px" height="28px"></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <?php
    include 'koneksi.php';
    $id_produk = $_GET["id_produk"];
    $hasil = mysqli_query($koneksi, "SELECT * FROM data_produk WHERE id_produk ='$id_produk'");
    $cetak = mysqli_fetch_assoc($hasil);

    ?>

    <section id="detail" class="pt-2 mt-1 pb-5 mb-5">
        <div class="container">
            <div class="row mt-5 mb-5 pb-5">
                <div class="col-lg-5 mt-3 justify-content-center">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./admin/img/fotoProduk/<?= $cetak["gambar_produk"]; ?>" class="d-block img-fluid" alt="slide1" width="550px" height="550px">
                            </div>

                            <div class="carousel-item">
                                <img src="img/sizehoodie.jpeg" class="d-block img-fluid" alt="slide2" width="550px" height="550px">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <p class="mt-3">Share : <a href="https://www.instagram.com/arulkharisma/" class=" text-black me-1 fs-5 "><i class="bi bi-instagram"></i></a>
                        <a href="https://www.facebook.com/Arul/" class=" text-black me-1 fs-5 "><i class="bi bi-facebook"></i></a>
                        <a href="https://www.twitter.com/arulkharisma/" class="text-black fs-5 me-1 "><i class="bi bi-twitter"></i></a>
                        <a href="https://wa.me/087846079991" class="text-black fs-5 me-1 "><i class="bi bi-whatsapp"></i></a>
                    </p>

                </div>
                <!-- detail Produk -->


                <div class="col-lg-7 mt-4">
                    <div class="mt-2">
                        <span class="fs-4"><?= $cetak["nama_produk"]; ?></span>
                    </div>

                    <div class="mt-2" style="display: flex; flex-direction: row;">
                        <span class="fs-6 pe-2 me-2" style="border-right: 1px solid #1887d1;">4.9
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </span>
                        <span class="text-secondary pe-2" style="border-right: 1px solid #1887d1;">10 Penilaian</span>
                        <span class="text-secondary ps-1"><?= $cetak["produk_terjual"] ?> Terjual</span>
                    </div>

                    <div class="mt-2 pt-2 ps-3 pb-2 pe-3 bg-light flex-row justify-content-center align-items-center">
                        <span class="text-decoration-line-through text-secondary fw-bold"><?= "Rp " . number_format($cetak["harga_normal"], 0, '', '.') ?></span>
                        <span class="fw-bold fs-3" style="color: #1887d1;">
                            <?= "Rp " . number_format($cetak["harga_produk"], 0, '', '.') ?>
                        </span>
                        <span class="ms-3" style="background-color: #1887d1; color: white; padding: 0px 5px 0px 5px; border-radius: 4px; width: max-content; position: relative;">
                            40% OFF
                        </span>
                    </div>

                    <div class="mt-3">
                        <span class="text-secondary">Protection</span>
                        <span class="ms-4">Proteksi Kerusakan+</span>
                        <span style="background-color: #1887d1; border-radius: 0.5rem; border-bottom-left-radius: 0; color: #fff; font-size: .625rem; font-weight: 500; height: 2rem; line-height: 1rem; margin-left: 0.3140rem; padding: 0 0.3140rem;">
                            new
                        </span>
                        <a href="#">Learn More</a>
                    </div>

                    <div class="mt-3">
                        <span class="text-secondary me-4">Pengiriman</span><i class="bi bi-truck me-2 fs-4"></i><span class="text-secondary">Pengiriman Ke</span><span class="ms-4 fw-bold">Kota Jakarta Pusat</span> <img src="img/keyboard-arrow-down.png" width="28px" height="28px" alt="">
                    </div>

                    <!-- pilihan ukuran -->
                    <form action="" method="post">
                        <div class="mt-3">
                            <span class="text-secondary">Ukuran</span>
                            <input type="radio" class="btn-check" name="options-outlined" id="S-outlined" autocomplete="off" checked>
                            <label class="btn btn-outline-primary ms-5 pt-1 pb-1 pe-4 ps-4" for="S-outlined">S</label>

                            <input type="radio" class="btn-check" name="options-outlined" id="M-outlined" autocomplete="off">
                            <label class="btn btn-outline-primary ms-1 pt-1 pb-1 pe-4 ps-4" for="M-outlined">M</label>

                            <input type="radio" class="btn-check" name="options-outlined" id="L-outlined" autocomplete="off">
                            <label class="btn btn-outline-primary ms-1 pt-1 pb-1 pe-4 ps-4" for="L-outlined">L</label>

                            <input type="radio" class="btn-check" name="options-outlined" id="XL-outlined" autocomplete="off">
                            <label class="btn btn-outline-primary ms-1 pt-1 pb-1 pe-4 ps-4" for="XL-outlined">XL</label>
                        </div>

                        <div class="mt-5 spinner">
                            <table>
                                <tr>
                                    <td>
                                        <span class="me-2 text-secondary">Kuantitas</span>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-outline-primary ms-4 p-2 fw-bold" id="minus-btn" style="border-radius: 5px 0px 0px 5px ;"><i class="bi bi-dash"></i></button>
                                    </td>
                                    <td>
                                        <input type="text" name="stok" id="qty_input" class="form-control input-number text-center m-0 p-2 border-start-0 border-end-0" value="1" min="1" max="<?php echo $cetak['stok_produk']; ?>" style="width: 70px; border-radius: 0; border-color: #0d6efd;">
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-outline-primary btn-number p-2" id="plus-btn" style="border-radius: 0px 5px 5px 0px ;"><i class=" bi bi-plus"></i></button>
                                    </td>
                                    <td>
                                        <span class="text-secondary ms-3">Tersisa <?= $cetak["stok_produk"] ?> Produk</span>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <script>
                            $(function() {
                                $('.spinner #plus-btn').on('click', function() {
                                    var btn = $(this);
                                    var input = btn.closest('.spinner').find('input');
                                    if (input.attr('max') == undefined || parseInt(input
                                            .val()) <
                                        parseInt(input.attr('max'))) {
                                        input.val(parseInt(input.val(), 10) + 1);
                                    } else {
                                        btn.next("disabled", true);
                                    }
                                });
                                $('.spinner #minus-btn').on('click',
                                    function() {
                                        var btn = $(this);
                                        var input = btn.closest('.spinner').find('input');
                                        if (input.attr('min') == undefined || parseInt(input
                                                .val()) >
                                            parseInt(input.attr('min'))) {
                                            input.val(parseInt(input.val(), 10) - 1);
                                        } else {
                                            btn.prev("disabled", true);
                                        }
                                    });
                            })
                        </script>

                        <div class="mt-5 col-lg-12">
                            <button type="submit" class="p-3" name="keranjang" style="border: 1px solid #1887d1; background-color: #a5d3f2; cursor: pointer; border-radius: 4px;"><i class=" bi bi-cart-plus "></i> Masukkan Keranjang</button>
                            <a href="chekout.php"><span class="ms-3 pt-3 pb-3 ps-4 pe-4 text-white tombol" style="border: 1px solid #1887d1; background-color: #1887d1; cursor: pointer; border-radius: 5px;"> Beli Sekarang</span></a>
                        </div>
                    </form>

                    <?php
                    if (isset($_POST['keranjang'])) {
                        $jumlah = $_POST['stok'];

                        if ($jumlah >= 0) {
                    ?>
                            <script type='text/javascript'>
                                swal("Di masukkan ke keranjang", "Klik Ok Untuk Melanjutkan", "success");
                            </script>
                    <?php
                        }
                    }
                    ?>

                    <div class="pt-3" style="border-top: 1px solid rgb(205, 205, 205); margin-top: 5rem;">
                        <span><i class="bi bi-shield-fill-check fs-5"></i> Garansi Arkha&Co</span><span class="text-secondary ms-4">Dapatkan barang pesananmu atau uang kembali</span>
                    </div>

                </div>
            </div>

            <!-- spesifikasi produk -->
            <div class="row mt-4 pb-3">
                <span class="p-1 bg-light">
                    <h4>Spesifikasi Produk</h4>
                </span>
                <p class="text-secondary mt-3">Merek <span class="text-primary" style="margin-left: 78px;">Arkha&CO</span></p>
                <p class="text-secondary ">Gaya <span class="text-black" style="margin-left: 86px;">Basic, Korean, Street Style</span></p>
                <p class="text-secondary">Negara Asal <span class="text-black" style="margin-left: 36px;">Indonesia</span></p>
                <p class="text-secondary">Bahan <span class="text-black" style="margin-left: 78px;">Katun</span></p>
                <p class="text-secondary">Dikirim dari <span class="text-black" style="margin-left: 40px;">Kota YOGYAKARTA</span></p>

            </div>
            <!-- deskripsi produk -->
            <div class="row mt-3 mb-3">
                <span class="p-1 bg-light">
                    <h4>Deskripsi Produk</h4>
                </span>
                <div>
                    <?php echo $cetak["deskripsi_produk"]; ?>
                </div>
                <!-- <p class="mb-0 mt-2">Regular fit Hoodie With Rubber screnprinted</p>
                <p>Material : Cotton Flece</p>
                <p>PENTING :</p>
                <p class="mb-0">-Konfirmasi terlebih dahulu sebelum melakukan transaksi melalui chat terutama untuk size dan jenis artikel yang tersedia.</p>
                <p class="mb-0">-pastikan telah mengisi alamat dengan benar dan lengkap untuk memudahkan kurir dalam mengirim barang.</p>
                <p class="mb-0">-Warna produk yang sebenarnya mungkin tidak 100% sama seperti yang terlihat pada gambar, hal ini di sebabkan faktor pencahayaan saat pengambilan gambar serta kualitas layar
                    gadget yang digunakan untuk melihat gambar
                </p>
                <p class="mb-0">-Untuk membeli beberapa produk/warna sekaligus dalam 1 pesanan, silakan klik masukkan ke keranjang untuk setiap
                    produk/warna yang diinginkan, kami tidak menerima permintaan warna lewat pesan</p>
                <p class="mb-0">- Pesanan yang telah dibuat tidak dapat diUBAH kembali</p>
                <p class="mb-0">- Jika barang yang kamu terima tidak sesuai pesanan maka silakan ajukan pengembalian barang & dana (jangan klik pesanan
                    diterima)</p>
                <p class="mb-0">- Siapkan Video Unboxing sebagai antisipasi/bukti apabila barang yang diterima tidak sesuai/cacat</p>
                <p class="mb-0">- Jika kamu membeli maka kamu telah setuju dengan kebijakan UNCLEJIN STORE.</p> -->
            </div>
        </div>
    </section>

    <!-- Akhir Home -->

    <footer id="kontak" class="pb-3 bg-light">
        <div class="container" style="border-bottom: 1px solid grey;">
            <div class="row offset-md-1">

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-3 mb-5 mt-3">
                    <p class="fw-bold garisbawah">Informasi</p>
                    <li class="list-group-item">Konfirmasi Pembayaran</li>
                    <li class="list-group-item ">Syarat Ketentuan Retur</li>
                    <li class="list-group-item ">Pengiriman</li>
                    <li class="list-group-item">bagaimana cara order</li>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-3 mb-5 mt-3">
                    <p class="fw-bold garisbawah">Social Media</p>
                    <li class="list-group-item"><a href="https://www.instagram.com/arulkharisma/"><i class="bi bi-instagram me-2 icon"></i> Instagram</a></li>
                    <li class="list-group-item"><a href="https://www.facebook.com/Arul/"><i class="bi bi-facebook me-2 icon"></i> Facebook</a></li>
                    <li class="list-group-item"><a href="https://www.twitter.com/arulkharisma/"><i class="bi bi-twitter me-2 icon"></i> Twitter</a></li>
                    <li class="list-group-item"><a href="https://wa.me/087846079991"><i class="bi bi-whatsapp me-2 icon"></i> Whatsapp</a></li>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-3 mb-5 mt-3">
                    <p class="fw-bold garisbawah">Kontak</p>
                    <li class="list-group-item"><i class="bi bi-telephone-fill me-2 icon"></i> 087846079991</a></li>
                    <li class="list-group-item"><i class="bi bi-envelope me-2 icon"></i> arulkharisma01@gmail.com</a></li>
                    <li class="list-group-item"><i class="bi bi-geo-alt-fill me-2 icon"></i> Jl.raya Lembar Mataram</li>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-3 mb-5 mt-3">
                    <p class="fw-bold garisbawah">Pembayaran</p>
                    <li class="list-group-item mb-1"><img src="img/seabank.png" alt="seabank"> <img src="img/bca.png" alt="bca"> <img src="img/bni.png" alt="bni"></li>
                    <li class="list-group-item mb-1"><img src="img/bri.png" alt="bri"> <img src="img/cimniaga.png" alt="cimbniaga"> <img src="img/visa.png" alt="visa"></li>
                    <li class="list-group-item mb-4 mb-1"><img src="img/indomaret.png" alt="indomaret"> <img src="img/alfamart.png" alt="alfamart"></li>

                    <p class="fw-bold garisbawah">Pengiriman</p>
                    <li class="list-group-item mb-1"><img src="img/jne.png" alt="jne"> <img src="img/jnt.png" alt=" jnt">
                        <img src="img/jntcargo.png" alt="">
                    </li>
                    <li class="list-group-item mb-1"><img src="img/anteraja.png" alt="anteraja"> <img src="img/indopaket.png" alt="indopaker"> <img src="img/ninjaexpres.png" alt="ninjaexpres"></li>
                    <li class="list-group-item mb-1"><img src="img/idexpres.png" alt="idexpres"></li>
                </div>
            </div>
        </div>

        </div>
        <p class="text-center pt-3 mt-3">&copy; 2022 . <span class="text-primary fw-bold">Arkha</span><span class="fw-bold" style="color: black;">&co</span></p>
    </footer>

    <!-- Script Bootstrap -->
    <!-- link script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
<html>