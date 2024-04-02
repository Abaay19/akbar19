<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            border-bottom: 2px solid white;
            border-top: 2px solid white;
            background-color: black;
            color: white;
            text-align: center;
        }
        th {
            background-color: black;
            color: white;
            text-align: center;
        }
    </style>





<?php
// Pastikan metode yang digunakan adalah POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangkap nilai dari formulir
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $kuliah = $_POST['kuliah'];
    $matkul = $_POST['matkul'];
    $nilai = $_POST['nilai'];
    $grade = $_POST['grade'];
    $predikat = $_POST['predikat'];
    $status = $_POST['status'];

    // Termasuk file Mahasiswa.php
    require_once 'Mahasiswa.php';

    // Buat objek Mahasiswa dengan nilai dari formulir
    $mahasiswa = new Mahasiswa($nim, $nama, $kuliah, $matkul, $nilai, $grade, $predikat, $status);

    // Tampilkan data Mahasiswa
    echo "<h2>Data Mahasiswa</h2>";
    echo "<table border='1'>";
    echo "<tr><th>NIM</th>
        <th>Nama</th>
        <th>Kuliah</th>
        <th>Mata Kuliah</th>
        <th>Nilai</th>
        <th>Grade</th>
        <th>Predikat</th>
        <th>Status</th>
        </tr>";
    echo "<tr>";
    echo "<td>" . $mahasiswa->nim . "</td>";
    echo "<td>" . $mahasiswa->nama . "</td>";
    echo "<td>" . $mahasiswa->kuliah . "</td>";
    echo "<td>" . $mahasiswa->matkul . "</td>";
    echo "<td>" . $mahasiswa->nilai . "</td>";
    echo "<td>". $mahasiswa->grade ."</td>";
    echo "<td>". $mahasiswa->predikat ."</td>";
    echo "<td>". $mahasiswa->status ."</td>";
    echo "</tr>";
    echo "</table>";
}
?>