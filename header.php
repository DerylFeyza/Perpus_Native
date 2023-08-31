<?php 
session_start();
    if($_SESSION['status_login']!=true){
        header('location: logout.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Home</title>
    <style> 
    .navbar{
      background-color: rgb(61, 61, 61) ;
      position: sticky;
      top: 0px;
      z-index: 2;
    }body{
      background-image: url("Asset/nerissa.png");
      background-attachment: fixed;
      background-position: center;
      background-position: top;
      background-repeat: no-repeat;
      background-size: 130%;
    }
    .a{
      background:rgba(123, 125, 255,0.8);
      border-radius: 15px;
      padding: 20px;
    }

  </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="box-shadow: 4px 4px 5px -4px;">
      <div class= "container-fluid">
        <a class="navbar-brand" href="#">PERPUS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="buku.php">Buku</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="histori_peminjaman.php">Transaksi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  
<div class="a container" style="margin-top:10px">
  </body>