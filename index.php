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

    <!-- JQueri -->
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
            gap: 20px;
        }

        .bi-arrow-right::before {
            vertical-align: middle;
        }

        .icon {
            color: black;
        }

        .list-nav:hover {
            border-bottom: 2px solid black;
            margin: 0;
            width: max-content;
        }

        .list-nav-active {
            border-bottom: 2px solid black;
            width: max-content;
        }

        /* .background2 {
            height: 100vh;
            width: 100%;
            background: rgba(247, 250, 255, 0.9);
            backdrop-filter: blur(125px);
        } */

        .navbtn:hover {
            background-color: hotpink;
        }

        .text-poppins {
            font-family: poppins, sans-serif;
            font-weight: 600;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <?php require 'navbar.php'; ?>
    <!-- Akhir Navbar -->

    <!-- Home -->

    <!-- Opsi background pertama -->
    <!-- <section id="home" style="background: #f8f9fa; backdrop-filter: blur(125px);"> -->
    <section id="home" class="pt-1" style="background-color: #1b2b3b;">

        <div class="container">
            <div class="row pt-5">
                <div class="col-lg-6 mt-4 justify-content-center text-poppins">
                    <p class="pt-5 mt-5 text-white fst-italic">Hallo, Selamat Datang di Store Online Kami </p>
                    <h1 class="fw-bold" data-aos="fade-right" data-aos-duration="1000">
                        <span style="color: hotpink;">Temukan</span>
                        <span style="color: royalblue;">Outfit</span><br>
                        <span style="color: royalblue;">Impian </span>
                        <span style="color: hotpink;">Anda<br>Disini</span>
                    </h1>
                    <p class="mt-4 mb-4 fst-italic text-white" data-aos="fade-right" data-aos-duration="500" data-aos-delay="500">Dapatkan Harga Spesial Hanya Disini!!</p>
                    <a href="#produkTerbaru" class="av-link p-2 navbtn text-white" data-aos="fade-rigt" data-aos-duration="500" data-aos-delay="1200" style="border: 2px solid white; border-radius: 10px; font-weight: 400;">
                        Pesan Sekarang <i class=" bi bi-arrow-right" style="color: white;"></i>
                    </a>
                </div>

                <div class="col-lg-6 text-center justify-content-center">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                        <div class="carousel-indicators mt-5" style="justify-content: center;">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active text-bg-dark mt-5" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" class="text-bg-dark mt-5"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3" class="text-bg-dark mt-5"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4" class="text-bg-dark mt-5"></button>
                        </div>
                        <div class="carousel-inner mt-3 mb-3 pt-2 zoom-efect" style="justify-content: center;">
                            <div class="carousel-item active justify-content-center kotak" data-aos="zoom-in-down" data-aos-duration="1000">
                                <img src="img/thumnail 4.jpg" class=" d-block mt-3 img-fluid rounded float-left" width="100%" height="580px" alt="sumber instagram Unclejin">
                            </div>
                            <div class="carousel-item justify-content-center kotak">
                                <img src="img/thumbnail 2.jpg" class=" d-block mt-3 img-fluid rounded float-left" width="100%" height="580px" alt="ig unclejin">
                            </div>
                            <div class="carousel-item justify-content-center kotak">
                                <img src="img/thumbnail 3.jpg" class=" d-block mt-3 img-fluid rounded float-left" width="100%" height="580px" alt="ig unclejin">
                            </div>
                            <div class="carousel-item justify-content-center kotak">
                                <img src="img/thumnail 1.jpg" class=" d-block mt-3 img-fluid rounded float-left" width="100%" height="580px" alt="ig unclejin">
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
                    <h2 class="mt-3" style="border-bottom: 2px solid hotpink; width: fit-content; color: royalblue;">Artikel Terbaru</h2>
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

                                <p class="card-text"><span class="text-decoration-line-through text-secondary"><?= "Rp " . number_format($produk["harga_normal"], 0, '', '.') ?></span><span style="color: royalblue;"> <?= "Rp " . number_format($produk["harga_produk"], 0, '', '.') ?> </span></p>
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
                    <h3 class="fw-bold">Kenapa Harus <span style="color: royalblue;">Arkha</span>&co ?</h3>
                </div>
            </div>
            <div class="row mb-5" data-aos="fade-up" data-aos-duration="1000">

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


    <!-- footer -->
    <?php require 'footer.php'; ?>


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