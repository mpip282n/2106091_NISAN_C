<!-- index.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Data Pengeluaran Harian</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="kotak">
        <h1>Data Pengeluaran Harian</h1>
        <form action="./pengeluaran.php" method="post">
            <div class="form-group">
                <label for="id">ID</label>
                <input type="text" name="id" maxlength="12" class="form-input" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" maxlength="50" class="form-input" required>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" name="tanggal" class="form-input" required>
            </div>
            <div class="form-group">
                <label for="makan">Makan</label>
                <input type="text" name="makan" maxlength="30" class="form-input" required>
            </div>
            <div class="form-group">
                <label for="transportasi">Transportasi</label>
                <input type="text" name="transportasi" maxlength="30" class="form-input" required>
            </div>
            <div class="form-group">
                <label for="belanja">Belanja</label>
                <input type="text" name="belanja" maxlength="30" class="form-input" required>
            </div>
            <button type="submit" id="btn-kirim">Kirim</button>
        </form>
    </div>
</body>

</html>
