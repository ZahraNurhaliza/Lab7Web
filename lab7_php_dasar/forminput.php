<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input </title>
</head>
<body>
    <h1 class="form">Form Input</h1>
    <div class="container">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="input-group">
                <label for="nama">Nama </label>
                <input type="text" name="nama">
            </div>
            <div class="input-group">
                <label for="tanggal_lahir">Tanggal Lahir </label>
                <input type="date" name="tanggal_lahir">
            </div>
            <div class="input-group">
                <label for="pekerjaan">Pekerjaan </label>
                <select name="pekerjaan">
                    <option value="Beauty Blogger">Beauty Blogger</option>
                    <option value="Penyanyi">Penyanyi</option>
                    <option value="Aktor">Aktor</option>
                </select>
            </div>
            
            <input type="submit" name="submit" value="Submit" class="btn">
        </form>
    </div>
    
    <?php
    // Fungsi untuk menghitung umur berdasarkan tanggal lahir
    function hitungUmur($tanggal_lahir) {
        $today = new DateTime();
        $tanggal_lahir = new DateTime($tanggal_lahir);
        $umur = $today->diff($tanggal_lahir);
        return $umur->y;
    }

    // Daftar pekerjaan beserta gaji
    $pekerjaan_gaji = array(
        'Beauty Blogger' => 5000000,
        'Penyanyi' => 1000000000,
        'Aktor' => 2000000000
    );

    // Memproses form jika sudah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil data dari form
        $nama = $_POST["nama"];
        $tanggal_lahir = $_POST["tanggal_lahir"];
        $pekerjaan = $_POST["pekerjaan"];

        // Validasi data
        if (empty($nama) || empty($tanggal_lahir) || empty($pekerjaan)) {
            echo "Harap lengkapi semua field!";
        } else {
            // Menghitung umur
            $umur = hitungUmur($tanggal_lahir);

            // Menampilkan output
            echo "<h2>Hasil Input</h2>";
            echo "<p><span>Nama         :</span> $nama</p>";
            echo "<p><span>Tanggal Lahir:</span> $tanggal_lahir</p>";
            echo "<p><span>Pekerjaan    :</span> $pekerjaan</p>";
            echo "<p><span>Umur         :</span> $umur tahun</p>";
            echo "<p><span>Gaji         :</span> " . number_format($pekerjaan_gaji[$pekerjaan]) . "</p>";
        }
    }
    ?>
</body>
</html>