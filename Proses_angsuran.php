<?php
class Angsuran {
    public $pinjaman;
    public $bunga;
    public $lama;
    public $telat;

    // Method total pinjaman
    public function totalPinjaman() {
        return $this->pinjaman + ($this->pinjaman * $this->bunga / 100);
    }

    // Method angsuran per bulan
    public function angsuran() {
        return $this->totalPinjaman() / $this->lama;
    }

    // Method denda keterlambatan
    public function denda() {
        return $this->angsuran() * 0.15 / 100 * $this->telat;
    }

    // Method total bayar
    public function totalBayar() {
        return $this->angsuran() + $this->denda();
    }
}

// Ambil data dari form
$a = new Angsuran();
$a->pinjaman = $_POST['pinjaman'];
$a->bunga = $_POST['bunga'];
$a->lama = $_POST['lama'];
$a->telat = $_POST['telat'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Perhitungan</title>
</head>
<body>

<h2>Hasil Perhitungan</h2>

<?php
echo "Total Pinjaman : Rp " . $a->totalPinjaman() . "<br>";
echo "Angsuran Per Bulan : Rp " . $a->angsuran() . "<br>";
echo "Denda Keterlambatan : Rp " . $a->denda() . "<br>";
echo "Total Pembayaran : Rp " . $a->totalBayar() . "<br>";
?>

</body>
</html>