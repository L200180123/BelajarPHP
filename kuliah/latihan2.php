<?php
require 'functions.php';
$member = query("SELECT * FROM member");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Member</title>
</head>

<body>
  <h3>Daftar Member</h3>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>ID Member</th>
      <th>Nama</th>
      <th>Alamat</th>
      <th>No Telp</th>
      <th>Aksi</th>
    </tr>
    <?php $i = 1;
    foreach ($member as $m) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><?= $m['id_member']; ?></td>
        <td><?= $m['nama']; ?></td>
        <td><?= $m['alamat']; ?></td>
        <td><?= $m['no_telp']; ?></td>
        <td>
          <a href="">Ubah</a> | <a href="">Hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>