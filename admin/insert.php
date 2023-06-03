<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="jquery.min.js"></script>

    <title>Insert Data</title>

    <style>
        .tampilan-form {
            background-color: aliceblue;
            padding: 50px;
            border-radius: 15px;
        }
    </style>
</head>

<body>

    <?php
    include '../koneksi.php';

    $select = mysqli_query($koneksi, "SELECT * FROM kategori");

    if (isset($_POST["input"])) {

        $idkategori = htmlspecialchars($_POST["id_kategori"]);
        $namaProduk = htmlspecialchars($_POST["namaproduk"]);
        $harga= htmlspecialchars($_POST["hargaproduk"]);
        $stok = htmlspecialchars($_POST["stokproduk"]);
        $deskripsi = ($_POST["deskripsiproduk"]);
        $produkTerjual = htmlspecialchars($_POST["produkterjual"]);


        $namaFile = $_FILES["gambarproduk"]["name"];
        $ukuranFile = $_FILES["gambarproduk"]["size"];
        $error = $_FILES["gambarproduk"]["error"];
        $tmpName = $_FILES["gambarproduk"]["tmp_name"];

        /* upload gambar --> ada atau tidak gambar yang di upload*/
        if ($error === 4) {
            echo "<script>
                        alert('Pilih Gambar Terlebih dahulu');
                        document.location.href='insert.php';
                      </script>";
            return false;
        }

        /*Upload Gambar --> mengecek apakah yang di upload oleh user gambar atau tidak*/

        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));

        if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
            echo "<script>
                        alert('yang anda upload bukan gambar');
                        document.location.href='insert.php';
                     </script>";
            return false;
        }

        // upload gambar --> Mengecek apakah ukuran gambar terlalu besar
        if ($ukuranFile > 1000000) {
            echo "<script>
                        alert('Ukuran gambar terlalu besar');
                        document.location.href='insert.php';
                      </script>";
            return false;
        }

        // upload gambar --> jika ketiga kondisi diatas terpenuhi, gambar siap di upload
        move_uploaded_file($tmpName, 'img/fotoProduk/' . $namaFile);

        // $photo = htmlspecialchars($_POST["photo"]); 
        $gambarProduk = $namaFile;

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

    <section id="input" class="pt-3 mb-3">
        <div class="container">
            <h3 class="mb-3 mt-3 text-center">Input Data</h3>

            <div class="row justify-content-center">
                <div class="col-md-4 tampilan-form">

                    <form method="post" action="" enctype="multipart/form-data">

                        <div class="mb-2">
                            <label for="kategori" class="form-label">Kategori</label>
                            <select class="form-select" aria-label="Default select example" name="id_kategori">
                                <option selected>Kategori</option>
                                <?php while ($pilih = mysqli_fetch_array($select)) : ?>
                                    <option value="<?= $pilih["id_kategori"]; ?>">
                                        <?= $pilih["kategori"]; ?>
                                    </option>
                                <?php endwhile; ?>
                            </select>
                        </div>

                        <div class="mb-2">
                            <label for="namaproduk" class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" id="namaproduk" name="namaproduk" autocomplete="off" required>
                        </div>

                        <div class="mb-2">
                            <label for="hargaproduk" class="form-label">Harga Produk</label>
                            <input type="number" class="form-control" id="hargaproduk" name="hargaproduk" autocomplete="off" required>
                        </div>

                        <div class="mb-2">
                            <label for="stokproduk" class="form-label">Stok Produk</label>
                            <input type="number" class="form-control" id="stokproduk" name="stokproduk" autocomplete="off" required>
                        </div>

                        <div class="mb-2">
                            <label for="produkterjual" class="form-label">Produk Terjual</label>
                            <input type="number" class="form-control" id="produkterjual" name="produkterjual" autocomplete="off" required>
                        </div>

                        <div class="mb-2">
                            <label for="gambarproduk" class="form-label">Gambar Produk</label>
                            <input type="file" class="form-control" id="gambarproduk" name="gambarproduk" autocomplete="off" required>
                        </div>

                        <div class="mb-2">
                            <label for="deskripsiproduk" class="form-label">Deskripsi Produk</label>
                            <textarea class="form-control" id="deskripsiproduk" rows="3" name="deskripsiproduk"></textarea>
                        </div>


                        <button type="submit" class="btn text-white me-3" style="background-color: #1ab15b;" name="input">Submit</button>
                        <a href="index.php" class="btn text-white" style="background-color: #1ab15b;" name="input">Lihat Data</a>

                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>