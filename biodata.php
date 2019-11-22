<?php
class Biodata extends Database
{
    //Menamapilkan Semua Data
    public function index()
    {
        $data_biodata = mysqli_query(
            $this->koneksi,
            "select * from biodata"
        );
        return $data_biodata;
    }

    //Menambah Data
    public function create($nama1,$tanggal_lahir1,$tempat_lahir1,$jk1,$agama1,$alamat1,$motivasi_hidup1)
    {
        mysqli_query($this->koneksi, "insert into biodata values
        (null,'$nama1','$tanggal_lahir1','$tempat_lahir1','$jk1','$agama1','$alamat1','$motivasi_hidup1')");
    }
    public function edit($id)
    {
        $data_biodata = mysqli_query($this->koneksi, "select*from biodata where id='$id'");
        return    $data_biodata;
    }
    public function update($id1,$nama1,$tanggal_lahir1,$tempat_lahir1,$jk1,$agama1,$alamat1,$motivasi_hidup1)
    {
        mysqli_query($this->koneksi, "update biodata set nama ='$nama1',tanggal_lahir='$tanggal_lahir1',tempat_lahir='$tempat_lahir1',jenis_kelamin='$jk1',agama='$agama1',alamat='$alamat1',motivasi_hidup='$motivasi_hidup1' where id ='$id1' ");
    }
    public function delete($id1)
    {
        mysqli_query($this->koneksi, "delete from biodata where id=' $id1'");
    }
}
