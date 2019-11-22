<?php
include 'database.php';
$biodata = new Biodata();

$aksi = $_GET['aksi'];

if (isset($_POST['simpan'])) {
    $id2 = $_POST['id'];
    $nama2 = $_POST['nama'];
    $tanggal_lahir2 = $_POST['tanggal_lahir'];
    $tempat_lahir2 = $_POST['tempat_lahir'];
    $jk2 = $_POST['jenis_kelamin'];
    $agama2 = $_POST['agama'];
    $alamat2 = $_POST['alamat'];
    $motivasi_hidup2 = $_POST['motivasi_hidup'];
}
if ($aksi == "tambah") {
    $biodata->create($nama2, $tanggal_lahir2, $tempat_lahir2, $jk2, $agama2, $alamat2,$motivasi_hidup2);
    header("location:index.php");
} elseif ($aksi == "update") {
    $biodata->update($id2, $nama2, $tanggal_lahir2, $tempat_lahir2, $jk2, $agama2, $alamat2, $motivasi_hidup2);
    header("location:index.php");
} elseif ($aksi == "delete") {
    $biodata->delete($_GET['id']);
    header("location:index.php");
}
?>