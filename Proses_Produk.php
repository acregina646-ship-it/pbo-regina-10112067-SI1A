<?php
function formatRupiah($angka): string {
    return "Rp" . number_format($angka, 0, ',', '.');
}

class Produk{
    public $nama;
    public $harga;

    public function hitungSubtotal($jumlah): float|int{
        return $this->harga * $jumlah;
    }

    public function hitungDiskon($subtotal, $persenDiskon): float|int{
        return ($persenDiskon / 100) * $subtotal;
    }

    public function hitungTotal($jumlah, $persenDiskon): float|int{
        $subtotal = $this->hitungSubtotal(jumlah: $jumlah);
        $diskon = $this->hitungDiskon(subtotal: $subtotal, persenDiskon: $persenDiskon);
        return $subtotal- $diskon;
    } 
}
$data =[
    "nama" =>htmlspecialchars(string: $_POST['nama']),
    "harga" =>(int) $_POST ['harga'],
    "jumlah" =>(int) $_POST ['jumlah'],
    "diskon" =>(int) $_POST ['diskon']
];

$p = new Produk();
$p->nama = $data["nama"];
$p->harga = $data["harga"];

$subtotal = $p->hitungSubtotal(jumlah: $data["jumlah"]);
$diskon = $p->hitungDiskon(subtotal: $subtotal, persenDiskon: $data["diskon"]);
$total = $p->hitungTotal(jumlah: $data["jumlah"], persenDiskon: $data["diskon"]);

echo "<h2>HASIL BELANJA</h2>";
echo "Produk : " . $p->nama . "<br>";
echo "Harga : " . formatRupiah($p->harga) . "<br>";
echo "Jumlah : " . $data["jumlah"] . "<br>";
echo "Subtotal : " . formatRupiah($subtotal) . "<br>";
echo "Diskon (" . $data["diskon"] . "%) : - " . formatRupiah($diskon) . "<br>";
echo "<b>Total Bayar : " . formatRupiah($total) . "</b>";

?>