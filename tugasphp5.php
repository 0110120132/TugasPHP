<?php
$ar_prodi = ["SI" => "Sistem Informasi", "TI" => "Teknik Informatika", "ILKOM" => "Ilmu Komputer", "TE" => "Teknik Elektro"];

$ar_skill = ["HTML" => 10, "CSS" => 10, "JavaScript" => 20, "RWD Bootstrap" => 20, "PHP" => 30, "MYSQL" => 30, "Laravel" => 40];

$domisili = ["Jakarta", "Bandung", "Bekasi", "Malang", "Surabaya", "Lainnya"];
?>
<fieldset style="background-color: cornsilk; border:2px ; color:brown; margin:25px">
    <legend>Form Registrasi Kelompok Belajar</legend>
    <table style="color: brown; padding:20px; ">
        <thead>
            <tr>
                <th>Form Registrasi</th>
            </tr>
        </thead>
        <tbody>
            <form method="POST">
                <tr>
                    <td>Nim :</td>
                    <td><input type="text" name="nim"> </td>
                </tr>
                <tr>
                    <td>Nama :</td>
                    <td><input type="text" name="nama"> </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin :</td>
                    <td><input type="radio" name="jk" value="Laki-Laki"> Laki-Laki &nbsp;
                        <input type="radio" name="jk" value="Perempuan"> Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Program Studi :</td>
                    <td><select name="prodi">
                            <?php
                            foreach ($ar_prodi as $prodi => $v) {
                            ?>
                                <option value="<?= $prodi ?>"><?= $v ?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Skil Programing :</td>
                    <td>
                        <?php
                        foreach ($ar_skill as $skill => $s) {
                        ?>
                            <input type="checkbox" name="skill[]" value="<?= $skill ?>"><?= $skill ?>

                        <?php } ?>

                    </td>
                </tr>
                <tr>
                    <td>Domisili :</td>
                    <td>
                        <select name="domisili">
                            <?php
                            foreach ($domisili as $d) {
                            ?>
                                <option value="<?= $d ?>"><?= $d ?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Email :</td>
                    <td>
                        <input type="email" name="email">
                    </td>
                </tr>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="2">
                    <button name="proses">Submit</button>
                </th>
            </tr>
        </tfoot>
        </form>

    </table>

</fieldset>

<?php
error_reporting(0);
if (isset($_POST['proses'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $prodi = $_POST['prodi'];
    $skill = $_POST['skill'];
    $domisili = $_POST['domisili'];
    $email = $_POST['email'];
}

$score = 0;
foreach ($skill as $total_score) {
    if (isset($ar_skill[$total_score])) {
        $score += $ar_skill[$total_score];
    }
}


function kategori_skill($score)
{
    if ($score > 100 && $score <= 150) {
        return "Sangat Baik";
    } elseif ($score > 60 && $score <= 100) {
        return "Baik";
    } elseif ($score > 40 && $score <= 60) {
        return "Cukup";
    } elseif ($score > 0 && $score <= 40) {
        return "Kurang";
    } elseif ($score = 0) {
        return "Tidak Memadai";
    } else {
        return "Tidak Ada Nilai";
    }
}
?>


Nim : <?= $nim ?></br>
Nama : <?= $nama ?></br>
Jenis Kelamin : <?= $jk ?></br>
Program Studi : <?= $prodi ?></br>
Skill :
<?php foreach ($skill as $s) { ?>
    <?= $s ?>,
<?php } ?>
</br>
Skor Skill : <?= $score ?> </br>
kategori skill :
<?php $k_skill = kategori_skill($score) ?>
<?= $k_skill ?>
</br>Domisili : <?= $domisili ?>
</br>Email : <?= $email ?>