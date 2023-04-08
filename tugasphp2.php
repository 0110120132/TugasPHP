<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat form menggunakan PHP</title>
</head>

<body>
    <form method="post">
        <h1>Rincian Gaji Pegawai</h1>
        <tr>
            <td><label>Name</label></td>
            <td><input type="text" name="name" placeholder="Masukan Nama Anda"></td>
        </tr>
        </br>
        <tr>
            <td><label>Address</label></td>
            <td><textarea type="alamat" name="address" placeholder="Masukan Alamat Anda"></textarea></td>
        </tr>
        </br>
        <tr>
            <td><label>Position</label></td>
            <td><select name="position">
                    <option value="">Select Position</option>
                    <option value="manager">Manager</option>
                    <option value="assistant">Assistant Manager</option>
                    <option value="head">Head Of Division</option>
                    <option value="staff">Staff</option>
                </select></td>
        </tr>
        </br>
        <tr>
            <td><label>Status</label></td>
            <td><select name="status">
                    <option value="">Select Status</option>
                    <option value="merried">Merried</option>
                    <option value="not merried">Not Married yet</option>
                </select></td>
        </tr>
        </br>
        <tr>
            <td><label>Number Of Children</label></td>
            <td><input type="number" name="children"></td>
        </tr>
        </br>
        <tr>
            <td><label>Religion</label></td>
            <td><select name="religion">
                    <option value="islam">Islam</option>
                    <option value="kristen">Kristen</option>
                    <option value="budha">Budha</option>
                    <option value="hindu">Hindu</option>
                </select></td>
        </tr>
        </br>
        <tr>
            <td><input type="submit" name="button" value="proses"></td>
        </tr>

    </form>
</body>

</html>
<?php
$name = $_POST['name'];
$addres = $_POST['address'];
$position = $_POST['position'];
$status = $_POST['status'];
$children = $_POST['children'];
$religion = $_POST['religion'];
$input = $_POST['button'];
$salary = '0';

//sallary position
switch ($position) {
    case 'manager':
        $salary = 20000000;
        break;
    case 'assistant':
        $salary = 15000000;
        break;
    case 'head':
        $salary = 10000000;
        break;
    case 'staff':
        $salary = 4000000;
        break;
    default:
        $salary = '0';
}
//allowance position
if ($position == 'manager') {
    $allowance_p = $salary * 0.2;
} else if ($position == 'assistant') {
    $allowance_p = $salary * 0.2;
} else if ($position == 'head') {
    $allowance_p = $salary * 0.2;
} else if ($position == 'staff') {
    $allowance_p = $salary * 0.2;
} else {
    $allowance_p = 0;
}

//family allowance
if ($status == 'merried' && $children >= 1 && $children <= 2) {
    $allowance_f = $salary * 0.05;
} else if ($status == 'merried' && $children >= 3 && $children <= 5) {
    $allowance_f = $salary * 0.1;
} else if ($status == 'not merried') {
    $allowance_f = 0;
} else {
    $allowance_f = 0;
}


$total_salary = $salary + $allowance_f + $allowance_p;



if (isset($input)) {
?>
    Nama Pegawai : <?= $name ?>
    </br> Alamat : <?= $addres ?>
    </br> Jabatan : <?= $position ?>
    </br> Status : <?= $status ?>
    </br> Jumlah Anak : <?= $children ?>
    </br> Agama : <?= $religion ?>
    </br> Gaji Pokok : <?= $salary ?>
    </br> Total Gaji : <?= $total_salary ?>
<?php } ?>