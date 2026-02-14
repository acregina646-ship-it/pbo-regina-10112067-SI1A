<!DOCTYPE html> <!--html digunakan untuk menambahkan nama /judul pada halaman dan untuk menambahkan button-->
<html>
<head>
    <title>Konversi Suhu</title>
</head>
<body>

<h2>Kalkulator Konversi Suhu</h2>

<!-- Form input suhu oleh user -->
<form method="post">
    Masukkan suhu (Celsius):
    <input type="number" name="nilai" step="any" required>
    <br><br>

    <!-- Button untuk menjalankan perhitungan -->
    <button type="submit">Hitung Suhu</button>
</form>

<?php
// Class untuk konversi suhu sebagai blue print
class KalkulatorSuhu {

    // Property dalam kalkulator suhu
    public float $celcius;
    public float $fahrenheit = 0;
    public float $kelvin = 0;
    public float $reamur = 0;

    // Constructor menerima nilai input pengguna/user
    public function __construct($nilai){
        $this->celcius = $nilai;
    }

    // Method proses konversi suhu 
    public function konversi(){
        $this->fahrenheit = ($this->celcius * 9/5) + 32;
        $this->kelvin = $this->celcius + 273.15;
        $this->reamur = $this->celcius * 4/5;
    }

    // Method menampilkan hasil
    public function tampilkan(){
        $this->konversi();

        echo "<h3>Hasil Konversi</h3>";
        echo "Celsius : $this->celcius C<br>";
        echo "Fahrenheit : $this->fahrenheit F<br>";
        echo "Kelvin : $this->kelvin K<br>";
        echo "Reamur : $this->reamur R<br>";
    }
}

// Jika tombol ditekan maka hasil ditampilkan
if($_POST){
    $hasilSuhu = new KalkulatorSuhu($_POST['nilai']);
    $hasilSuhu->tampilkan();
}
?>

</body>
</html>
