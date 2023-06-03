-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2023 at 08:36 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arkhastore`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_produk`
--

CREATE TABLE `data_produk` (
  `id_produk` int(100) NOT NULL,
  `id_kategori` int(20) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga_produk` int(50) NOT NULL,
  `harga_normal` int(50) NOT NULL,
  `stok_produk` int(10) NOT NULL,
  `produk_terjual` int(50) NOT NULL,
  `gambar_produk` blob NOT NULL,
  `deskripsi_produk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_produk`
--

INSERT INTO `data_produk` (`id_produk`, `id_kategori`, `nama_produk`, `harga_produk`, `harga_normal`, `stok_produk`, `produk_terjual`, `gambar_produk`, `deskripsi_produk`) VALUES
(7, 4, 'Unclejin Watch Army', 150000, 250000, 25, 0, 0x616b7365736f726973362e6a706567, '  &lt;p class=&quot;mb-0 mt-2&quot;&gt;Regular fit Hoodie With Rubber screnprinted&lt;/p&gt;\r\n                &lt;p&gt;Material : Cotton Flece&lt;/p&gt;\r\n                &lt;p&gt;PENTING :&lt;/p&gt;\r\n                &lt;p class=&quot;mb-0&quot;&gt;-Konfirmasi terlebih dahulu sebelum melakukan transaksi melalui chat terutama untuk size dan jenis artikel yang tersedia.&lt;/p&gt;\r\n                &lt;p class=&quot;mb-0&quot;&gt;-pastikan telah mengisi alamat dengan benar dan lengkap untuk memudahkan kurir dalam mengirim barang.&lt;/p&gt;\r\n                &lt;p class=&quot;mb-0&quot;&gt;-Warna produk yang sebenarnya mungkin tidak 100% sama seperti yang terlihat pada gambar, hal ini di sebabkan faktor pencahayaan saat pengambilan gambar serta kualitas layar\r\n                    gadget yang digunakan untuk melihat gambar\r\n                &lt;/p&gt;\r\n                &lt;p class=&quot;mb-0&quot;&gt;-Untuk membeli beberapa produk/warna sekaligus dalam 1 pesanan, silakan klik masukkan ke keranjang untuk setiap\r\n                    produk/warna yang diinginkan, kami tidak menerima permintaan warna lewat pesan&lt;/p&gt;\r\n                &lt;p class=&quot;mb-0&quot;&gt;- Pesanan yang telah dibuat tidak dapat diUBAH kembali&lt;/p&gt;\r\n                &lt;p class=&quot;mb-0&quot;&gt;- Jika barang yang kamu terima tidak sesuai pesanan maka silakan ajukan pengembalian barang &amp; dana (jangan klik pesanan\r\n                    diterima)&lt;/p&gt;\r\n                &lt;p class=&quot;mb-0&quot;&gt;- Siapkan Video Unboxing sebagai antisipasi/bukti apabila barang yang diterima tidak sesuai/cacat&lt;/p&gt;\r\n                &lt;p class=&quot;mb-0&quot;&gt;- Jika kamu membeli maka kamu telah setuju dengan kebijakan UNCLEJIN STORE.&lt;/p&gt;'),
(8, 3, 'Hoodie New Crown Black', 250000, 475000, 15, 5, 0x70726f64756b2031302e6a706567, '<p class=\"mb-0 mt-2\">Regular fit Hoodie With Rubber screnprinted</p>\r\n                <p>Material : Cotton Flece</p>\r\n                <p>PENTING :</p>\r\n                <p class=\"mb-0\">-Konfirmasi terlebih dahulu sebelum melakukan transaksi melalui chat terutama untuk size dan jenis artikel yang tersedia.</p>\r\n                <p class=\"mb-0\">-pastikan telah mengisi alamat dengan benar dan lengkap untuk memudahkan kurir dalam mengirim barang.</p>\r\n                <p class=\"mb-0\">-Warna produk yang sebenarnya mungkin tidak 100% sama seperti yang terlihat pada gambar, hal ini di sebabkan faktor pencahayaan saat pengambilan gambar serta kualitas layar\r\n                    gadget yang digunakan untuk melihat gambar\r\n                </p>\r\n                <p class=\"mb-0\">-Untuk membeli beberapa produk/warna sekaligus dalam 1 pesanan, silakan klik masukkan ke keranjang untuk setiap\r\n                    produk/warna yang diinginkan, kami tidak menerima permintaan warna lewat pesan</p>\r\n                <p class=\"mb-0\">- Pesanan yang telah dibuat tidak dapat diUBAH kembali</p>\r\n                <p class=\"mb-0\">- Jika barang yang kamu terima tidak sesuai pesanan maka silakan ajukan pengembalian barang & dana (jangan klik pesanan\r\n                    diterima)</p>\r\n                <p class=\"mb-0\">- Siapkan Video Unboxing sebagai antisipasi/bukti apabila barang yang diterima tidak sesuai/cacat</p>\r\n                <p class=\"mb-0\">- Jika kamu membeli maka kamu telah setuju dengan kebijakan UNCLEJIN STORE.</p>'),
(9, 1, 'Unclejin Tshirt Crown Black', 100000, 175000, 9, 0, 0x747368697274312e6a706567, '<p class=\"mb-0 mt-2\">Regular fit Hoodie With Rubber screnprinted</p>\r\n                <p>Material : Cotton Flece</p>\r\n                <p>PENTING :</p>\r\n                <p class=\"mb-0\">-Konfirmasi terlebih dahulu sebelum melakukan transaksi melalui chat terutama untuk size dan jenis artikel yang tersedia.</p>\r\n                <p class=\"mb-0\">-pastikan telah mengisi alamat dengan benar dan lengkap untuk memudahkan kurir dalam mengirim barang.</p>\r\n                <p class=\"mb-0\">-Warna produk yang sebenarnya mungkin tidak 100% sama seperti yang terlihat pada gambar, hal ini di sebabkan faktor pencahayaan saat pengambilan gambar serta kualitas layar\r\n                    gadget yang digunakan untuk melihat gambar\r\n                </p>\r\n                <p class=\"mb-0\">-Untuk membeli beberapa produk/warna sekaligus dalam 1 pesanan, silakan klik masukkan ke keranjang untuk setiap\r\n                    produk/warna yang diinginkan, kami tidak menerima permintaan warna lewat pesan</p>\r\n                <p class=\"mb-0\">- Pesanan yang telah dibuat tidak dapat diUBAH kembali</p>\r\n                <p class=\"mb-0\">- Jika barang yang kamu terima tidak sesuai pesanan maka silakan ajukan pengembalian barang & dana (jangan klik pesanan\r\n                    diterima)</p>\r\n                <p class=\"mb-0\">- Siapkan Video Unboxing sebagai antisipasi/bukti apabila barang yang diterima tidak sesuai/cacat</p>\r\n                <p class=\"mb-0\">- Jika kamu membeli maka kamu telah setuju dengan kebijakan UNCLEJIN STORE.</p>'),
(11, 4, 'Unclejin Beanie Army', 85000, 125000, 35, 15, 0x616b7365736f726973332e6a706567, '<p class=\"mb-0 mt-2\">Material : Woll</p>\r\n              \r\n                <p>PENTING :</p>\r\n                <p class=\"mb-0\">-Konfirmasi terlebih dahulu sebelum melakukan transaksi melalui chat terutama untuk size dan jenis artikel yang tersedia.</p>\r\n                <p class=\"mb-0\">-pastikan telah mengisi alamat dengan benar dan lengkap untuk memudahkan kurir dalam mengirim barang.</p>\r\n                <p class=\"mb-0\">-Warna produk yang sebenarnya mungkin tidak 100% sama seperti yang terlihat pada gambar, hal ini di sebabkan faktor pencahayaan saat pengambilan gambar serta kualitas layar\r\n                    gadget yang digunakan untuk melihat gambar\r\n                </p>\r\n                <p class=\"mb-0\">-Untuk membeli beberapa produk/warna sekaligus dalam 1 pesanan, silakan klik masukkan ke keranjang untuk setiap\r\n                    produk/warna yang diinginkan, kami tidak menerima permintaan warna lewat pesan</p>\r\n                <p class=\"mb-0\">- Pesanan yang telah dibuat tidak dapat diUBAH kembali</p>\r\n                <p class=\"mb-0\">- Jika barang yang kamu terima tidak sesuai pesanan maka silakan ajukan pengembalian barang & dana (jangan klik pesanan\r\n                    diterima)</p>\r\n                <p class=\"mb-0\">- Siapkan Video Unboxing sebagai antisipasi/bukti apabila barang yang diterima tidak sesuai/cacat</p>\r\n                <p class=\"mb-0\">- Jika kamu membeli maka kamu telah setuju dengan kebijakan UNCLEJIN STORE.</p>'),
(12, 3, 'Unclejin Crewneck Cream Basic', 175000, 250000, 15, 1, 0x437265776e65636b312e6a706567, '<p class=\"mb-0 mt-2\">Regular fit Crewneck With Rubber Screnprinted</p>\r\n                <p>Material : Cotton Flece</p>\r\n                <p>PENTING :</p>\r\n                <p class=\"mb-0\">-Konfirmasi terlebih dahulu sebelum melakukan transaksi melalui chat terutama untuk size dan jenis artikel yang tersedia.</p>\r\n                <p class=\"mb-0\">-pastikan telah mengisi alamat dengan benar dan lengkap untuk memudahkan kurir dalam mengirim barang.</p>\r\n                <p class=\"mb-0\">-Warna produk yang sebenarnya mungkin tidak 100% sama seperti yang terlihat pada gambar, hal ini di sebabkan faktor pencahayaan saat pengambilan gambar serta kualitas layar\r\n                    gadget yang digunakan untuk melihat gambar\r\n                </p>\r\n                <p class=\"mb-0\">-Untuk membeli beberapa produk/warna sekaligus dalam 1 pesanan, silakan klik masukkan ke keranjang untuk setiap\r\n                    produk/warna yang diinginkan, kami tidak menerima permintaan warna lewat pesan</p>\r\n                <p class=\"mb-0\">- Pesanan yang telah dibuat tidak dapat diUBAH kembali</p>\r\n                <p class=\"mb-0\">- Jika barang yang kamu terima tidak sesuai pesanan maka silakan ajukan pengembalian barang & dana (jangan klik pesanan\r\n                    diterima)</p>\r\n                <p class=\"mb-0\">- Siapkan Video Unboxing sebagai antisipasi/bukti apabila barang yang diterima tidak sesuai/cacat</p>\r\n                <p class=\"mb-0\">- Jika kamu membeli maka kamu telah setuju dengan kebijakan UNCLEJIN STORE.</p>'),
(14, 3, 'Unclejin Crewneck Blue Basic ', 175000, 250000, 5, 7, 0x437265776e65636b332e6a706567, '<p class=\"mb-0 mt-2\">Regular fit Crewneck With Rubber Screnprinted</p>\r\n                <p>Material : Cotton Flece</p>\r\n                <p>PENTING :</p>\r\n                <p class=\"mb-0\">-Konfirmasi terlebih dahulu sebelum melakukan transaksi melalui chat terutama untuk size dan jenis artikel yang tersedia.</p>\r\n                <p class=\"mb-0\">-pastikan telah mengisi alamat dengan benar dan lengkap untuk memudahkan kurir dalam mengirim barang.</p>\r\n                <p class=\"mb-0\">-Warna produk yang sebenarnya mungkin tidak 100% sama seperti yang terlihat pada gambar, hal ini di sebabkan faktor pencahayaan saat pengambilan gambar serta kualitas layar\r\n                    gadget yang digunakan untuk melihat gambar\r\n                </p>\r\n                <p class=\"mb-0\">-Untuk membeli beberapa produk/warna sekaligus dalam 1 pesanan, silakan klik masukkan ke keranjang untuk setiap\r\n                    produk/warna yang diinginkan, kami tidak menerima permintaan warna lewat pesan</p>\r\n                <p class=\"mb-0\">- Pesanan yang telah dibuat tidak dapat diUBAH kembali</p>\r\n                <p class=\"mb-0\">- Jika barang yang kamu terima tidak sesuai pesanan maka silakan ajukan pengembalian barang & dana (jangan klik pesanan\r\n                    diterima)</p>\r\n                <p class=\"mb-0\">- Siapkan Video Unboxing sebagai antisipasi/bukti apabila barang yang diterima tidak sesuai/cacat</p>\r\n                <p class=\"mb-0\">- Jika kamu membeli maka kamu telah setuju dengan kebijakan UNCLEJIN STORE.</p>'),
(15, 1, 'Unclejin T-shirt Paradeise White', 100000, 150000, 18, 20, 0x546873697274322e6a706567, '<p class=\"mb-0 mt-2\">Regular fit Tshirt With Rubber Screnprinted</p>\r\n                <p>Material : Cotton Combed 30s</p>\r\n                <p>PENTING :</p>\r\n                <p class=\"mb-0\">-Konfirmasi terlebih dahulu sebelum melakukan transaksi melalui chat terutama untuk size dan jenis artikel yang tersedia.</p>\r\n                <p class=\"mb-0\">-pastikan telah mengisi alamat dengan benar dan lengkap untuk memudahkan kurir dalam mengirim barang.</p>\r\n                <p class=\"mb-0\">-Warna produk yang sebenarnya mungkin tidak 100% sama seperti yang terlihat pada gambar, hal ini di sebabkan faktor pencahayaan saat pengambilan gambar serta kualitas layar\r\n                    gadget yang digunakan untuk melihat gambar\r\n                </p>\r\n                <p class=\"mb-0\">-Untuk membeli beberapa produk/warna sekaligus dalam 1 pesanan, silakan klik masukkan ke keranjang untuk setiap\r\n                    produk/warna yang diinginkan, kami tidak menerima permintaan warna lewat pesan</p>\r\n                <p class=\"mb-0\">- Pesanan yang telah dibuat tidak dapat diUBAH kembali</p>\r\n                <p class=\"mb-0\">- Jika barang yang kamu terima tidak sesuai pesanan maka silakan ajukan pengembalian barang & dana (jangan klik pesanan\r\n                    diterima)</p>\r\n                <p class=\"mb-0\">- Siapkan Video Unboxing sebagai antisipasi/bukti apabila barang yang diterima tidak sesuai/cacat</p>\r\n                <p class=\"mb-0\">- Jika kamu membeli maka kamu telah setuju dengan kebijakan UNCLEJIN STORE.</p>'),
(17, 2, 'Unclejin Boardshort Army', 125000, 175000, 3, 19, 0x63656c616e61342e6a706567, '<p class=\"mb-0 mt-2\">Regular fit Boardshort</p>\r\n                <p>Material : Cotton Flece</p>\r\n                <p>PENTING :</p>\r\n                <p class=\"mb-0\">-Konfirmasi terlebih dahulu sebelum melakukan transaksi melalui chat terutama untuk size dan jenis artikel yang tersedia.</p>\r\n                <p class=\"mb-0\">-pastikan telah mengisi alamat dengan benar dan lengkap untuk memudahkan kurir dalam mengirim barang.</p>\r\n                <p class=\"mb-0\">-Warna produk yang sebenarnya mungkin tidak 100% sama seperti yang terlihat pada gambar, hal ini di sebabkan faktor pencahayaan saat pengambilan gambar serta kualitas layar\r\n                    gadget yang digunakan untuk melihat gambar\r\n                </p>\r\n                <p class=\"mb-0\">-Untuk membeli beberapa produk/warna sekaligus dalam 1 pesanan, silakan klik masukkan ke keranjang untuk setiap\r\n                    produk/warna yang diinginkan, kami tidak menerima permintaan warna lewat pesan</p>\r\n                <p class=\"mb-0\">- Pesanan yang telah dibuat tidak dapat diUBAH kembali</p>\r\n                <p class=\"mb-0\">- Jika barang yang kamu terima tidak sesuai pesanan maka silakan ajukan pengembalian barang & dana (jangan klik pesanan\r\n                    diterima)</p>\r\n                <p class=\"mb-0\">- Siapkan Video Unboxing sebagai antisipasi/bukti apabila barang yang diterima tidak sesuai/cacat</p>\r\n                <p class=\"mb-0\">- Jika kamu membeli maka kamu telah setuju dengan kebijakan UNCLEJIN STORE.</p>'),
(18, 2, 'Unclejin Boardshot Black', 125000, 175000, 1, 21, 0x63656c616e61332e6a706567, '<p class=\"mb-0 mt-2\">Regular fit Boardshort</p>\r\n                <p>Material : Cotton Flece</p>\r\n                <p>PENTING :</p>\r\n                <p class=\"mb-0\">-Konfirmasi terlebih dahulu sebelum melakukan transaksi melalui chat terutama untuk size dan jenis artikel yang tersedia.</p>\r\n                <p class=\"mb-0\">-pastikan telah mengisi alamat dengan benar dan lengkap untuk memudahkan kurir dalam mengirim barang.</p>\r\n                <p class=\"mb-0\">-Warna produk yang sebenarnya mungkin tidak 100% sama seperti yang terlihat pada gambar, hal ini di sebabkan faktor pencahayaan saat pengambilan gambar serta kualitas layar\r\n                    gadget yang digunakan untuk melihat gambar\r\n                </p>\r\n                <p class=\"mb-0\">-Untuk membeli beberapa produk/warna sekaligus dalam 1 pesanan, silakan klik masukkan ke keranjang untuk setiap\r\n                    produk/warna yang diinginkan, kami tidak menerima permintaan warna lewat pesan</p>\r\n                <p class=\"mb-0\">- Pesanan yang telah dibuat tidak dapat diUBAH kembali</p>\r\n                <p class=\"mb-0\">- Jika barang yang kamu terima tidak sesuai pesanan maka silakan ajukan pengembalian barang & dana (jangan klik pesanan\r\n                    diterima)</p>\r\n                <p class=\"mb-0\">- Siapkan Video Unboxing sebagai antisipasi/bukti apabila barang yang diterima tidak sesuai/cacat</p>\r\n                <p class=\"mb-0\">- Jika kamu membeli maka kamu telah setuju dengan kebijakan UNCLEJIN STORE.</p>'),
(19, 2, 'Unclejin Longpants Chino Army', 175000, 250000, 15, 0, 0x63656c616e61322e6a706567, '<p class=\"mb-0 mt-2\">Oversized Longpants </p>\r\n                <p>Material : Cotton Flece</p>\r\n                <p>PENTING :</p>\r\n                <p class=\"mb-0\">-Konfirmasi terlebih dahulu sebelum melakukan transaksi melalui chat terutama untuk size dan jenis artikel yang tersedia.</p>\r\n                <p class=\"mb-0\">-pastikan telah mengisi alamat dengan benar dan lengkap untuk memudahkan kurir dalam mengirim barang.</p>\r\n                <p class=\"mb-0\">-Warna produk yang sebenarnya mungkin tidak 100% sama seperti yang terlihat pada gambar, hal ini di sebabkan faktor pencahayaan saat pengambilan gambar serta kualitas layar\r\n                    gadget yang digunakan untuk melihat gambar\r\n                </p>\r\n                <p class=\"mb-0\">-Untuk membeli beberapa produk/warna sekaligus dalam 1 pesanan, silakan klik masukkan ke keranjang untuk setiap\r\n                    produk/warna yang diinginkan, kami tidak menerima permintaan warna lewat pesan</p>\r\n                <p class=\"mb-0\">- Pesanan yang telah dibuat tidak dapat diUBAH kembali</p>\r\n                <p class=\"mb-0\">- Jika barang yang kamu terima tidak sesuai pesanan maka silakan ajukan pengembalian barang & dana (jangan klik pesanan\r\n                    diterima)</p>\r\n                <p class=\"mb-0\">- Siapkan Video Unboxing sebagai antisipasi/bukti apabila barang yang diterima tidak sesuai/cacat</p>\r\n                <p class=\"mb-0\">- Jika kamu membeli maka kamu telah setuju dengan kebijakan UNCLEJIN STORE.</p>'),
(20, 2, 'Unclejin Longpants Chino Black', 175000, 250000, 12, 14, 0x63656c616e6120312e6a706567, '<p class=\"mb-0 mt-2\">Regular fit Chino Longpants</p>\r\n                <p>Material : Cotton Flece</p>\r\n                <p>PENTING :</p>\r\n                <p class=\"mb-0\">-Konfirmasi terlebih dahulu sebelum melakukan transaksi melalui chat terutama untuk size dan jenis artikel yang tersedia.</p>\r\n                <p class=\"mb-0\">-pastikan telah mengisi alamat dengan benar dan lengkap untuk memudahkan kurir dalam mengirim barang.</p>\r\n                <p class=\"mb-0\">-Warna produk yang sebenarnya mungkin tidak 100% sama seperti yang terlihat pada gambar, hal ini di sebabkan faktor pencahayaan saat pengambilan gambar serta kualitas layar\r\n                    gadget yang digunakan untuk melihat gambar\r\n                </p>\r\n                <p class=\"mb-0\">-Untuk membeli beberapa produk/warna sekaligus dalam 1 pesanan, silakan klik masukkan ke keranjang untuk setiap\r\n                    produk/warna yang diinginkan, kami tidak menerima permintaan warna lewat pesan</p>\r\n                <p class=\"mb-0\">- Pesanan yang telah dibuat tidak dapat diUBAH kembali</p>\r\n                <p class=\"mb-0\">- Jika barang yang kamu terima tidak sesuai pesanan maka silakan ajukan pengembalian barang & dana (jangan klik pesanan\r\n                    diterima)</p>\r\n                <p class=\"mb-0\">- Siapkan Video Unboxing sebagai antisipasi/bukti apabila barang yang diterima tidak sesuai/cacat</p>\r\n                <p class=\"mb-0\">- Jika kamu membeli maka kamu telah setuju dengan kebijakan UNCLEJIN STORE.</p>'),
(21, 3, 'Unclejin Hoodie BlockScript Black', 250000, 475000, 2, 6, 0x686f6f646965322e6a706567, '<p class=\"mb-0 mt-2\">Regular fit Hoodie With Rubber screnprinted</p>\r\n                <p>Material : Cotton Flece</p>\r\n                <p>PENTING :</p>\r\n                <p class=\"mb-0\">-Konfirmasi terlebih dahulu sebelum melakukan transaksi melalui chat terutama untuk size dan jenis artikel yang tersedia.</p>\r\n                <p class=\"mb-0\">-pastikan telah mengisi alamat dengan benar dan lengkap untuk memudahkan kurir dalam mengirim barang.</p>\r\n                <p class=\"mb-0\">-Warna produk yang sebenarnya mungkin tidak 100% sama seperti yang terlihat pada gambar, hal ini di sebabkan faktor pencahayaan saat pengambilan gambar serta kualitas layar\r\n                    gadget yang digunakan untuk melihat gambar\r\n                </p>\r\n                <p class=\"mb-0\">-Untuk membeli beberapa produk/warna sekaligus dalam 1 pesanan, silakan klik masukkan ke keranjang untuk setiap\r\n                    produk/warna yang diinginkan, kami tidak menerima permintaan warna lewat pesan</p>\r\n                <p class=\"mb-0\">- Pesanan yang telah dibuat tidak dapat diUBAH kembali</p>\r\n                <p class=\"mb-0\">- Jika barang yang kamu terima tidak sesuai pesanan maka silakan ajukan pengembalian barang & dana (jangan klik pesanan\r\n                    diterima)</p>\r\n                <p class=\"mb-0\">- Siapkan Video Unboxing sebagai antisipasi/bukti apabila barang yang diterima tidak sesuai/cacat</p>\r\n                <p class=\"mb-0\">- Jika kamu membeli maka kamu telah setuju dengan kebijakan UNCLEJIN STORE.</p>'),
(22, 1, 'Unclejin Tshirt Maroon Basic', 100000, 150000, 15, 25, 0x547368697274372e6a706567, '<p class=\"mb-0 mt-2\">Regular fit T-shirt Rubber screnprinted</p>\r\n                <p>Material : Cotton Flece</p>\r\n                <p>PENTING :</p>\r\n                <p class=\"mb-0\">-Konfirmasi terlebih dahulu sebelum melakukan transaksi melalui chat terutama untuk size dan jenis artikel yang tersedia.</p>\r\n                <p class=\"mb-0\">-pastikan telah mengisi alamat dengan benar dan lengkap untuk memudahkan kurir dalam mengirim barang.</p>\r\n                <p class=\"mb-0\">-Warna produk yang sebenarnya mungkin tidak 100% sama seperti yang terlihat pada gambar, hal ini di sebabkan faktor pencahayaan saat pengambilan gambar serta kualitas layar\r\n                    gadget yang digunakan untuk melihat gambar\r\n                </p>\r\n                <p class=\"mb-0\">-Untuk membeli beberapa produk/warna sekaligus dalam 1 pesanan, silakan klik masukkan ke keranjang untuk setiap\r\n                    produk/warna yang diinginkan, kami tidak menerima permintaan warna lewat pesan</p>\r\n                <p class=\"mb-0\">- Pesanan yang telah dibuat tidak dapat diUBAH kembali</p>\r\n                <p class=\"mb-0\">- Jika barang yang kamu terima tidak sesuai pesanan maka silakan ajukan pengembalian barang & dana (jangan klik pesanan\r\n                    diterima)</p>\r\n                <p class=\"mb-0\">- Siapkan Video Unboxing sebagai antisipasi/bukti apabila barang yang diterima tidak sesuai/cacat</p>\r\n                <p class=\"mb-0\">- Jika kamu membeli maka kamu telah setuju dengan kebijakan UNCLEJIN STORE.</p>'),
(23, 1, 'Unclejin T-shirt Yellow basic', 100000, 150000, 5, 35, 0x746873697274342e6a706567, '<p class=\"mb-0 mt-2\">Regular T-shirt With Rubber screnprinted</p>\r\n                <p>Material : Cotton Flece</p>\r\n                <p>PENTING :</p>\r\n                <p class=\"mb-0\">-Konfirmasi terlebih dahulu sebelum melakukan transaksi melalui chat terutama untuk size dan jenis artikel yang tersedia.</p>\r\n                <p class=\"mb-0\">-pastikan telah mengisi alamat dengan benar dan lengkap untuk memudahkan kurir dalam mengirim barang.</p>\r\n                <p class=\"mb-0\">-Warna produk yang sebenarnya mungkin tidak 100% sama seperti yang terlihat pada gambar, hal ini di sebabkan faktor pencahayaan saat pengambilan gambar serta kualitas layar\r\n                    gadget yang digunakan untuk melihat gambar\r\n                </p>\r\n                <p class=\"mb-0\">-Untuk membeli beberapa produk/warna sekaligus dalam 1 pesanan, silakan klik masukkan ke keranjang untuk setiap\r\n                    produk/warna yang diinginkan, kami tidak menerima permintaan warna lewat pesan</p>\r\n                <p class=\"mb-0\">- Pesanan yang telah dibuat tidak dapat diUBAH kembali</p>\r\n                <p class=\"mb-0\">- Jika barang yang kamu terima tidak sesuai pesanan maka silakan ajukan pengembalian barang & dana (jangan klik pesanan\r\n                    diterima)</p>\r\n                <p class=\"mb-0\">- Siapkan Video Unboxing sebagai antisipasi/bukti apabila barang yang diterima tidak sesuai/cacat</p>\r\n                <p class=\"mb-0\">- Jika kamu membeli maka kamu telah setuju dengan kebijakan UNCLEJIN STORE.</p>'),
(24, 4, 'Unclejin Watch Black and White Basic ', 125000, 175000, 12, 3, 0x616b7365736f726973372e6a706567, '<p class=\"mb-0 mt-2\"></p>\r\n       \r\n                <p>PENTING :</p>\r\n                <p class=\"mb-0\">-Konfirmasi terlebih dahulu sebelum melakukan transaksi melalui chat terutama untuk size dan jenis artikel yang tersedia.</p>\r\n                <p class=\"mb-0\">-pastikan telah mengisi alamat dengan benar dan lengkap untuk memudahkan kurir dalam mengirim barang.</p>\r\n                <p class=\"mb-0\">-Warna produk yang sebenarnya mungkin tidak 100% sama seperti yang terlihat pada gambar, hal ini di sebabkan faktor pencahayaan saat pengambilan gambar serta kualitas layar\r\n                    gadget yang digunakan untuk melihat gambar\r\n                </p>\r\n                <p class=\"mb-0\">-Untuk membeli beberapa produk/warna sekaligus dalam 1 pesanan, silakan klik masukkan ke keranjang untuk setiap\r\n                    produk/warna yang diinginkan, kami tidak menerima permintaan warna lewat pesan</p>\r\n                <p class=\"mb-0\">- Pesanan yang telah dibuat tidak dapat diUBAH kembali</p>\r\n                <p class=\"mb-0\">- Jika barang yang kamu terima tidak sesuai pesanan maka silakan ajukan pengembalian barang & dana (jangan klik pesanan\r\n                    diterima)</p>\r\n                <p class=\"mb-0\">- Siapkan Video Unboxing sebagai antisipasi/bukti apabila barang yang diterima tidak sesuai/cacat</p>\r\n                <p class=\"mb-0\">- Jika kamu membeli maka kamu telah setuju dengan kebijakan UNCLEJIN STORE.</p>'),
(26, 4, 'Unclejin Totebag Army Basic', 135000, 160000, 6, 17, 0x616b7365736f726973382e6a706567, '<p class=\"mb-0 mt-2\"></p>\r\n             \r\n                <p>PENTING :</p>\r\n                <p class=\"mb-0\">-Konfirmasi terlebih dahulu sebelum melakukan transaksi melalui chat terutama untuk size dan jenis artikel yang tersedia.</p>\r\n                <p class=\"mb-0\">-pastikan telah mengisi alamat dengan benar dan lengkap untuk memudahkan kurir dalam mengirim barang.</p>\r\n                <p class=\"mb-0\">-Warna produk yang sebenarnya mungkin tidak 100% sama seperti yang terlihat pada gambar, hal ini di sebabkan faktor pencahayaan saat pengambilan gambar serta kualitas layar\r\n                    gadget yang digunakan untuk melihat gambar\r\n                </p>\r\n                <p class=\"mb-0\">-Untuk membeli beberapa produk/warna sekaligus dalam 1 pesanan, silakan klik masukkan ke keranjang untuk setiap\r\n                    produk/warna yang diinginkan, kami tidak menerima permintaan warna lewat pesan</p>\r\n                <p class=\"mb-0\">- Pesanan yang telah dibuat tidak dapat diUBAH kembali</p>\r\n                <p class=\"mb-0\">- Jika barang yang kamu terima tidak sesuai pesanan maka silakan ajukan pengembalian barang & dana (jangan klik pesanan\r\n                    diterima)</p>\r\n                <p class=\"mb-0\">- Siapkan Video Unboxing sebagai antisipasi/bukti apabila barang yang diterima tidak sesuai/cacat</p>\r\n                <p class=\"mb-0\">- Jika kamu membeli maka kamu telah setuju dengan kebijakan UNCLEJIN STORE.</p>'),
(27, 3, 'Unclejin Hoodie Basic', 250000, 475000, 2, 12, 0x686f6f646965312e6a706567, '<p class=\"mb-0 mt-2\">Regular fit Hoodie With Rubber screnprinted</p>\r\n                <p>Material : Cotton Flece</p>\r\n                <p>PENTING :</p>\r\n                <p class=\"mb-0\">-Konfirmasi terlebih dahulu sebelum melakukan transaksi melalui chat terutama untuk size dan jenis artikel yang tersedia.</p>\r\n                <p class=\"mb-0\">-pastikan telah mengisi alamat dengan benar dan lengkap untuk memudahkan kurir dalam mengirim barang.</p>\r\n                <p class=\"mb-0\">-Warna produk yang sebenarnya mungkin tidak 100% sama seperti yang terlihat pada gambar, hal ini di sebabkan faktor pencahayaan saat pengambilan gambar serta kualitas layar\r\n                    gadget yang digunakan untuk melihat gambar\r\n                </p>\r\n                <p class=\"mb-0\">-Untuk membeli beberapa produk/warna sekaligus dalam 1 pesanan, silakan klik masukkan ke keranjang untuk setiap\r\n                    produk/warna yang diinginkan, kami tidak menerima permintaan warna lewat pesan</p>\r\n                <p class=\"mb-0\">- Pesanan yang telah dibuat tidak dapat diUBAH kembali</p>\r\n                <p class=\"mb-0\">- Jika barang yang kamu terima tidak sesuai pesanan maka silakan ajukan pengembalian barang & dana (jangan klik pesanan\r\n                    diterima)</p>\r\n                <p class=\"mb-0\">- Siapkan Video Unboxing sebagai antisipasi/bukti apabila barang yang diterima tidak sesuai/cacat</p>\r\n                <p class=\"mb-0\">- Jika kamu membeli maka kamu telah setuju dengan kebijakan UNCLEJIN STORE.</p>'),
(28, 3, 'Unclejin Coach Jacket Basic Black', 275000, 495000, 25, 0, 0x70726f64756b20392e6a7067, '<p class=\"mb-0 mt-2\">Regular fit Coach Jacket</p>\r\n                <p>Material : Micro/ paracute</p>\r\n                <p>PENTING :</p>\r\n                <p class=\"mb-0\">-Konfirmasi terlebih dahulu sebelum melakukan transaksi melalui chat terutama untuk size dan jenis artikel yang tersedia.</p>\r\n                <p class=\"mb-0\">-pastikan telah mengisi alamat dengan benar dan lengkap untuk memudahkan kurir dalam mengirim barang.</p>\r\n                <p class=\"mb-0\">-Warna produk yang sebenarnya mungkin tidak 100% sama seperti yang terlihat pada gambar, hal ini di sebabkan faktor pencahayaan saat pengambilan gambar serta kualitas layar\r\n                    gadget yang digunakan untuk melihat gambar\r\n                </p>\r\n                <p class=\"mb-0\">-Untuk membeli beberapa produk/warna sekaligus dalam 1 pesanan, silakan klik masukkan ke keranjang untuk setiap\r\n                    produk/warna yang diinginkan, kami tidak menerima permintaan warna lewat pesan</p>\r\n                <p class=\"mb-0\">- Pesanan yang telah dibuat tidak dapat diUBAH kembali</p>\r\n                <p class=\"mb-0\">- Jika barang yang kamu terima tidak sesuai pesanan maka silakan ajukan pengembalian barang & dana (jangan klik pesanan\r\n                    diterima)</p>\r\n                <p class=\"mb-0\">- Siapkan Video Unboxing sebagai antisipasi/bukti apabila barang yang diterima tidak sesuai/cacat</p>\r\n                <p class=\"mb-0\">- Jika kamu membeli maka kamu telah setuju dengan kebijakan UNCLEJIN STORE.</p>'),
(29, 4, 'Unclejin Polocaps black', 100000, 130000, 12, 35, 0x616b7365736f726973312e6a706567, '<p class=\"mb-0 mt-2\">Material Flece</p>\r\n\r\n                <p>PENTING :</p>\r\n                <p class=\"mb-0\">-Konfirmasi terlebih dahulu sebelum melakukan transaksi melalui chat terutama untuk size dan jenis artikel yang tersedia.</p>\r\n                <p class=\"mb-0\">-pastikan telah mengisi alamat dengan benar dan lengkap untuk memudahkan kurir dalam mengirim barang.</p>\r\n                <p class=\"mb-0\">-Warna produk yang sebenarnya mungkin tidak 100% sama seperti yang terlihat pada gambar, hal ini di sebabkan faktor pencahayaan saat pengambilan gambar serta kualitas layar\r\n                    gadget yang digunakan untuk melihat gambar\r\n                </p>\r\n                <p class=\"mb-0\">-Untuk membeli beberapa produk/warna sekaligus dalam 1 pesanan, silakan klik masukkan ke keranjang untuk setiap\r\n                    produk/warna yang diinginkan, kami tidak menerima permintaan warna lewat pesan</p>\r\n                <p class=\"mb-0\">- Pesanan yang telah dibuat tidak dapat diUBAH kembali</p>\r\n                <p class=\"mb-0\">- Jika barang yang kamu terima tidak sesuai pesanan maka silakan ajukan pengembalian barang & dana (jangan klik pesanan\r\n                    diterima)</p>\r\n                <p class=\"mb-0\">- Siapkan Video Unboxing sebagai antisipasi/bukti apabila barang yang diterima tidak sesuai/cacat</p>\r\n                <p class=\"mb-0\">- Jika kamu membeli maka kamu telah setuju dengan kebijakan UNCLEJIN STORE.</p>'),
(30, 4, 'Slingbag Black Basic', 125000, 175000, 1, 49, 0x616b7365736f726973352e6a706567, '<p class=\"mb-0 mt-2\">Material : Paracute</p>\r\n             \r\n                <p>PENTING :</p>\r\n                <p class=\"mb-0\">-Konfirmasi terlebih dahulu sebelum melakukan transaksi melalui chat terutama untuk size dan jenis artikel yang tersedia.</p>\r\n                <p class=\"mb-0\">-pastikan telah mengisi alamat dengan benar dan lengkap untuk memudahkan kurir dalam mengirim barang.</p>\r\n                <p class=\"mb-0\">-Warna produk yang sebenarnya mungkin tidak 100% sama seperti yang terlihat pada gambar, hal ini di sebabkan faktor pencahayaan saat pengambilan gambar serta kualitas layar\r\n                    gadget yang digunakan untuk melihat gambar\r\n                </p>\r\n                <p class=\"mb-0\">-Untuk membeli beberapa produk/warna sekaligus dalam 1 pesanan, silakan klik masukkan ke keranjang untuk setiap\r\n                    produk/warna yang diinginkan, kami tidak menerima permintaan warna lewat pesan</p>\r\n                <p class=\"mb-0\">- Pesanan yang telah dibuat tidak dapat diUBAH kembali</p>\r\n                <p class=\"mb-0\">- Jika barang yang kamu terima tidak sesuai pesanan maka silakan ajukan pengembalian barang & dana (jangan klik pesanan\r\n                    diterima)</p>\r\n                <p class=\"mb-0\">- Siapkan Video Unboxing sebagai antisipasi/bukti apabila barang yang diterima tidak sesuai/cacat</p>\r\n                <p class=\"mb-0\">- Jika kamu membeli maka kamu telah setuju dengan kebijakan UNCLEJIN STORE.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(20) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'T-shirt'),
(2, 'Celana'),
(3, 'Hoodie/Jacket'),
(4, 'Aksesoris');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`) VALUES
(2, 'Arul Kharisma', 'arul@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `user_order`
--

CREATE TABLE `user_order` (
  `id_order` int(20) NOT NULL,
  `id_user` int(20) NOT NULL,
  `nama_penerima` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kode_pos` int(6) NOT NULL,
  `alamat` int(50) NOT NULL,
  `phone` int(25) NOT NULL,
  `tgl_order` date NOT NULL,
  `ongkir` int(50) NOT NULL,
  `total_order` int(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `no_resi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_produk`
--
ALTER TABLE `data_produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_order`
--
ALTER TABLE `user_order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_produk`
--
ALTER TABLE `data_produk`
  MODIFY `id_produk` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_order`
--
ALTER TABLE `user_order`
  MODIFY `id_order` int(20) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_produk`
--
ALTER TABLE `data_produk`
  ADD CONSTRAINT `data_produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_order`
--
ALTER TABLE `user_order`
  ADD CONSTRAINT `user_order_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
