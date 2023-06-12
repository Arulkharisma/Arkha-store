<?php require "koneksi.php"; 
$id=$_GET['id'];
$query="UPDATE user_order SET status='Produk Diterima' WHERE id_order='$id'";
$result=mysqli_query($koneksi,$query); 

echo "<script>location='status-orderan.php';</script>";
?>
