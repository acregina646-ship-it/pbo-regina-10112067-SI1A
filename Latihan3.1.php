
<?php
class Kendaraan
{
    public $jumlahRoda = 4;
    public $warna;
    public $bahanBakar = "Premium";
    public $harga = 100000000;
    public $merek;
    public $tahunPembuatan = 2004;

    public function statusHarga()
    {
        if ($this->harga > 50000000) {
            return "Harga Kendaraan Mahal";
        } else {
            return "Harga Kendaraan Murah";
        }
    }

    public function statusSubsidi()
    {
        if ($this->tahunPembuatan < 2005 && $this->bahanBakar == "Premium") {
            return "DAPAT SUBSIDI";
        } else {
            return "TIDAK DAPAT SUBSIDI";
        }
    }
}

// instansiasi objek
$ObjekKendaraan = new Kendaraan();

// menampilkan hasil
echo "Objek Kendaraan<br>";
echo "jumlahRoda : " . $ObjekKendaraan->jumlahRoda . "<br>";
echo "Status Harga : " . $ObjekKendaraan->statusHarga() . "<br>";
echo "Status Subsidi :" . $ObjekKendaraan->statusSubsidi() . "<br><br>";


// Objek Kendaraan 1
$ObjekKendaraan1 = new Kendaraan();
$ObjekKendaraan1->harga = 1000000;
$ObjekKendaraan1->tahunPembuatan = 1999;

echo "Objek Kendaraan 1<br>";
echo "Status Harga : " . $ObjekKendaraan1->statusHarga() . "<br><br>";

// Objek Kendaraan 2
$ObjekKendaraan2 = new Kendaraan();
$ObjekKendaraan2->harga = 3000000;
$ObjekKendaraan2->tahunPembuatan = 1987;

echo "Objek Kendaraan 2<br>";
echo "Status BBM: " . $ObjekKendaraan2->statusSubsidi() . "<br>";

?>
