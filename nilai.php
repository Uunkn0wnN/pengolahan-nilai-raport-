<!DOCTYPE html>
<html>
<head>
    <title>home</title>
    <link rel="website icon" type=".webp" href="https://cdn.discordapp.com/avatars/547776823585669121/81ed106ea196210828e69eb73c9d8445.webp">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>NILAI INPUT</h1>

    <form action="main.php" method="post">
        <input type="hidden" name="nama" value="<?php echo isset($_POST['nama']) ? $_POST['nama'] : ''; ?>">
        <input type="hidden" name="kelas" value="<?php echo isset($_POST['kelas']) ? $_POST['kelas'] : ''; ?>">
        <table border="1">
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
            <a href="https://uunkn0wnn.github.io/unknown/">Uunkn0wnN</a>
            <br>
            <a href="https://github.com/Uunkn0wnN">XII IPS 2</a>
        </p>
    </footer>
</body>
</html>