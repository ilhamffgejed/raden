<html>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<body>
    <nav class="center navbar-dark bg-dark"><h2><b><center><font color ="white">Data Biodata</center></h2></b></nav>
        <center><nav class="center navbar-dark bg-primary"><a href="tambah.php"><font color ="white">Tambah Data</a></button></center>
           <table class="table">
                <tr>
                    <th scope="col"><center>No</center></th>
                    <th scope="col"><center>Nama</center></th>
                    <th scope="col"><center>Tanggal Lahir</center></th>
                    <th scope="col"><center>Tempat Lahir</center></th>
                    <th scope="col"><center>Jenis Kelamin</center></th>
                    <th scope="col"><center>Agama</center></th>
                    <th scope="col"><center>Alamat</center></th>
                    <th scope="col"><center>Motivasi Hidup</center></th>
                    <th scope="col"><center>Aksi</center></th>
                </tr>

                <?php
                include 'database.php';
                $biodata = new Biodata();
                $no = 1;
                foreach ($biodata->index() as $data) {
                    ?>

                    <tr scope="row">
                        <td><center><?php echo $no++; ?></center></td>
                        <td><center><?php echo $data['nama']; ?></center></td>
                        <td><center><?php echo $data['tanggal_lahir']; ?></center></td>
                        <td><center><?php echo $data['tempat_lahir']; ?></center></td>
                        <td><center><?php echo $data['jenis_kelamin']; ?></center></td>
                        <td><center><?php echo $data['agama']; ?></center></td>
                        <td><center><?php echo $data['alamat']; ?></center></td>
                        <td><center><?php echo $data['motivasi_hidup']; ?></center></td>

                        <td><button type="button" class="btn btn-info"><a href="show.php?id=<?php echo $data['id']; ?>"><font color ="white">Tampil</a></button>
                            <button type="button" class="btn btn-warning"><a href="edit.php?id=<?php echo $data['id']; ?>"><font color ="black">Ubah</a></button>
                            <button type="button" class="btn btn-danger"><a href="proses.php?id=<?php echo $data['id']; ?>& aksi=delete" onclick="return confirm('Apakah Anda Yakin Mau Menghapus Data Ini?')"><font color ="white">Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
</body>

</html>