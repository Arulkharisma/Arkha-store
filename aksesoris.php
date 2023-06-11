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
            width: max-content;
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
            width: max-content;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <?php require 'navbar.php'; ?>
    <!-- Akhir Navbar -->

    <!-- produk -->
    <section id="Aksesoris" class="pt-lg-5 mb-5 mt-3">
        <div class="container">
            <div class="row mt-lg-5">
                <div class="col">
                    <h4 class="mt-2" style="border-bottom: 2px solid hotpink; width: max-content; color: royalblue;">Aksesoris</h4>
                </div>
            </div>

            <div class="row mt-4 ">
                <?php

                $query = "SELECT * FROM data_produk WHERE id_kategori = 4";
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


    <!-- Akhir produk  -->
    <?php
    require 'footer.php';
    ?>

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