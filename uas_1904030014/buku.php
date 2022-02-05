<?php

require 'koneksi.php';
$dbarang = query("SELECT * FROM buku");

if (isset($_POST['cari'])) {
  $dbarang = cari($_POST['keyword']);
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

  <!-- data -->
  <section id="data">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>Buku</h2>
        </div>
      </div>
      <form action="" method="POST">
        <input type="text" id="keyword" size="50" name="keyword" placeholder="masukkan keyword" autocomplete="off">
        <button type="submit" class="btn btn-primary" name="cari"> Cari </button>
        <a href="index.php" class="btn btn-danger" role="button">Kembali</a>
      </form>

      <br>
      <hr>

      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama Buku</th>
            <th scope="col">Stok</th>
            <th scope="col">Tanggal Peminjaman</th>
            <th scope="col">Tanggal Pengembalian</th>
            <th scope="col">Opsi</th>
          </tr>
        </thead>
        <?php if (empty($dbarang)) : ?>
          <tr>
            <td colspan="4" class="alert alert-danger text-center" role="alert">
              <p><b>Buku tidak ditemukan</b></p>
            </td>
          </tr>
        <?php endif; ?>
        <tbody>
          <?php $no = 1; ?>
          <?php foreach ($dbarang as $brg) : ?>
            <tr>
              <th scope="row"><?php echo $no ?></th>
              <td><?php echo $brg['judul']; ?></td>
              <td><?php echo $brg['stok']; ?></td>
              <td><?php echo $brg['tgl_pinjam']; ?></td>
              <td><?php echo $brg['tgl_balik']; ?></td>
              <td>
                <li">
                  <a href="edit_buku.php?id=<?= $brg['id'];  ?>" class="btn btn-warning" role="button">Edit</a> |
                  <a href="hapus.php?id=<?= $brg['id'];  ?>" onclick="return confirm('apakah anda ingin menghapus data ini');" class="btn btn-danger" role="button">Hapus</a>
                  </li>
              </td>
            </tr>
            <?php $no++ ?>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#fff" fill-opacity="1" d="M0,96L48,85.3C96,75,192,53,288,53.3C384,53,480,75,576,117.3C672,160,768,224,864,213.3C960,203,1056,117,1152,96C1248,75,1344,117,1392,138.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
  </section>

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