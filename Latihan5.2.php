<?php

function formatRupiah($angka): string {
    return 'Rp ' . number_format(num: $angka, decimals: 0, decimal_separator: ',', thousands_separator: '.');
}

class Produk {

    public $namaPembeli;
    public $namaBarang;
    public $hargaBarang;
    public $jumlahBeli;

    public function hitungSubtotal(): float|int {
        return $this->hargaBarang * $this->jumlahBeli;
    }

    public function hitungDiskon($subtotal): float|int {
        if (subtotal > 1000000){
            return $subtotal * 0.1;
        }
        return 0;
    }

    public function hitungTotal(): float|int {
        $subtotal = $this->hitungSubtotal();
        $diskon   = $this->hitungDiskon(subtotal: $subtotal);
        return $subtotal - $diskon;
    }
}

$dataBelanja = [

    [
        "nama"    =>  "Budi",
        "harga"   =>  "Gula 1 L",
        "jumlah"  =>   140000,
        "diskon"  =>   2
    ],

    [
        "nama"    =>  "Sinta",
        "harga"   =>  "Minyak 1 L",
        "jumlah"  =>   140000,
        "diskon"  =>   1
    ]
  
];

echo "<h2>TRANSAKSI 1</h2>";

$errors1 = [];

$nama   =$dataBelanja[0] ["nama"];
$barang =$dataBelanja[0] ["barang"];
$harga  =$dataBelanja[0] ["harga"];
$jumlah =$dataBelanja[0] ["jumlah"];


if (empty($nama)){
   $errors1 [] = "Nama pembeli tidak boleh kosong.";
}

if (empty($harga <= 0)){
    $errors1[] = "Harga harus lebih dari 0.";
}

if (empty($jumlah <= 0)){
    $errors1[] = "Jumlah beli harus lebih dari 0.";
}

if (!empty($errors1)){

foreach ($errors1 as $error) {
    echo $error . "<br>";
}

}else{

$belanja1 = new BelanjaWarung();
$belanja1->namaPembeli = $nama;
$belanja1->namaBarang  = $barang;
$belanja1->namaHarga   = $harga;
$belanja1->jumlahBeli  = $jumlah;

$subtotal = $belanja1->hitungSubtotal();
$diskon   = $belanja1->hitungDiskon(subtotal: $subtotal);
$total    = $belanja1->hitungTotal();

echo "Pembeli : $belanja1->namaPembeli<br>";
echo "Barang : $belanja1->namaBarang<br>";
echo "Subtotal : ". formatRupiah(angka: $subtotal);
echo "Pembeli : ";
echo "Pembeli : $belanja1->namaPembeli<br>";


}



$produk = new Produk();
$produk->nama  = $data['nama'];
$produk->harga = $data['harga'];

$subtotal = $produk->hitungSubtotal(jumlah: $data['jumlah']);
$diskon   = $produk->hitungDiskon(subtotal: $subtotal, persenDiskon: $data['diskon']);
$total    = $produk->hitungTotal(jumlah: $data['jumlah'], persenDiskon: $data['diskon']);

echo "<h2>Hasil Belanja</h2>";
echo "Produk : " . $produk->nama . "<br>";
echo "Harga  : " . formatRupiah(angka: $produk->harga) . "<br>";
echo "Jumlah : " . $data['jumlah'] . "<br>";
echo "Subtotal : " . formatRupiah(angka: $subtotal) . "<br>";
echo "Diskon (" . $data['diskon'] . "%) : " . formatRupiah(angka: $diskon) . "<br>";
echo "<b>Total Bayar : " . formatRupiah(angka: $total) . "</b>";