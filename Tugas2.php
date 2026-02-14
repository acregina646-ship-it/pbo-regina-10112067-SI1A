<!DOCTYPE html>
<html> <!-- html memiliki banyak fungsi, contohnya menampilkan judul halaman -->
<head>
    <title>Kalkulator Suhu</title> 
</head>
<body>

<h2>Kalkulator Suhu</h2> 

<form method="post">
    Nilai suhu:
    <input type="number" name="nilai" required> <!-- digunakan untuk menginputkan nilai/angka suhu -->
    <br><br>

    Dari: 
    <select name="dari"> <!-- opsi ini digunakan untuk memilih suhu asal yang dipilih user-->
        <option value="C">Celsius</option>
        <option value="F">Fahrenheit</option>
        <option value="R">Reamur</option>
        <option value="K">Kelvin</option>
    </select>

    Ke: <!-- berbeda dengan opsi ini digunakan untuk memilih tujuan yang dipilih user -->
    <select name="ke">
        <option value="C">Celsius</option>
        <option value="F">Fahrenheit</option>
        <option value="R">Reamur</option>
        <option value="K">Kelvin</option>
    </select>

    <br><br>
    <button type="submit">Hitung</button>
</form>

<?php
// $_POST digunakan untuk mengambil data dari form yang dikirimkan oleh user
if($_POST){

    $n = $_POST['nilai']; 
    $d = $_POST['dari'];
    $k = $_POST['ke']; //ke tiga variable ini digunakan untuk mengambil pilihan suhu tujuan

    // if else digunakan untuk menentukan rumus konversi suhu
    // suhu awal yang di input user diubah dulu ke Celsius
    if($d=="F") 
        $c = ($n-32)*5/9;   // rumus Fahrenheit ke Celsius
    elseif($d=="R") 
        $c = $n*5/4;        // rumus Reamur ke Celsius
    elseif($d=="K") 
        $c = $n-273;        // rumus Kelvin ke Celsius
    else 
        $c = $n;            // jika sudah Celsius

    // konversi dari Celsius ke suhu tujuan
    if($k=="F") 
        $hasil = ($c*9/5)+32;  // Celsius ke Fahrenheit
    elseif($k=="R") 
        $hasil = $c*4/5;       // Celsius ke Reamur
    elseif($k=="K") 
        $hasil = $c+273;       // Celsius ke Kelvin
    else 
        $hasil = $c;

    // echo digunakan untuk menampilkan hasil di halaman web
    echo "<h3>Hasil: $hasil °$k</h3>";
}
?>

</body>
</html>
