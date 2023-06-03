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


    <section id="keranjang">
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col">
                    <h4 style="border-bottom:2px solid black ; width: max-content;">My Cart</h4>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-8">
                    <div class="bg-light p-3" style="width: 100%;">
                        <span class="fw-bold" style="margin-left: 20px; margin-right: 400px;">Products</span>
                        <span class="fw-bold" style="margin-right: 80px;">Harga</span>
                        <span class="fw-bold " style="margin-right: 30px;">Jumlah</span>
                        <span class="fw-bold">Total</span>
                    </div>
                    <div class="p-3 mt-3" style=" border: 1px solid rgb(232, 232, 232);">
                        <img src="img/produk 11.jpeg" width="95px" height="105px" alt="">
                        <span class="fw-bold" style="margin-right: 190px;">Hoodie Neue Crown Black</span>
                        <span class="fw-bold">RP 180.000</span>
                        <span class="p-2 ms-5" style="border: 1px solid rgb(221, 221, 221);">1x</span>
                        <span class="fw-bold ms-5">RP 180.000</span>
                    </div>
                    <div class="p-3 mt-3" style=" border: 1px solid rgb(232, 232, 232);">
                        <img src="img/produk 11.jpeg" width="95px" height="105px" alt="">
                        <span class="fw-bold" style="margin-right: 190px;">Hoodie Neue Crown Black</span>
                        <span class="fw-bold">RP 180.000</span>
                        <span class="p-2 ms-5" style="border: 1px solid rgb(221, 221, 221);">1x</span>
                        <span class="fw-bold ms-5">RP 180.000</span>
                    </div>
                    <div class="mt-4">
                        <p>Tambahkan Komentar</p>
                        <textarea name="Komentar" id="komentar" cols="90" rows="5"></textarea>
                    </div>

                </div>
                <div class="col-lg-4 p-3" style="border: 1px solid grey;">
                    <span class="fw-bold" style="border-bottom: 1px solid black;">Total Order</span>
                    <div class="mt-4 fw-bold p-2" style="border-bottom: 1px solid grey;">
                        <span class="me-5 pe-5">Sub Total</span><span class="ms-5 ps-5">RP 360.000</span>
                    </div>
                    <div class="mt-3 p-2">
                        <span class="me-5 pe-4">Ongkos Kirim <i class="bi bi-truck me-2"></i></span><span class="ms-5 ps-4">RP 25.000</span>
                    </div>
                    <div class="mt-3 p-2">
                        <span class="me-5 pe-5">Voucher Diskon <i class="bi bi-tags"></i></span><span class="ms-4 ps-3">RP 45.000</span>
                    </div>
                    <div class="mt-4 p-2 fw-bold" style="border-bottom: 1px solid grey;">
                        <span class="me-5 pe-5">Sub Total</span><span class="ms-5 ps-5">RP 340.000</span>
                    </div>
                    <div class="mt-4 text-center text-white p-3" style="background-color: #1887d1;">
                        <span>Chekout Sekarang</span>
                    </div>
                    <div class="mt-4 text-center text-black p-3" style="border: 1px solid #1887d1;">
                        <span>Tambahkan Produk Lain</span>
                    </div>

                </div>
            </div>
        </div>
    </section>



    <footer id="kontak" class="pb-3 bg-light mt-5">
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

        </p>

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