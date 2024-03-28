<title> Data Nilai Mahasiswa </title>
<head> 
    <style>
    h1 {
        text-align: center;
        background-color: antiquewhite;
    }
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }
    table {
        width: 80%;
        margin: 20px auto;
        border-collapse: collapse;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    th, td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color: #007bff;
        color: #fff;
    }
    tr:hover {
        background-color: #f2f2f2;
    }
    tfoot {
        background-color: #007bff;
        color: #fff;
    }
</style>
</head>
<body>
    <h1> Tabel Nilai Mahasiswa </h1>

<table>
    <thead>
        <tr>
            <th> No </th>
            <th> Nama Mahasiswa </th>
            <th> NIM </th>
            <th> Nilai </th>
            <th> Keterangan </th>
            <th> Grade </th>
            <th> Predikat </th>
        </tr>
    </thead>
    <tbody>


<?php

$mahasiswa = array(
    array("2143001", "James", 85),
    array("2143067", "Ali", 70),
    array("2143030", "Arip", 60),
    array("2143099", "Rehan", 75),
    array("2143100", "Putri", 90),
    array("2143005", "Ijay", 55),
    array("2143015", "Bela", 80),
    array("2143021", "Indah", 65),
    array("2143078", "Akbar", 95),
    array("2143050", "Renaldi", 45)
    );


    $nilai_tertinggi = 0;
    $nilai_terendah = 100;
    $total_nilai = 0;
    $jumlah_mahasiswa = count($mahasiswa);


    $no = 1;
    foreach ($mahasiswa as $data) {
        $nim = $data[0];
        $nama = $data[1];
        $nilai = $data[2];
        $keterangan = ($nilai >= 65) ? "Lulus" : "Tidak Lulus";
        $grade = "";
        $predikat = "";

    if ($nilai >= 80) {
    $grade = "A";
    $predikat = "Memuaskan";
    } 
    else if ($nilai >= 70) { $grade = "B";
    $predikat = "Bagus";

    } else if ($nilai >= 60) {
    $grade = "C";
    $predikat = "Cukup";

    } else if ($nilai >= 50) {
    $grade = "D";
    $predikat = "Kurang";
    } else {
    $grade = "E";
    $predikat = "Buruk";
    }


    if ($nilai > $nilai_tertinggi) {
    $nilai_tertinggi = $nilai;
    }
    if ($nilai < $nilai_terendah) {
    $nilai_terendah = $nilai;
    }
    $total_nilai += $nilai;


    echo "<tr>";
    echo "<td>" . $no . "</td>";
    echo "<td>" . $nama . "</td>";
    echo "<td>" . $nim . "</td>";
    echo "<td>" . $nilai . "</td>";
    echo "<td>" . $keterangan . "</td>";
    echo "<td>" . $grade . "</td>";
    echo "<td>" . $predikat . "</td>";
    echo "</tr>";
    $no++;
 }
?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="6">Nilai Tertinggi:</td>
            <td><?php echo $nilai_tertinggi; ?></td>
        </tr>
        <tr>
            <td colspan="6">Nilai Terendah:</td>
            <td><?php echo $nilai_terendah; ?></td>
        </tr>
        <tr>
            <td colspan="6">Nilai Rata-rata:</td>
            <td><?php echo round($total_nilai / $jumlah_mahasiswa, 2); ?></td>
        </tr>
        <tr>
            <td colspan="6">Jumlah Mahasiswa:</td>
            <td><?php echo $jumlah_mahasiswa; ?></td>
        </tr>
        <tr>
            <td colspan="6">Jumlah Keseluruhan Nilai:</td>
            <td><?php echo $total_nilai; ?></td>
        </tr>
    </tfoot>
</table>

</body>