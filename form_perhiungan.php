<!DOCTYPE html>
<html>
<head>
    <title>Form Perhitungan Angsuran</title>
</head>
<body>

<h2>Form Input Angsuran</h2>

<form action="proses_angsuran.php" method="post">
    
    <label>Pinjaman:</label><br>
    <input type="number" name="pinjaman" required><br><br>

    <label>Bunga (%):</label><br>
    <input type="number" name="bunga" step="0.01" required><br><br>

    <label>Lama Angsuran (bulan):</label><br>
    <input type="number" name="lama" required><br><br>

    <label>Telat (hari):</label><br>
    <input type="number" name="telat" required><br><br>

    <button type="submit">Hitung</button>

</form>

</body>
</html>