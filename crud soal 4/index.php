<?php
require 'koneksi.php';

function serialize_ke_string($serial)
{
    $hasil = unserialize($serial);
    return implode(', ', $hasil);
}
?>
<!doctype html>
<html>
    <head>
        <title>dumpways</title>
        <link rel="stylesheet" href="bootstrap.min.css"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <a href="tambah.php" class="btn btn-primary">Tambah</a>
        <br><br>
        <table class="table table-bordered">
            <tr>
                <th>id</th>
                <th>name</th>
                <th>nama skill</th>
                <th>photo</th>
                <th>Aksi</th>
            </tr>
            <?php
            $query = "SELECT users_tb.id,users_tb.name as nama, skill_tb.name,users_tb.photo FROM users_tb, skill_tb WHERE users_tb.id=skill_tb.id ORDER BY users_tb.id";
            $hasil = mysqli_query($link, $query);
            while ($row = mysqli_fetch_array($hasil)) {
                ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['nama'] ?></td>
                    <td><?php echo $row['name']?></td>
                    <td style="text-align: center;"><img src="images/<?php echo $row['photo']; ?>" style="width: 120px;"></td>
                    <td>
                        <a href="ubah.php?idhero=<?php echo $row['id'] ?>">Ubah</a> | 
                        <a href="hapus.php?idhero=<?php echo $row['id'] ?>">Hapus</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>