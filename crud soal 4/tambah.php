<?php
require 'koneksi.php';
?>
<!doctype html>
<html>
    <head>
        <title>dumpways</title>
        <link rel="stylesheet" href="bootstrap.min.css"/>
    </head>
    <body>
        <div style="width: 300px; padding: 15px">
            <form action="aksi_tambah.php" method="post" enctype="multipart/form-data">
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
				<div class="form-group">
                    <input type="submit" value="Simpan" class="btn btn-primary">
                </div>
			</tr>
		</table>
             
            </form>
        </div>
    </body>
</html>