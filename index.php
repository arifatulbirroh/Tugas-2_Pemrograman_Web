<?php
$nama = "Arifatul";
$nim = "2557071005";

$nilaiTugas = 80;
$nilaiUTS = 75;
$nilaiUAS = 90;

// Function 1: Menghitung Nilai Akhir
function hitungNilaiAkhir($tugas, $uts, $uas) {
    return ($tugas * 0.3) + ($uts * 0.3) + ($uas * 0.4);
}

// Function 2: Menentukan Grade
function tentukanGrade($nilaiAkhir) {
    if ($nilaiAkhir >= 85) {
        return "A";
    } elseif ($nilaiAkhir >= 75) {
        return "B";
    } elseif ($nilaiAkhir >= 65) {
        return "C";
    } elseif ($nilaiAkhir >= 50) {
        return "D";
    } else {
        return "E";
    }
}

// Function 3: Menentukan Status Kelulusan
function tentukanStatus($nilaiAkhir) {
    if ($nilaiAkhir >= 65) {
        return "Lulus";
    } else {
        return "Tidak Lulus";
    }
}

// Memanggil Ketiga Function
$nilaiAkhir = hitungNilaiAkhir($nilaiTugas, $nilaiUTS, $nilaiUAS);
$grade = tentukanGrade($nilaiAkhir);
$status = tentukanStatus($nilaiAkhir);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Penghitung Nilai Mahasiswa</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5eef7;
            padding: 30px;
        }

        .container {
            max-width: 500px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 3px 10px #00000020;
        }

        h2 {
            text-align: center;
            color: #263b60;
        }

        .hasil {
            background: #ecc2bf;
            padding: 20px;
            border-radius: 8px;
            line-height: 1.8;
        }

        .nilai {
            color: #16803c;
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="container">

    <h2>Hasil Perhitungan Nilai Mahasiswa</h2>

    <div class="hasil">

        <h3>Data Mahasiswa</h3>

        <p>Nama: <?php echo $nama; ?></p>
        <p>NIM: <?php echo $nim; ?></p>

        <hr>

        <h3>Nilai Mahasiswa</h3>

        <p>Nilai Tugas: <?php echo $nilaiTugas; ?></p>
        <p>Nilai UTS: <?php echo $nilaiUTS; ?></p>
        <p>Nilai UAS: <?php echo $nilaiUAS; ?></p>

        <hr>

        <h3>Hasil Perhitungan</h3>

        <p>Nilai Akhir:
            <span class="nilai">
                <?php echo number_format($nilaiAkhir, 1, ',', '.'); ?>
            </span>
        </p>

        <p>Grade:
            <span class="nilai"><?php echo $grade; ?></span>
        </p>

        <p>Status:
            <span class="nilai"><?php echo $status; ?></span>
        </p>

    </div>

</div>

</body>
</html>
