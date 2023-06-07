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
    </style>
    </style>

</head>

<body>
    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold fs-4 text-poppins" href="index.php"><img src="img/logo.png" alt="Logo" width="35px" height="30px" class="d-inline-block align-text-top me-1"><span style="color:royalblue">Arkha</span><span style="color: hotpink;">&co</span></a>
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
                        <?php if (isset($_SESSION["login"])) : ?>
                            <a href="logout.php" class="nav-link ps-3 pe-3 navbtn" style="border: 2px solid royalblue; border-radius: 10px; color: #000000;">Logout</a>
                        <?php else : ?>
                            <a href="login.php" class="nav-link ps-3 pe-3 navbtn" style="border: 2px solid royalblue; border-radius: 10px; color: #000000;">Login</a>
                        <?php endif ?>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="keranjang.php"><img src="img/basket.png" alt="Keranjang" width="28px" height="28px"></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->


    <section id="keranjang" class="pt-3" style="height: 100vh; background-color: #ffffff; overflow: auto;">
        <div class="container">

            <div class="row pt-5 gap-4" style="justify-content: space-between;">
                <form action="" method="post">
                    <?php
                    if (isset($_GET["id_produk"])) {
                        //mengambil id produk
                        $id_produk = $_GET["id"];
                        unset($_SESSION["cart"]["id"]);

                        echo "<script type='text/javascript'>
                                                swal('Dihapus!', 'Produk Berhasil Dihapus Dari Keranjang', 'success');
                                            </script>";
                    }
                    ?>

                    <div class="col-lg-12">
                        <div class="tampilan-form spinner mt-5">
                            <h3 class="fw-bold mb-4">Detail Keranjang</h3>

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Nama Produk</th>
                                        <th scope="col" class="text-center">Jumlah</th>
                                        <!-- <th scope="col">Ukruran</th> -->
                                        <th scope="col">Harga</th>
                                        <th scope="col">Sub Harga</th>
                                        <th scope="col"></th>

                                    </tr>
                                </thead>
                                <?php
                                if (empty($_SESSION["cart"])) {
                                    echo "<script type='text/javascript'>
                                    swal({
                                        title: 'Keranjang Kosong',
                                        text: 'Silahkan Memilih Produk Dahulu!',
                                        icon: 'warning',
                                        dangerMode: true,
                                    }).then(okay => {
                                        if (okay) {
                                            window.location.href ='shop.php';
                                        };
                                    });
                                    </script>";
                                } else {
                                    $subtotal = 0;
                                    foreach ($_SESSION["cart"] as $id_produk => $jumlah) :
                                ?>

                                        <?php
                                        $query = mysqli_query($koneksi, "SELECT * FROM data_produk WHERE id_produk='$id_produk'");
                                        $cetak = mysqli_fetch_array($query);
                                        $subharga = $cetak['harga_produk'] * $jumlah;
                                        ?>
                                        <tr>
                                            <td class="isi-table-tengah">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                    <label class="form-check-label" for="flexCheckChecked"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <?php if ($cetak['gambar_produk'] != null) { ?>
                                                    <img width="80px" height="80px" src="./admin/img/fotoProduk/<?= $cetak["gambar_produk"]; ?>">
                                                <?php }; ?>
                                            </td>
                                            <td class="isi-table-tengah">
                                                <?= $cetak["nama_produk"]; ?>
                                            </td>
                                            <td class="text-center" style="vertical-align: middle;">
                                                <button type="button" class="btn btn-outline-primary fw-bold" id="minus-btn" style="display: inline-flex; padding: 0px 5px; background-color: royalblue;"><i class="bi bi-dash" style="vertical-align: middle;"></i></button>
                                                <input type="text" name="stok" id="qty_input" class="form-control input-number text-center border-0" value="1" min="1" max="<?php echo $cetak['stok_produk']; ?>" style="width: 40px; border-radius: 0; border-color: #0d6efd; display: inline-flex;">
                                                <button type="button" class="btn btn-outline-primary btn-number" id="plus-btn" style=" display: inline-flex; padding: 0px 5px; background-color: royalblue;"><i class=" bi bi-plus" style="vertical-align: middle;"></i></button>
                                            </td>
                                            <!-- <td>
                                                <?= $_POST["options-outlined"]; ?>
                                            </td> -->
                                            <td class="isi-table-tengah">
                                                <?= $cetak["harga_produk"]; ?>
                                            </td>
                                            <td class="isi-table-tengah">
                                                <?= $subharga ?>
                                            </td>
                                            <td class="isi-table-tengah">
                                                <button onclick="validate();" style="background-color: #ffffff; border: none;"><i class="bi bi-trash"></i></button>
                                                <script>
                                                    function validate() {
                                                        swal({
                                                                title: "Apakah anda yakin?",
                                                                text: "Produk akan dihapus dari daftar keranjang",
                                                                icon: "warning",
                                                                buttons: true,
                                                                dangerMode: true,
                                                            })
                                                            .then((willDelete) => {
                                                                if (willDelete) {
                                                                    window.location.href ="keranjang.php?id=<? echo $cetak['id_produk']; ?>";
                                                                }
                                                                // else {
                                                                //     swal("Your imaginary file is safe!");
                                                                // }
                                                            });
                                                    }
                                                </script>
                                            </td>
                                        </tr>
                                        <?php $subtotal += $subharga; ?>
                                    <?php endforeach ?>
                                <?php } ?>

                                <!-- <tr>
                                    <td class="isi-table-tengah">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                            <label class="form-check-label" for="flexCheckChecked"></label>
                                        </div>
                                    </td>
                                    <td><img src="img/celana3.jpeg " width="80px" height="80px" alt=""></td>
                                    <td class="isi-table-tengah"> Unclejin Hoodie new crown black</td>
                                    <td class="text-center" style="vertical-align: middle;">
                                        <button type="button" class="btn btn-outline-primary fw-bold" id="minus-btn" style="display: inline-flex; padding: 0px 5px; background-color: royalblue;"><i class="bi bi-dash" style="vertical-align: middle;"></i></button>
                                        <input type="text" name="stok" id="qty_input" class="form-control input-number text-center border-0" value="1" min="1" max="<?php echo $cetak['stok_produk']; ?>" style="width: 40px; border-radius: 0; border-color: #0d6efd; display: inline-flex;">
                                        <button type="button" class="btn btn-outline-primary btn-number" id="plus-btn" style=" display: inline-flex; padding: 0px 5px; background-color: royalblue;"><i class=" bi bi-plus" style="vertical-align: middle;"></i></button>
                                    </td>
                                    <td class="isi-table-tengah">Rp 400.000</td>
                                    <td class="isi-table-tengah">Rp 800.000</td>
                                    <td class="isi-table-tengah"><a href=" #"><i class="bi bi-trash"></i></a></td>
                                </tr> -->

                                <!-- <tr>
                                    <td class="isi-table-tengah">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                            <label class="form-check-label" for="flexCheckChecked"></label>
                                        </div>
                                    </td>
                                    <td><img src="img/thsirt4.jpeg" width="80px" height="80px" alt=""></td>
                                    <td class="isi-table-tengah">Hoodie new crown black</td>
                                    <td class="text-center" style="vertical-align: middle;">
                                        <button type="button" class="btn btn-outline-primary fw-bold" id="minus-btn" style="display: inline-flex; padding: 0px 5px; background-color: royalblue;"><i class="bi bi-dash" style="vertical-align: middle;"></i></button>
                                        <input type="text" name="stok" id="qty_input" class="form-control input-number text-center border-0" value="1" min="1" max="<?= $cetak['stok_produk']; ?>" style="width: 40px; border-radius: 0; border-color: #0d6efd; display: inline-flex;">
                                        <button type="button" class="btn btn-outline-primary btn-number" id="plus-btn" style=" display: inline-flex; padding: 0px 5px; background-color: royalblue;"><i class=" bi bi-plus" style="vertical-align: middle;"></i></button>
                                    </td>
                                    <td class="isi-table-tengah">Rp 50.000</td>
                                    <td class="isi-table-tengah">Rp 50.000</td>
                                    <td class="isi-table-tengah"><a href=" #"><i class="bi bi-trash"></i></a></td>
                                </tr> -->

                            </table>
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

                            <a href="chekout.php" class="btn text-white me-3 mt-3" style="background-color: royalblue;">Buat Pesanan</a>
                </form>
            </div>
        </div>
        </div>
        </div>
    </section>

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