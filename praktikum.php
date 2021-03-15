<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP</title>
</head>
<body>
<?php
$nama_siswa = $_POST['nama'];
$matkul = $_POST['matkul'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['tugas'];

$ns1 = ['nama' => $nama_siswa, 'uts' => $nilai_uts, 'uas' => $nilai_uas, 'tugas' => $nilai_tugas];
$ns2 = ['nama' => 'BOT', 'uts' => 97, 'uas' => 30, 'tugas' => 78];
$ns3 = ['nama' => 'BOT', 'uts' => 80, 'uas' => 86, 'tugas' => 70];
$ns4 = ['nama' => 'BOT', 'uts' => 90, 'uas' => 58, 'tugas' => 72];
$ns5 = ['nama' => 'BOT', 'uts' => 40, 'uas' => 74, 'tugas' => 78];

$ar_nilai = [$ns1, $ns2, $ns3, $ns4, $ns5];
?>
<h3>Daftar Nilai Siswa</h3>
    <table border="1" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Tugas</th>
                <th>Nilai Akhir</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($ar_nilai as $ns) {
                echo '<tr><td>' . $nomor . '</td>';
                echo '<td>' . $ns['nama'] . '</td>';
                echo '<td>' . $ns['uts'] . '</td>';
                echo '<td>' . $ns['uas'] . '</td>';
                echo '<td>' . $ns['tugas'] . '</td>';
                $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas']) / 3;
                echo '<td>' . number_format($nilai_akhir, 2, ',', '.') . '</td>';
                echo '<tr/>';
                $nomor++;
            }
            ?>
        </tbody>
    </table>
    
</body>
</html>