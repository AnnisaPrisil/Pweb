<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Dosen</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid blue;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: greenyellow;
        }
    </style>
</head>
<body>
    <?php
        //menambahkan isi variabel dosen
        $Dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan'
        ];
        //melakukan pemanggilan
        echo "<table>";
        echo "<tr><th>Informasi Dosen</th><th></th></tr>";
        foreach ($Dosen as $key => $value) {
            echo "<tr><td>{$key}</td><td>{$value}</td></tr>";
        }
        echo "</table>";
    ?>
</body>
</html>
