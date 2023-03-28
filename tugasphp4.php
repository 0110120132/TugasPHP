<?php
$n1 = ['nim' => '0110120131', 'nama' => 'Andi', 'nilai' => 80];
$n2 = ['nim' => '0110120132', 'nama' => 'Ani', 'nilai' => 70];
$n3 = ['nim' => '0110120133', 'nama' => 'Adi', 'nilai' => 50];
$n4 = ['nim' => '0110120134', 'nama' => 'Endi', 'nilai' => 40];
$n5 = ['nim' => '0110120135', 'nama' => 'Dia', 'nilai' => 90];
$n6 = ['nim' => '0110120136', 'nama' => 'Nadi', 'nilai' => 75];
$n7 = ['nim' => '0110120137', 'nama' => 'Nandi', 'nilai' => 10];
$n8 = ['nim' => '0110120138', 'nama' => 'Ida', 'nilai' => 85];

$mahasiswa = [$n1, $n2, $n3, $n4, $n5, $n6, $n7, $n8];
$ar_judul = ['No', 'Nim', 'Nama', 'Nilai', 'Ket', 'Grade', 'Predikat'];
//buat keterangan
$jumlah_data = count($mahasiswa);
$jml_mahasiswa = array_column($mahasiswa, 'nilai');
$rata_mahasiwa = array_sum($jml_mahasiswa);
$rata_rata = $rata_mahasiwa / 8;
$max_nilai = max($jml_mahasiswa);
$min_nilai = min($jml_mahasiswa);
$keterangan1 = [
    'Jumlah Data Mahasiwa' => $jumlah_data,
    'Nilai Tertinggi Mahasiswa' => $max_nilai,
    'Nilai Terendah Mahasiswa' => $min_nilai,
    'Total Nilai Mahasiwa' => $rata_mahasiwa,
    'Nilai Rata-Rata Mahasiwal' => $rata_rata
]
?>



<table border='1px' style="margin:20px;">
    <thead>
        <tr>
            <?php
            foreach ($ar_judul as $judul) {
            ?>
                <th><?= $judul ?> </th>
            <?php } ?>

        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($mahasiswa as $mhs) {
            // $warna = $no % 2 == 1 ? 'lime' : 'yellow';
            $warna = ($mhs['nilai'] >= 60) ? 'lime' : 'red';
            $ket = ($mhs['nilai'] >= 60) ? 'Lulus' : 'Tidak Lulus';
            //grade
            if ($mhs['nilai'] >= 85 && $mhs['nilai'] <= 100) $grade = 'A';
            else if ($mhs['nilai'] >= 75 && $mhs['nilai'] <= 80) $grade = 'B';
            else if ($mhs['nilai'] >= 60 && $mhs['nilai'] <= 74) $grade = 'C';
            else if ($mhs['nilai'] >= 30 && $mhs['nilai'] <= 59) $grade = 'D';
            else if ($mhs['nilai'] >= 0 && $mhs['nilai'] <= 29) $grade = 'E';
            else $grade = '';
        ?>
            <?php
            foreach ($mhs as $predi) {
                switch ($grade) {
                    case 'A':
                        $predi = "Memuaskan";
                        break;
                    case 'B':
                        $predi = "Baik";
                        break;
                    case 'C':
                        $predi = "Cukup";
                        break;
                    case 'D':
                        $predi = "Kurang";
                        break;
                    case 'E':
                        $predi = "Sangat Kurang";
                        break;
                    default:
                        $predi = "";
                        break;
                }
            }
            ?>
            <tr bgcolor="<?= $warna; ?>">
                <td><?= $no ?></td>
                <td><?= $mhs['nim'] ?></td>
                <td><?= $mhs['nama'] ?></td>
                <td><?= $mhs['nilai'] ?> </td>
                <td><?= $ket ?> </td>
                <td><?= $grade ?></td>
                <td><?= $predi ?></td>

            </tr>
        <?php $no++;
        }
        ?>
    </tbody>
    <tfoot>
        <?php
        foreach ($keterangan1 as $keterangan => $hasil) {
        ?>
            <tr>
                <th colspan="6"><?= $keterangan ?></th>
                <th><?= $hasil ?></th>
            </tr>
        <?php } ?>
    </tfoot>
</table>