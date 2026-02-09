<?php
//class dalam program ini adalah Belanja
class Belanja 
{
    //di dalam class ada variable, variable tersebut di berikan value
    public string $namaPembeli="Lala"; //6 varible ini merupakan variable instance karena dia berada di dalam class namun terletak di luar method 
    public string $namaBarang="mie";
    public int $hargaBarang=5000;
    public int $jumlahBarang=2;
    public float $totalBayar= 15000;
    public float $diskon=0.5; //diskon adalah tipe data float karena merupakan bilangan desimal

    public static float $pajak= 0.02; //ini adalah variable static

    public function __construct ($namaPembeli){
        $this->namaPembeli = $namaPembeli;
    }

    public function hitungsubtotal(): float{

        $subtotal = $this->hargaBarang * $this->jumlahBarang; //operator aritmatika *

        return $subtotal;
    }

    public function hitungdiskon(): float{
        $diskon = $this->totalBayar * $this->diskon;
        return $diskon;
    }

    public function totalbelanja(): float{
        $totalbelanja = $this->totalBayar - $this->hitungdiskon() + (self::$pajak * $this->totalBayar);
        return $totalbelanja;
    }

    public function tampilRincian ($namaPembeli): void{
     echo "Nama Pembeli : " . $this->namaPembeli . "<br>"; //menggunakan $this karena var namaPembeli terletak di luar Method
     echo "Nama Barang  : " . $this->namaBarang . "<br>"; 
     echo "Harga Barang : " . $this->hargaBarang . "<br>";
     echo "Jumlah Barang : " . $this->jumlahBarang . "<br>";
     echo "subtotal : " . $this->hitungsubtotal() . "<br>";
     echo "Diskon : " . $this->hitungdiskon() . "<br>";
     echo "Total Belanja : " . $this->totalbalanja() . "<br>";
    }


}
   

$Belanja1 = new Belanja (namaPembeli: "Lala");
$Belanja1->tampilRincian(namaPembeli: $Belanja1->namaPembeli); 
$Belanja1 = new Belanja (namaBarang: "mie");
$Belanja1->tampilRincian(namaBarang: $Belanja1->namaBarang);
$Belanja1 = new Belanja (hargaBarang: 5000);
$Belanja1->tampilRincian(hargaBarang: $Belanja1->hargaBarang);

?>