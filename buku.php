<?php 
    include "header.php";
?>
<!-- <head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head> -->
<h2>Daftar Buku</h2>
<style>
    .ass{
        margin-bottom: 20px;
    }
    .card{
        background-color: rgb(32, 28, 28);
        color: white;
    }
    .btn{
        background-color: rgb(91, 46, 255);
        border: 1px solid black;
    }
    img{
        width: 100px;
        height: 250px;
        object-fit: cover;
    }
    .smh{
        margin-bottom: 20px;
    }
</style>
<a href="tambah_buku.php" class="ass btn">Tambah Buku</a>
<div class="row">
    <?php 
    include "koneksi.php";
    $qry_buku=mysqli_query($conn,"select * from buku");
    while($dt_buku=mysqli_fetch_array($qry_buku)){
        ?>
        <div class="smh col-md-3">
            <div class="card" >
              <img src="foto_produk/<?=$dt_buku['foto']?>" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title"><?=$dt_buku['nama_buku']?></h5>
                <p class="card-text"><?=substr($dt_buku['deskripsi'], 0,20)?></p>
                <a href="pinjam_buku.php?id_buku=<?=$dt_buku['id_buku']?>" class="btn">Pinjam</a>
              </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
<?php 
    include "footer.php";
?>
