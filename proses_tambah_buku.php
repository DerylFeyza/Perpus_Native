<?php
if($_POST){
    $nama_buku=$_POST['nama_buku'];
    $pengarang=$_POST['pengarang'];
    $deskripsi=$_POST['deskripsi'];
    $foto=$_POST['foto'];
    if(empty($nama_buku)){
        echo "<script>alert('nama buku tidak boleh kosong');location.href='tambah_buku.php';</script>";

    } elseif(empty($pengarang)){
        echo "<script>alert('pengarang boleh kosong');location.href='tambah_buku.php';</script>";
    } elseif(empty($foto)){
        echo "<script>alert('foto tidak boleh kosong');location.href='tambah_buku.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into buku (nama_buku,pengarang, deskripsi, foto) value ('".$nama_buku."','".$pengarang."','".$deskripsi."','".$foto."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan buku');location.href='tambah_buku.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan buku');location.href='tambah_buku.php';</script>";
        }
    }
}
?>
