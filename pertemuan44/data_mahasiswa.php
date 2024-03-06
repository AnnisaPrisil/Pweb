<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
<h2>Data Mahasiswa array multidimensi</h2>


<?php
$students = [
    //menambahkan 5 orang siswa dengan mengisi nama,nim,jurusan,email,dan menambahkan gambar
    ['Gambar' =>'pp.jpg', 'Nama' => 'arab', 'Nim' => '123456', 'Jurusan' => 'teknik kimia', 'Email' => 'arab@gmail.com' ],
    ['Gambar' => 'aa.jpg', 'Nama' => 'cantik', 'Nim' => '9123124', 'Jurusan' => 'teknik listrik', 'Email' => 'cantik@gmail.com'],
    ['Gambar' => 'dd.jpg', 'Nama' => 'faiqrn', 'Nim' => '789012', 'Jurusan'=>	'agama','Email'=>'faiqrn@gmail.com', ],
	['Gambar' => 'bb.jpg', 'Nama'=>	'taehyung','Nim'=>'345678','Jurusan'=>'teknik lingkungan','Email'=>'taehyung@gmail.com' ],
	['Gambar' => 'rr.jpg', 'Nama'=>	'ramzy','Nim'=>'901234','Jurusan'=>'akutansi','Email'=>'ramzy@gmail.com']
];

foreach ($students as $student) {
?>
<div class="student-data">
    <ul>
        <li>Gambar: <img src="<?= $student['Gambar'] ?>" width="50" height="50"></li>
        <li>Nama: <?= $student['Nama'] ?></li>
        <li>Nim: <?= $student['Nim'] ?></li>
        <li>Jurusan: <?= $student['Jurusan'] ?></li>
        <li>Email: <?= $student['Email'] ?></li>
    </ul> 
</div>

<?php } ?>

</body>
</html> 
