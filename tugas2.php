<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $produk = $_POST['produk'];
    $harga_satuan = $_POST['harga_satuan'];
    $jumlah_beli = $_POST['jumlah_beli'];
    $total_belanja = $harga_satuan * $jumlah_beli;

    if ($total_belanja >= 500000) {
        $diskon = 0.2 * $total_belanja;
    } else {
        $diskon = 0;
    }

    $ppn = 0.1 * ($total_belanja - $diskon);
    $harga_bersih = ($total_belanja - $diskon) + $ppn;
}
?>

<h1>Form Belanja</h1>
<form action="tugas2.php" method="POST">
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 600px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    label {
        font-weight: bold;
    }

    input[type="text"],
    select {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    button[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #4caf50;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #45a049;
    }

</style>

    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama Pelanggan:</label>
        <div class="col-8">
            <input id="nama" name="nama" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-4 col-form-label" for="produk">Produk Pilihan</label>
        <div class="col-8">
            <select id="produk" name="produk" class="custom-select">
                <option value="">--- PILIH PRODUK ---</option>
                <option value="ac">AC</option>
                <option value="kursi">Kursi</option>
                <option value="meja">Meja</option>
                <option value="lemari">Lemari</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="harga_satuan" class="col-4 col-form-label">Harga Satuan</label>
        <div class="col-8">
            <input id="harga_satuan" name="harga_satuan" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="jumlah_beli" class="col-4 col-form-label">Jumlah Beli</label>
        <div class="col-8">
            <input id="jumlah_beli" name="jumlah_beli" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo '<h2>Ringkasan Belanja:</h2>';
    echo 'Nama Pelanggan: ' . $nama . '<br>';
    echo 'Produk Pilihan: ' . $produk . '<br>';
    echo 'Jumlah Beli: ' . $jumlah_beli . '<br>';
    echo 'Total Belanja: Rp ' . number_format($total_belanja, 0, ',', '.') . '<br>';
    echo 'Diskon: Rp ' . number_format($diskon, 0, ',', '.') . '<br>';
    echo 'PPN: Rp ' . number_format($ppn, 0, ',', '.') . '<br>';
    echo 'Harga Bersih: Rp ' . number_format($harga_bersih, 0, ',', '.') . '<br>';
}
?>
