<?php
class Pengeluaran {
    private $id_pengeluaran;
    private $tanggal;
    private $keterangan;
    private $catatan;
    private $jumlah;
    public $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function tambahpengeluaran( $id_pengeluaran,$tanggal,$keterangan,$catatan,$jumlah) {
        $this->id_pengeluaran = $id_pengeluaran;
        $this->tanggal = $tanggal;
        $this->keterangan = $keterangan;
        $this->catatan = $catatan;
        $this->jumlah = $jumlah;

        $query = "INSERT INTO pengeluaran (id_pengeluaran, tanggal, keterangan, catatan, jumlah) VALUES ('$this->id_pengeluaran', '$this->tanggal', '$this->keterangan', '$this->catatan', '$this->jumlah')";

        if($this->conn->query($query)) {

            //redirect ke halaman index.php 
            header("location: ../../admin_pengeluaran.php");
        
        } else {
        
            //pesan error gagal insert data
            echo "Data Gagal Disimpan!";
        
        }
}

public function hapuspengeluaran($id_pengeluaran) {
    $this->id_pengeluaran = $id_pengeluaran;
    $query = "DELETE FROM pengeluaran WHERE id_pengeluaran = '$this->id_pengeluaran'";

    if($this->conn->query($query)) {
        header("location: ../../admin_pengeluaran.php");
    } else {
        echo "DATA GAGAL DIHAPUS!";
    }
}

public function updatepengeluaran($id_pengeluaran,$tanggal,$keterangan,$catatan,$jumlah) {
    $this->id_pengeluaran = $id_pengeluaran;
    $this->tanggal = $tanggal;
    $this->keterangan = $keterangan;
    $this->catatan = $catatan;
    $this->jumlah = $jumlah;
    $query = "UPDATE pengeluaran SET 
            tanggal = '$this->tanggal', 
            keterangan = '$this->keterangan', 
            catatan = '$this->catatan',
            jumlah = '$this->jumlah'
          WHERE id_pengeluaran = '$this->id_pengeluaran'";

    if($this->conn->query($query)) {
        header("location: ../../admin_pengeluaran.php");
    } else {
        echo "DATA GAGAL DIHAPUS!";
    }
}

}
?>
