<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'perpustakaanku');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  //jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $id_member = htmlspecialchars($data['id_member']);
  $nama = htmlspecialchars($data['nama']);
  $alamat = htmlspecialchars($data['alamat']);
  $no_telp = htmlspecialchars($data['no_telp']);

  $query = "INSERT INTO member VALUES ('$id_member','$nama','$alamat','$no_telp')";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
