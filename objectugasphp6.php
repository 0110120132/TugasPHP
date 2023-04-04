<?php
require 'tugasphp6.php';

$pegawai1 = new Pegawai('01111', 'Anda', 'Manager', 'Islam', 'Menikah');
$pegawai2 = new Pegawai('01112', 'Ande', 'Asisten Manager', 'Islam', 'Menikah');
$pegawai3 = new Pegawai('01113', 'Andi', 'Kepala Bagian', 'Islam', 'Menikah');
$pegawai4 = new Pegawai('01114', 'Ando', 'Staff', 'Islam', 'Menikah');
$pegawai5 = new Pegawai('01115', 'Andu', 'Staff', 'Islam', 'Menikah');

$ar_pegawai = [$pegawai1, $pegawai2, $pegawai3, $pegawai4, $pegawai5];

foreach ($ar_pegawai as $pegawai) {
    $pegawai->cetak();
}
