<!DOCTYPE html>
<html>
<head>
    <title>BAGAS PUTRA RAMADHAN</title>
</head>
<body>
    <h1>Pengolahan Nilai Raport</h1>

    <form action="main.php" method="post">
        <table border="1">
            <tr>
                <td>NAMA :</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>KELAS :</td>
                <td>
                    <select name="kelas">
                        <option value="XII IPS 1">XII IPS 1</option>
                        <option value="XII IPS 2">XII IPS 2</option>
                        <option value="XII IPS 3">XII IPS 3</option>
                        <option value="XII IPS 4">XII IPS 4</option>
                        <option value="XII IPS 5">XII IPS 5</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>NILAI MTK :</td>
                <td><input type="number" name="nilai_mtk" min="0" max="100" required></td>
            </tr>
            <tr>
                <td>NILAI KETERAMPILAN MTK :</td>
                <td><input type="number" name="keterampilan_mtk" min="0" max="100" required></td>
            </tr>
            <tr>
                <td>NILAI SOSIOLOGI :</td>
                <td><input type="number" name="nilai_sosio" min="0" max="100" required></td>
            </tr>
            <tr>
                <td>NILAI KETERAMPILAN SOSIOLOGI :</td>
                <td><input type="number" name="keterampilan_sosio" min="0" max="100" required></td>
            </tr>
            <tr>
                <td>NILAI BIOLOGI :</td>
                <td><input type="number" name="nilai_bio" min="0" max="100" required></td>
            </tr>
            <tr>
                <td>NILAI KETERAMPILAN BIOLOGI :</td>
                <td><input type="number" name="keterampilan_bio" min="0" max="100" required></td>
            </tr>
            <tr>
                <td>NILAI AGAMA :</td>
                <td><input type="number" name="nilai_agama" min="0" max="100" required></td>
            </tr>
            <tr>
                <td>NILAI KETERAMPILAN AGAMA :</td>
                <td><input type="number" name="keterampilan_agama" min="0" max="100" required></td>
            </tr>
            <tr>
                <td><input type="submit" name="ngirim" value="Submit"></td>
            </tr>
        </table>
    </form>

    <footer>
        <p>
            <a href="https://uunkn0wnn.github.io/unknown/">Bagas Putra Ramadhan</a>
            <br>
            <a href="https://github.com/Uunkn0wnN">XII IPS 2</a>
        </p>
    </footer>
</body>
</html>