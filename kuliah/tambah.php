<?php
require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
      alert ('Data Berhasil Ditambahkan');
      document.location.href = 'latihan3.php';
    </script>";
  } else {
    echo "data gagal ditambahkan";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Member</title>
</head>

<body>
  <h3>Form Tambah Data Member</h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label>
          ID Member :
          <input type="text" name="id_member" autofocus required>
        </label>
      </li>
      <li>
        <label>
          Nama :
          <input type="text" name="nama" required>
        </label>
      </li>
      <li>
        <label>
          Alamat :
          <input type="text" name="alamat" required>
        </label>
      </li>
      <li>
        <label>
          No Telepon :
          <input type="text" name="no_telp" required>
        </label>
      </li>
      <li>
        <button type="submit" name="tambah">Tambah Data</button>
      </li>
    </ul>
  </form>
</body>

</html>