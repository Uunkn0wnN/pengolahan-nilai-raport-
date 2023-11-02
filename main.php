<?php
$hasil = "";
// $status = "";
$sikap = "";
$sikapp = "";
$sikappp = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $nilai_mtk = (float)$_POST['nilai_mtk'];
    $nilai_sosio = (float)$_POST['nilai_sosio'];
    $nilai_bio = (float)$_POST['nilai_bio'];
    $nilai_agama = (float)$_POST['nilai_agama'];
    $keterampilan_mtk = (float)$_POST['keterampilan_mtk'];
    $keterampilan_sosio = (float)$_POST['keterampilan_sosio'];
    $keterampilan_bio = (float)$_POST['keterampilan_bio'];
    $keterampilan_agama = (float)$_POST['keterampilan_agama'];
    $namaa = "Nama Siswa : $nama";
    $kelass = "Kelas : $kelas";
    $kkm = 80;

    if ($nilai_mtk >= $kkm && $nilai_sosio >= $kkm && $nilai_bio >= $kkm && $nilai_agama >= $kkm) {
        $status = "lulus";
    } else {
        $status = "tidak lulus";
    }

    $rata_rata_mtk = ($nilai_mtk + $keterampilan_mtk) / 2;
    $rata_rata_sosio = ($nilai_sosio + $keterampilan_sosio) / 2;
    $rata_rata_bio = ($nilai_bio + $keterampilan_bio) / 2;
    $rata_rata_agama = ($nilai_agama + $keterampilan_agama) / 2;
    $rata_rata = ($nilai_mtk + $nilai_sosio + $nilai_bio + $nilai_agama) / 4;

    if ($nilai_mtk == 60) {
        $hasil = "E";
    } elseif ($nilai_mtk >= 61 && $nilai_mtk <= 70) {
        $hasil = "D";
    } elseif ($nilai_mtk >= 71 && $nilai_mtk <= 80) {
        $hasil = "C";
    } elseif ($nilai_mtk >= 81 && $nilai_mtk <= 90) {
        $hasil = "B";
    } elseif ($nilai_mtk >= 91 && $nilai_mtk <= 100) {
        $hasil = "A";
    }

    if ($nilai_sosio == 60) {
        $sikap = "E";
    } elseif ($nilai_sosio >= 61 && $nilai_sosio <= 70) {
        $sikap = "D";
    } elseif ($nilai_sosio >= 71 && $nilai_sosio <= 80) {
        $sikap = "C";
    } elseif ($nilai_sosio >= 81 && $nilai_sosio <= 90) {
        $sikap = "B";
    } elseif ($nilai_sosio >= 91 && $nilai_sosio <= 100) {
        $sikap = "A";
    }

    if ($nilai_bio == 60) {
        $sikapp = "E";
    } elseif ($nilai_bio >= 61 && $nilai_bio <= 70) {
        $sikapp = "D";
    } elseif ($nilai_bio >= 71 && $nilai_bio <= 80) {
        $sikapp = "C";
    } elseif ($nilai_bio >= 81 && $nilai_bio <= 90) {
        $sikapp = "B";
    } elseif ($nilai_bio >= 91 && $nilai_bio <= 100) {
        $sikapp = "A";
    }

    if ($nilai_agama == 60) {
        $sikappp = "E";
    } elseif ($nilai_agama >= 61 && $nilai_agama <= 70) {
        $sikappp = "D";
    } elseif ($nilai_agama >= 71 && $nilai_agama <= 80) {
        $sikappp = "C";
    } elseif ($nilai_agama >= 81 && $nilai_agama <= 90) {
        $sikappp = "B";
    } elseif ($nilai_agama >= 91 && $nilai_agama <= 100) {
        $sikappp = "A";
    }

    if ($status != "" && $hasil != "" && $sikap != "" && $sikapp != "" && $sikappp != "") {
        echo "<table border='1'>";
        echo "<tr><td colspan='2'>$namaa</td></tr>";
        echo "<tr><td colspan='2'>$kelass</td></tr>";
        echo "<tr><td>Matematika</td><td>Nilai: $nilai_mtk ┃ Keterampilan: $keterampilan_mtk ┃ Rata-rata: $rata_rata_mtk ┃ $hasil</td></tr>";
        echo "<tr><td>Sosiologi</td><td>Nilai: $nilai_sosio ┃ Keterampilan: $keterampilan_sosio ┃ Rata-Rata: $rata_rata_sosio ┃ $sikap</td></tr>";
        echo "<tr><td>Biologi</td><td>Nilai: $nilai_bio ┃ Keterampilan: $keterampilan_bio ┃ Rata-Rata: $rata_rata_bio ┃ $sikapp</td></tr>";
        echo "<tr><td>Agama</td><td>Nilai: $nilai_agama ┃ Keterampilan: $keterampilan_agama ┃ Rata-Rata: $rata_rata_agama ┃ $sikappp</td></tr>";
        echo "<tr><td>Rata-rata</td><td>$rata_rata</td></tr>";
        echo "<tr><td>STATUS</td><td>$status</td></tr>";
        echo "</table>";
    } else {
        echo "Error Data tidak valid";
    }
}
?>