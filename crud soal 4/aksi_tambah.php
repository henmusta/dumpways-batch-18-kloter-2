<?php
require 'koneksi.php';

$id = $_POST['id'];
$name = $_POST['name'];
$namatype = $_POST['namaskill'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$foto;
// Set path folder tempat menyimpan fotonya
$path = "images/".$fotobaru;
if(move_uploaded_file($tmp, $path))
{ 
$query2 = "INSERT INTO skill_tb (id, name) VALUES ('$id', '$namatype')";
$query = "INSERT INTO users_tb (id, name, photo) VALUES ('$id', '$name', '$fotobaru')";
$hasil2 = mysqli_query($link, $query);
$hasil = mysqli_query($link, $query2);

if (!$hasil2 and !$hasil)
{
    echo die(mysqli_error($link));
}

header("location:index.php");
}
else
{
echo "GAGAL UPLOAD FOTO";
echo "<a href='tambah.php'><br>KEMBALI</a>";
}
?>