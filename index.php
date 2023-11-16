<!DOCTYPE html>
<html>
<head>
    <title>home</title>
    <link rel="website icon" type=".webp" href="https://cdn.discordapp.com/avatars/547776823585669121/81ed106ea196210828e69eb73c9d8445.webp">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #333399, #ff00cc);
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            color: #333;;
            margin-top: 150px !important;
        }
        table {
            margin: 0 auto;
            border-collapse: collapse;
            background-color: white;
            width: 60%;
            border: 1px solid #ccc; 
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            margin-top: px 50!important;
        }
        td {
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
            background-color: #db02b0cc;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            color: black !important;
            text-align: center;
            padding: 10px;
        }

        footer a {
            color: black;
            text-decoration: none;
        }
        form {
            text-align: center;
            margin: 0 auto;
            width: 80%; /* Adjust the width as per your needs */
            @media (max-width: 768px) {
                width: 90%; /* Adjust the width for smaller screens */
            }
        }
    </style>
</head>
<body>
    <h1>WELCOME</h1>
    <form action="nilai.php" method="post">
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
                <td><input type="submit" name="ngirim" value="NEXT"></td>
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