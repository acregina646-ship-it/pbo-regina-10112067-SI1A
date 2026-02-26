<!DOCTYPE html>
<html>
<head>
    <title>Belajar OOP - Form Produk</title>
</head>
<body>
    <h2>Input Data Produk</h2>

    <form method="POST" action="proses_produk.php">
        Nama Produk:
        <input type="text" name="nama" required>
        <br><br>

        Harga:
        <input type="number" name="harga" required>
        <br><br>

        Jumlah:
        <input type="number" name="jumlah" required>
        <br><br>

        Diskon (%):
        <input type="number" name="diskon" required>
        <br><br>

        <button type="submit">Proses</button>
    </form>

</body>
</html>