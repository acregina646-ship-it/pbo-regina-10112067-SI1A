<?php
class Mahasiswa {
    public $nama;
    public $kelas;
    public $mataKuliah;
    public $nilai;

    // Constructor
    public function __construct($nama, $kelas, $mataKuliah, $nilai) {
        $this->nama = $nama;
        $this->kelas = $kelas;
        $this->mataKuliah = $mataKuliah;
        $this->nilai = $nilai;
    }
    // Method untuk menentukan kelulusan
    public function keterangan() {
        if ($this->nilai >= 60) {
            return "Lulus Kuis";
        } else {
            return "Tidak Lulus Kuis";
        }
    }
    // Method untuk menampilkan data
    public function tampil() {
        echo "Nama : " . $this->nama . "<br>";
        echo "Kelas : " . $this->kelas . "<br>";
        echo "Mata Kuliah : " . $this->mataKuliah . "<br>";
        echo "Nilai : " . $this->nilai . "<br>";
        echo $this->keterangan() . "<br>";
        echo "<hr>";
    }
}
// Array objek mahasiswa
$dataMahasiswa = array(
    new Mahasiswa("Aditya", "SI 2", "Pemrograman Berorientasi Objek", 80),
    new Mahasiswa("Shinta", "SI 2", "Pemrograman Berorientasi Objek", 75),
    new Mahasiswa("Ineu", "SI 2", "Pemrograman Berorientasi Objek", 55)
);
// Perulangan untuk menampilkan semua data
foreach ($dataMahasiswa as $mhs) {
    $mhs->tampil();
}
?>