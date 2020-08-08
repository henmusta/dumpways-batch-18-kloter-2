<?php
require 'koneksi.php';
$idhero = $_GET['idhero'];
$query = "SELECT * FROM users_tb WHERE id = '$idhero'";
$hasil = mysqli_query($link, $query);
$data = mysqli_fetch_array($hasil);

?>
<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="bootstrap.min.css"/>
    </head>
    <body>
        <div style="width: 300px; padding: 15px">
            <form action="aksi_ubah.php" method="POST" enctype="multipart/form-data">
                
                <table cellpadding="5" cellspacing="0">
			<tr>
				<td>(id)</td>
				<td>:</td><br>
				<td><input type="text" name="id" required></td>
			</tr>
			<tr>
				<td>(Nama)</td>
				<td>:</td><br>
				<td><input type="text" name="name" size="100" required></td>
			</tr>
			<tr>
				<td>(nama skill)</td>
				<td>:</td><br>
				<td>
					<input type="text" name="namaskill" size="100" required>
				</td>
			</tr>
			<tr>
				<td>Foto</td>
   			 <td><input type="file" name="foto"></td>
			</tr>
			<tr>
                    <input type="hidden" name="idhero" value="<?php echo $data['id'] ?>" class="btn btn-primary">
                    <input type="submit" value="Update" class="btn btn-primary">
			</tr>
		</table>
                
            </form>
        </div>
        <script src="jquery-2.1.4.min.js"></script>
    </body>
</html>