<?php
class Pemasukan {
    private $id_pemasukan;
    private $tanggal;
    private $keterangan;
    private $catatan;
    private $jumlah;
    public $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function tambahmasukan( $id_pemasukan,$tanggal,$keterangan,$catatan,$jumlah) {
        $this->id_pemasukan = $id_pemasukan;
        $this->tanggal = $tanggal;
        $this->keterangan = $keterangan;
        $this->catatan = $catatan;
        $this->jumlah = $jumlah;

        $query = "INSERT INTO pemasukan (id_pemasukan, tanggal, keterangan, catatan, jumlah) VALUES ('$this->id_pemasukan', '$this->tanggal', '$this->keterangan', '$this->catatan', '$this->jumlah')";

        if($this->conn->query($query)) {

            //redirect ke halaman index.php 
            header("location: ../../admin_pemasukan.php");
        
        } else {
        
            //pesan error gagal insert data
            echo "Data Gagal Disimpan!";
        
        }
}

public function hapusmasukan($id_pemasukan) {
    $this->id_pemasukan = $id_pemasukan;
    $query = "DELETE FROM pemasukan WHERE id_pemasukan = '$this->id_pemasukan'";

    if($this->conn->query($query)) {
        header("location: ../../admin_pemasukan.php");
    } else {
        echo "DATA GAGAL DIHAPUS!";
    }
}

public function updatemasukan($id_pemasukan,$tanggal,$keterangan,$catatan,$jumlah) {
    $this->id_pemasukan = $id_pemasukan;
    $this->tanggal = $tanggal;
    $this->keterangan = $keterangan;
    $this->catatan = $catatan;
    $this->jumlah = $jumlah;
    $query = "UPDATE pemasukan SET 
            tanggal = '$this->tanggal', 
            keterangan = '$this->keterangan', 
            catatan = '$this->catatan',
            jumlah = '$this->jumlah'
          WHERE id_pemasukan = '$this->id_pemasukan'";

    if($this->conn->query($query)) {
        header("location: ../../admin_pemasukan.php");
    } else {
        echo "DATA GAGAL DIHAPUS!";
    }
}

}
?>
