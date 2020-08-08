<?php
require 'koneksi.php';

$id = $_GET['idhero'];
$query = "DELETE FROM users_tb where id = '$id'";
$query2 = "DELETE FROM skill_tb where id = '$id'";
$hasil = mysqli_query($link, $query);
$hasil2 = mysqli_query($link, $query2);

if (!$hasil2 and !$hasil2)
{
    echo die(mysqli_error($link));
}

header("location:index.php");
?>