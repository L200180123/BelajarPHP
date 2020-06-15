<?php
require 'functions.php';

//ambil id dari url
$id = $_GET['id'];

//query member berdasarkan id
$m = query("SELECT * FROM member WHERE id_member = '$id'");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Member</title>
</head>

<body>
  <h3>Detail Member</h3>
  <ul>
    <li>ID Member : <?= $m['id_member']; ?></li>
    <li>Nama : <?= $m['nama']; ?></li>
    <li>Alamat : <?= $m['alamat']; ?></li>
    <li>No Telp : <?= $m['no_telp']; ?></li>
    <li><a href="">Ubah</a> | <a href="">Hapus</a></li>
    <li><a href="latihan3.php">Kembali ke daftar member</a></li>
  </ul>
</body>

</html>