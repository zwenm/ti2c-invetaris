<?php

include("koneksi.php");

if(isset($_POST['submit'])){
    $merk = $_POST['nama'];
    $warna = $_POST['warna'];
    $qty = $_POST['qty'];

    $sql = "INSERT INTO tb_barang (merk_barang, warna, jumlah)
    VALUE ('$merk', '$warna', '$qty')";
    $query = mysqli_query($db, $sql);

    if($query){
        header('Location: tampilkan-barang.php?status=berhasil');
    } else{
        header('Location: tampilkan-barang.php?status=gagal');
    }
} else{
    die("Akses diblokir");
}
?>