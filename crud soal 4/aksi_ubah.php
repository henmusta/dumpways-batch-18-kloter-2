
<?php
require 'koneksi.php';
$id = $_POST['id'];
$name = $_POST['name'];
$namaskill = $_POST['namaskill'];
$idhero = $_POST['idhero'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$foto;
// Set path folder tempat menyimpan fotonya
$path = "images/".$fotobaru;
if(move_uploaded_file($tmp, $path))
{
//mysqli_query($link,"UPDATE heroes_tb SET id = '$id', name = '$name', type_id= '$type' WHERE id = 'idhero'");
 $query = "UPDATE users_tb SET id = '$id', name='$name', photo='$fotobaru' WHERE id = '$idhero'";
 $query2 = "UPDATE skill_tb SET id = '$id', name='$namaskill' WHERE id = '$idhero'";
 $hasil = mysqli_query($link, $query);
 $hasil2 = mysqli_query($link, $query2);

if($hasil and $hasil2)
		{
			echo "DATA BERHASIL DI UPDATE";
			echo "<a href='index.php'><br>KEMBALI</a>";
		}
		else{
			echo "GAGAL MENGUPDATE DATA";
			echo "<a href='index.php'><br>KEMBALI</a>";
		}

// if (!$hasil)
// {
//     echo die(mysqli_error($link));
// }
}
else
{
echo "GAGAL UPLOAD FOTO";
echo "<a href='ubah.php'><br>KEMBALI</a>";
}
// header("location:index.php");
?>