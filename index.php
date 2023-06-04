<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Screamous | By Arul Kharisma</title>
    <link rel="icon" href="img/logo.png">
    <!-- link ke file css -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->

    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- AOS animasi -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;600&display=swap" rel="stylesheet">

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

        .bi-arrow-right::before{
            vertical-align: middle;
        }
        
        .icon {
            color: black;
        }

        .list-nav:hover {
            border-bottom: 2px solid black;
            margin: 0;
        }

        .list-nav-active {
            border-bottom: 2px solid black;
        }

        .background2 {
            height: 100vh;
            width: 100%;
            background: rgba(247, 250, 255, 0.9);
            backdrop-filter: blur(125px);
        }

        .navbtn:hover {
            background-color: royalblue;
            color: #000000;
        }
    </style>
</head>

<body>

    <?php include 'koneksi.php'; ?>


    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg fixed-top bg-transparent">
        <div class="container">
            <a class="navbar-brand fw-bold fs-4" href="#home"><img src="img/logo.png" alt="Logo" width="35px" height="30px" class="d-inline-block align-text-top me-1"><span style="color:royalblue">Arkha</span><span>&co</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse me-5" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link list-nav list-nav-active" aria-current="page" href="#home">Home</a>
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
                        <a href="login.php" class="nav-link ps-3 pe-3 navbtn" style="border: 2px solid royalblue; border-radius: 10px;">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="keranjang.php"><img src="img/basket.png" alt="Keranjang" width="28px" height="28px"></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Home -->

    <section id="home" style="background: linear-gradient(90deg, #0500FF 0.52%, #F8FB76 35.41%, #4EFF75 63.63%, #00FFD1 99.03%); backdrop-filter: blur(125px);">
        <div class="background2">


            <div class="container">
                <div class="row" style="padding-top: 50px;">
                    <div class="col-lg-6 mt-4 justify-content-center">
                        <p class="fw-bold pt-5 mt-5 fst-italic tes"> </p>
                        <h1 class="fw-bold" data-aos="fade-right" data-aos-duration="1000">Temukan <span style="color: royalblue;">Outfit</span><br><span style="color: royalblue;">Impian </span>Anda<br>Disini</h1>
                        <p class="mt-4 fst-italic" data-aos="fade-right" data-aos-duration="500" data-aos-delay="500">Dapatkan Harga Spesial Hanya Disini!!</p>
                        <a href="#produkTerbaru" class="av-link p-2 navbtn" data-aos="fade-rigt" data-aos-duration="500" data-aos-delay="1200" style="border: 2px solid royalblue; border-radius: 10px;">Pesan Sekarang <i class=" bi bi-arrow-right" style="color: black;"></i></button></a>
                    </div>

                    <div class="col-lg-6 text-center justify-content-center">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                            <div class="carousel-indicators mt-5" style="justify-content: center;">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active text-bg-dark mt-5" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" class="text-bg-dark mt-5"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3" class="text-bg-dark mt-5"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4" class="text-bg-dark mt-5"></button>
                            </div>
                            <div class="carousel-inner mt-4 pt-2 zoom-efect" style="justify-content: center;">
                                <div class="carousel-item active justify-content-center kotak" data-aos="zoom-in-down" data-aos-duration="1000">
                                    <img src="img/thumnail 4.jpg" class=" d-block mt-3 img-fluid rounded float-left" width="100%" height="580px" alt="sumber instagram Unclejin">
                                </div>
                                <div class="carousel-item justify-content-center kotak">
                                    <img src="img/thumbnail 2.jpg" class=" d-block mt-3 img-fluid rounded float-left" width="630px" height="580px" alt="...">
                                </div>
                                <div class="carousel-item justify-content-center kotak">
                                    <img src="img/thumbnail 3.jpg" class=" d-block mt-3 img-fluid rounded float-left" width="630px" height="580px" alt="...">
                                </div>
                                <div class="carousel-item justify-content-center kotak">
                                    <img src="img/thumnail 1.jpg" class=" d-block mt-3 img-fluid rounded float-left" width="630px" height="580px" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden me-5">Previous</span>
                            </button>
                            <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Akhir Home -->

    <!-- produk terbaru -->

    <section id="produkTerbaru" class="pt-lg-3 mb-5 mt-3">
        <div class="container">
            <div class="row mt-lg-5 text-center justify-content-center">
                <div class="col">
                    <h2 class="mt-3" style="border-bottom: 2px solid black; width: fit-content;">Artikel Terbaru</h2>
                </div>
            </div>
            <div class="row mt-4 ">

                <?php

                $query = "SELECT * FROM data_produk ORDER BY id_produk DESC LIMIT 10";
                $hasil = mysqli_query($koneksi, $query);

                while ($produk = mysqli_fetch_assoc($hasil)) :
                ?>
                    <div class="col-md-3 mb-4">
                        <div class="card " data-aos="flip-left" data-aos-duration="500">
                            <a href="detail.php?id_produk=<?= $produk["id_produk"]; ?>"><img src="./admin/img/fotoProduk/<?= $produk["gambar_produk"]; ?>" class="card-img-top img-thumbnail" alt="produk7"></a>
                            <div class="card-body">
                                <a href="detail.php?id_produk=<?= $produk["id_produk"]; ?>">
                                    <h5 class="card-title"><?= $produk["nama_produk"] ?></h5>
                                </a>

                                <p class="card-text"><span class="text-decoration-line-through text-secondary"><?= "Rp " . number_format($produk["harga_normal"], 0, '', '.') ?></span><span style="color: #1887d1;"> <?= "Rp " . number_format($produk["harga_produk"], 0, '', '.') ?> </span></p>
                                <div style="display: flex; justify-content: space-between;">
                                    <div><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                                    <span class="fs-6"><?= $produk["produk_terjual"] ?> Terjual</span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile ?>
            </div>
        </div>
    </section>

    <!-- Unggulan -->
    <section id="unggulan mb-4">
        <div class="container">
            <div class="row">
                <div class="col text-center mb-4">
                    <h3 class="fw-bold">Kenapa Harus <span style="color: #1887d1;">Arkha</span>&co ?</h3>
                </div>
            </div>
            <div class="row offset-md-1 mb-5" data-aos="fade-up" data-aos-duration="1000">

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-3">
                    <p class="fw-bold"><img src="img/iconunggulan1.png" alt="iconunggulan1" width="40px" height="40px" class="me-2"> Gratis Ongkir</p>
                    <p>Gratis Ongkir 10rb minimal belanja 300rb untuk kilogram pertama.</p>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-3">
                    <p class="fw-bold"><img src="img/iconunggulan2.png" alt="iconunggulan2" width="40px" height="40px"> Bisa Tukar Size</p>
                    <p>Jangan takut salah size, Karena di ScreMous bisa tukar size</p>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-3">
                    <p class="fw-bold"><img src="img/iconunggulan3.png" alt="iconunggulan3" width="40px" height="40px"> Garansi Kepuasan</p>
                    <p>Kurang puas dengan produk Scremous? Balikiin aja! Kita refund uangmu 100%!</p>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-3">
                    <p class="fw-bold"><img src="img/iconunggulan4.png" alt="iconunggulan4" width="40px" height="40px"> Local Pride</p>
                    <p>Saatnya produk lokal menjadi pilihan no. 1</p>
                </div>
            </div>
        </div>

    </section>

    <!-- Akhir unggulan -->


    <!-- footer -->

    <footer id="kontak" class="pb-3 bg-light">
        <div class="container pt-3" style="border-bottom: 1px solid grey;">
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
                    <li class="list-group-item mb-1"><img src="img/jne.png" alt="jne"> <img src="img/jnt.png" alt=" jnt"> <img src="img/jntcargo.png" alt=""></li>
                    <li class="list-group-item mb-1"><img src="img/anteraja.png" alt="anteraja"> <img src="img/indopaket.png" alt="indopaker"> <img src="img/ninjaexpres.png" alt="ninjaexpres"></li>
                    <li class="list-group-item mb-1"><img src="img/idexpres.png" alt="idexpres"></li>
                </div>
            </div>
        </div>

        <p class="text-center pt-3 mt-3">&copy; 2022 . <span class="text-primary fw-bold">Arkha</span><span class="fw-bold" style="color: black;">&co</span></p>

    </footer>

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