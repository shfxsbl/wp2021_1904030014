<?php
$conn = mysqli_connect('localhost', 'root', '', 'uas_1904030014');

// pemanggilan tabel
function query($query)
{
  global $conn;

  // mengambil seluruh data pada tabel
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  // pemanggilan elemen data dengan rapih
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  global $conn;

  $jdl_buku = htmlspecialchars($data['judul']);
  $stok_buku = htmlspecialchars($data['stok']);
  $pinjam = htmlspecialchars($data['tgl_pinjam']);
  $balik = htmlspecialchars($data['tgl_balik']);

  $query = "INSERT INTO buku
VALUES
(null,'$jdl_buku','$stok_buku','$pinjam','$balik');";
  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function tambaha($data)
{
  global $conn;

  $nama_anggota = htmlspecialchars($data['nama']);
  $nomor = htmlspecialchars($data['notelp']);
  $alamat = htmlspecialchars($data['alamat']);

  $query = "INSERT INTO anggota
VALUES
(null,'$nama_anggota','$nomor','$alamat');";
  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function editb($data)
{
  global $conn;

  $id = $data['id'];
  $judul_buku = htmlspecialchars($data['judul']);
  $stok_buku = htmlspecialchars($data['stok']);
  $pinjam = htmlspecialchars($data['tgl_pinjam']);
  $balik = htmlspecialchars($data['tgl_balik']);

  $query = "UPDATE buku SET 
  judul = '$judul_buku',
  stok = '$stok_buku',
  tgl_pinjam = '$pinjam',
  tgl_balik = '$balik'
  WHERE id = $id; ";

  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function edit($data)
{
  global $conn;

  $id = $data['id'];
  $nama_anggota = htmlspecialchars($data['nama']);
  $notelpon = htmlspecialchars($data['notelp']);
  $alamata = htmlspecialchars($data['alamat']);

  $query = "UPDATE anggota SET 
  nama = '$nama_anggota',
  notelp = '$notelpon',
  alamat = '$alamata'
  WHERE id = $id; ";

  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM buku WHERE id =$id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function hapusa($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM anggota WHERE id =$id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  global $conn;

  $query = "SELECT * FROM buku WHERE judul LIKE '%$keyword%'";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function caria($keyword)
{
  global $conn;

  $query = "SELECT * FROM anggota WHERE nama LIKE '%$keyword%'";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}