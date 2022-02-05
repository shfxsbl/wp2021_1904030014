<?php

require 'koneksi.php';

if (isset($_POST['tambah1'])) {
  if (tambah($_POST) > 0) {
    echo
    "<script>
    alert('data berhasil ditambah');
    document.location.href = 'buku.php';
    </script>";
  } else {
    echo
    "<script>
    alert('data gagal ditambah');
    </script>";
  }
}
if (isset($_POST['tambah'])) {
  if (tambaha($_POST) > 0) {
    echo
    "<script>
    alert('data berhasil ditambah');
    document.location.href = 'anggota.php';
    </script>";
  } else {
    echo
    "<script>
    alert('data gagal ditambah');
    </script>";
  }
}

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="style.css">

  <title>Hello, world!</title>
</head>

<body>

  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="#">Phill Book's</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          <a class="nav-link active" href="index.php">Home <span class="sr-only"></span></a>
          <a class="nav-link" href="buku.php">Buku</a>
          <a class="nav-link" href="anggota.php">Anggota</a>
          <a class="nav-link" href="tambahbuku.php">Input</a>
          <a class="btn btn-primary tombol">Disabled</a>
        </div>
      </div>
    </div>
  </nav>

  <br>

  <!-- konten -->
  <div class="container">
    <h3><i class="fas fa-users"></i> Input Buku </h3>
    <hr>
    <form method="POST" action="">
      <div class="form-group">
        <label for="nama">Nama Buku: </label>
        <input type="text" class="form-control" id="nama" placeholder="judul buku" name="judul" autofocus required autocomplete="off">
      </div>
      <div class="form-group">
        <label for="alamat">Stok : </label>
        <input type="text" class="form-control" id="alamat" placeholder="jumlah stok" name="stok" required autocomplete="off">
      </div>
      <div class="form-group">
        <label for="jenis_kelamin">Tanggal Peminjaman : </label>
        <input type="text" class="form-control" id="jenis_kelamin" placeholder="tanggal peminjaman" name="tgl_pinjam" required autocomplete="off">
      </div>
      <div class="form-group">
        <label for="agama">Tanggal Pemulangan : </label>
        <input type="text" class="form-control" id="agama" placeholder="tanggal pemulangan" name="tgl_balik" required autocomplete="off">
      </div>
      <button type="submit" class="btn btn-primary" name="tambah1">Simpan</button>
    </form>
  </div>

  </div>
  </div>
  <br>
  <br>
  <!-- konten -->
  <div class="container">
    <h3><i class="fas fa-users"></i> Tambah anggota </h3>
    <hr>
    <form method="POST" action="">
      <div class="form-group">
        <label for="nama">Nama Anggota: </label>
        <input type="text" class="form-control" id="nama" placeholder="nama kamu" name="nama" autofocus required autocomplete="off">
      </div>
      <div class="form-group">
        <label for="alamat">No. Telpon : </label>
        <input type="text" class="form-control" id="alamat" placeholder="nomor telpon" name="notelp" required autocomplete="off">
      </div>
      <div class="form-group">
        <label for="jenis_kelamin">Alamat : </label>
        <input type="text" class="form-control" id="jenis_kelamin" placeholder="alamat kamu" name="alamat" required autocomplete="off">
      </div>
      <button type="submit" class="btn btn-primary" name="tambah">Simpan</button>
    </form>
  </div>

  </div>
  </div>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>