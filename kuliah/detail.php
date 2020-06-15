<?php
require 'functions.php';

//ambil id dari url
$id = $_GET['id'];
//query member berdasarkan id
$member = query("SELECT * FROM member WHERE id_member = $id");
var_dump($member);
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
    <li>ID Member : </li>
    <li>Nama : </li>
    <li>Alamat : </li>
    <li>No Telp : </li>
  </ul>
</body>

</html>