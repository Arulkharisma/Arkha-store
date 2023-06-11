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
                    <a class="nav-link list-nav list-nav-active" aria-current="page" href="index.php">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link list-nav" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Kategori<i class="bi bi-chevron-down text-black rotate"></i></a>
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

                <?php if (isset($_SESSION["login"])) : ?>
                    <li class="nav-item">
                        <a class="nav-link list-nav" href="status-orderan.php">Orderan</a>
                    </li>
                <?php endif; ?>

                <li class="nav-item me-5">
                    <a class="nav-link list-nav" href="#kontak">Kontak</a>
                </li>
                <li class="nav-item">
                    <?php if (isset($_SESSION["login"])) : ?>
                        <a href="logout.php" class="nav-link ps-3 pe-3 navbtn" style="border: 2px solid royalblue; border-radius: 10px; color: #000000; padding-top: 5px; padding-bottom: 5px;">Logout</a>
                    <?php else : ?>
                        <a href="login.php" class="nav-link ps-3 pe-3 navbtn" style="border: 2px solid royalblue; border-radius: 10px; color: #000000; padding-top: 5px; padding-bottom: 5px;">Login</a>
                    <?php endif ?>
                </li>
                <li class="nav-item">
                    <form action="" method="post">
                        <button type="submit" class="nav-link" name="validasi_keranjang" style="border: none; background: none;"><img src="img/basket.png" alt="Keranjang" width="28px" height="28px"></button>
                    </form>

                    <!-- <a class="nav-link" href="keranjang.php"><img src="img/basket.png" alt="Keranjang" width="28px" height="28px"></a> -->
                    <?php
                    if (isset($_POST["validasi_keranjang"])) {
                        if (!isset($_SESSION["login"])) {
                            echo " 
                            <script type='text/javascript'>
                                swal('Anda belum login', 'login terlebih dahulu', 'info')
                                .then((value) => {
                                    document.location.href='login.php';
                                });
                            </script>
                            ";
                        } else {
                            echo "
                                <script>
                                document.location.href='keranjang.php';
                                </script>
                                ";
                        }
                    }
                    ?>
                </li>
            </ul>
        </div>
    </div>
</nav>