<?php
// Koneksi ke DB dan Pilih Koneksi
$conn = mysqli_connect('localhost', 'root', '', 'perpustakaanku');

// Query isi tabel member
$result = mysqli_query($conn, "SELECT * FROM member");
// var_dump($result);

// Ubah data ke dalam array
//$row = mysqli_fetch_row($result); // array numeric
//$row = mysqli_fetch_assoc($result); // array associative
//$row = mysqli_fetch_array($result); // keduanya

$rows = [];

while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}
//var_dump($rows);

// Tampung ke variabel member
$member = $rows;

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