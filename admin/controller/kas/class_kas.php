<?php
class Kas {
    private $nama_anggota;
    private $id_anggota;
    private $week1;
    private $week2;
    private $week3;
    private $week4;
    public $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function tambahKas($nama_anggota) {
        $this->nama_anggota = $nama_anggota;

        $query = "INSERT INTO uang_kas (nama_anggota, week1, week2, week3, week4) VALUES ('$this->nama_anggota', 0, 0,0,0)";

        if($this->conn->query($query)) {

            //redirect ke halaman index.php 
            header("location: ../../admin_pembayaran.php");
        
        } else {
        
            //pesan error gagal insert data
            echo "Data Gagal Disimpan!";
        
        }
}

    public function hapusKas($id_anggota) {
        $this->id_anggota = $id_anggota;
        $query = "DELETE FROM uang_kas WHERE id_anggota = '$this->id_anggota'";

        if($this->conn->query($query)) {
            header("location: ../../admin_pembayaran.php");
        } else {
            echo "DATA GAGAL DIHAPUS!";
        }
}

    public function updateKas($id_anggota,$nama_anggota,$week1,$week2,$week3,$week4) {
        $this->id_anggota = $id_anggota;
        $this->nama_anggota = $nama_anggota;
        $this->week1 = $week1;
        $this->week2 = $week2;
        $this->week3 = $week3;
        $this->week4 = $week4;
        $query = "UPDATE uang_kas SET  week1 = '$this->week1',
        week2 = '$this->week2',week3 = '$this->week3',week4 = '$this->week4',nama_anggota = '$this->nama_anggota' 
        WHERE id_anggota = '$this->id_anggota'";

        if($this->conn->query($query)) {
            header("location: ../../admin_pembayaran.php");
        } else {
            echo "DATA GAGAL DIHAPUS!";
        }
    }
}   
?>
