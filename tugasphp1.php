<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat rumus bangun datar Jajar Genjang</title>
</head>

<body>
    <h1> Bangun Datar Jajar Genjang Rumus Luas</h1>

    <form method="post">
        <table class="edit">
            <tr>
                <td>Sisi Alas</td>
                <td>
                    <input type="text" name="alas" required>
                </td>
            </tr>
            <tr>
                <td>Sisi Tinggi</td>
                <td>
                    <input type="text" name="tinggi" required>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="hitung">
                </td>
            </tr>
        </table>
    </form>
    <style>
        .edit {
            background-color: blanchedalmond;
            border: 2px gray;
            padding: 20px;
            width: 30%;
            text-align: center;
        }
    </style>
    <?php
    if (isset($_POST['submit'])) {
        $alas = $_POST['alas'];
        $tinggi = $_POST['tinggi'];

        $luasjajargenjang = $alas * $tinggi;
        echo ' Hasil Perhitungan Luas Jajar Genjang';
        echo '<br> Diketahui : ';
        echo '<br> Sisi Alas : ' . $alas;
        echo '<br> Sisi Tinggi : ' . $tinggi;

        echo '<br>Total Luas Jajar Genjang =' . $luasjajargenjang;
    }
    ?>
</body>

</html>