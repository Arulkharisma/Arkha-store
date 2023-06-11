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
    </style>

</head>

<body>
    <!-- Navbar -->
    <?php require 'navbar.php'; ?>
    <!-- Akhir Navbar -->


    <section id="keranjang" class="pt-3" style="height: 100vh; background-color: #ffffff; overflow: auto;">
        <div class="container">

            <div class="row pt-5 gap-4" style="justify-content: space-between;">
                <?php
                if (isset($_GET['id'])) {
                    //mengambil id produk
                    $id = $_GET['id'];
                    unset($_SESSION["cart"][$id]);

                    echo "<script type='text/javascript'>swal('Dihapus!', 'Produk Berhasil Dihapus Dari Keranjang', 'success');</script>";
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
                            if (empty($_SESSION['cart'])) {
                                echo "<script type='text/javascript'>
                                    swal({
                                        title: 'Keranjang Kosong',
                                        text: 'Silahkan Memilih Produk Dahulu!',
                                        icon: 'warning',
                                        dangerMode: true,
                                    }).then(okay => {
                                        if (okay) {
                                            window.location.href ='index.php';
                                        };
                                    });
                                    </script>";
                            } else {
                                $subtotal = 0;
                                foreach ($_SESSION['cart'] as $id_produk => $jumlah) :
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
                                            <input type="text" name="stok" id="qty_input" class="form-control input-number text-center border-0" value="<?= $jumlah ?>" min="1" max="<?php $cetak['stok_produk']; ?>" style="width: 40px; border-radius: 0; border-color: #0d6efd; display: inline-flex;">
                                            <button type="button" class="btn btn-outline-primary btn-number" id="plus-btn" style=" display: inline-flex; padding: 0px 5px; background-color: royalblue;"><i class=" bi bi-plus" style="vertical-align: middle;"></i></button>
                                        </td>
                                        <!-- <td>
                                                <?= $_POST["options-outlined"]; ?>
                                            </td> -->
                                        <td class="isi-table-tengah">
                                            <?= "Rp " . number_format($cetak["harga_produk"], 0, '', '.'); ?>
                                        </td>
                                        <td class="isi-table-tengah">
                                            <?= "Rp " . number_format($subharga, 0, '', '.'); ?>
                                        </td>
                                        <td class="isi-table-tengah">
                                            <!-- <a href="keranjang.php"></a> -->
                                            <button style="background-color: #ffffff; border: none;" onclick="validate();"><i class="bi bi-trash"></i></button>
                                            <script>
                                                function validate() {
                                                    swal({
                                                            title: "Apakah anda yakin?",
                                                            text: "Produk akan dihapus dari daftar keranjang",
                                                            icon: "warning",
                                                            buttons: ["TIdak", "Hapus Sekarang"],
                                                            dangerMode: true,
                                                        })
                                                        .then((willDelete) => {
                                                            if (willDelete) {
                                                                window.location.href = "keranjang.php?id=<?php echo $cetak['id_produk']; ?>";
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

                        <a href="index.php" class="btn text-white me-3 mt-3" style="background-color: royalblue;">Lanjut Belanja</a>
                        <?php 
                        
                        if(isset($_SESSION["cart"])){
                            echo"<a href='chekout.php' class='btn text-white me-3 mt-3' style='background-color: royalblue;'>Buat Pesanan</a>";
                        }

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- footer -->
    <?php
    require 'footer.php';
    ?>

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