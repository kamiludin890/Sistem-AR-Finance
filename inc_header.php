<?php
session_start();
include("inc_koneksi.php");
if(!isset($_SESSION['admin_username'])){
    header("location:login.php");
}
//melihat status $db
//print_r($_SESSION['admin_akses']);

?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Finance</title>
    <link rel="stylesheet" href="style.css"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<div id="app">
 <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <h1 class="navbar-brand">Sistem Finance</h1>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       <li class="nav-item"><a class="nav-link active" aria-current="page" href="Dashboard.php">Home</a></li>       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            AR & Laporan
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/Asset/AR.php">Accounting Report(AR)</a></li>
            <li><a class="dropdown-item" href="Weekly.php">Mingguan</a></li>
            <li><a class="dropdown-item" href="Monthly.php">Bulanan</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="payment.php">Update Payment</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Admin.php">Setting</a>
        </li>
      </ul>
      <div class="d-flex">
        <a class="btn btn-outline-danger" href="logout.php">Logout</a>
      </div>
      <!--<form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>-->
    </div>
  </div>
</nav>
        