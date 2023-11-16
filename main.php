<!DOCTYPE html>
<html>
<head>
    <title>home</title>
    <link rel="website icon" type=".png" href="assets/icon.png">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Hammersmith+One&display=swap');
             *{
            margin: 0;
            padding: 0;
            font-family: 'Hammersmith One', sans-serif;
            box-sizing: border-box;
        }
        body {
            background: linear-gradient(to right, #333399, #ff00cc);
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            color: white;
        }
        table {
            margin: 0 auto;
            border-collapse: collapse;
            background-color: white;
            width: 60%;
            border: 1px solid #ccc; 
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
        td, th {
            padding: 10px;
        }
        input[type="number"] {
            width: 96%;
            padding: 5px;
            border: 1px solid #ccc; 
            border-radius: 2px;
            margin: 5px 0;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>SUCCES !</h1>

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
            $status = "LULUS";
        } else {
            $status = "TIDAK LULUS";
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
        echo "<tr><td colspan='5'>$namaa</td></tr>";
        echo "<tr><td colspan='5'>$kelass</td></tr>";
        echo "<tr><th>Mata Pelajaran</th><th>Nilai</th><th>Keterampilan</th><th>Rata-Rata</th><th>Sikap</th></tr>";        
        echo "<tr><td rowspan='1'>Matematika</td><td>$nilai_mtk<td>$keterampilan_mtk</td><td>$rata_rata_mtk</td><td>$hasil</td></tr>";
        echo "<tr><td rowspan='1'>Sosiologi</td><td>$nilai_sosio</td><td>$keterampilan_sosio</td><td>$rata_rata_sosio</td><td>$sikap</td></tr>";        
        echo "<tr><td rowspan='1'>Biologi</td><td>$nilai_bio</td><td>$keterampilan_bio</td><td>$rata_rata_bio</td><td>$sikapp</td></tr>";        
        echo "<tr><td rowspan='1'>Agama</td><td>$nilai_agama</td><td>$keterampilan_agama</td><td>$rata_rata_agama</td><td>$sikappp</td></tr>";
        echo "<tr><td colspan='1'>Rata-rata</td><td colspan='4'>$rata_rata</td></tr>";
        echo "<tr><td colspan='1'>Status</td><td colspan='4'>$status</td></tr>";
        echo "</table>";
    } else {
        echo "Error Data tidak valid";
    }
}
    ?>
</body>
</html>