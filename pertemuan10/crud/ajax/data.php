<!--Praktikum 6. Tampilan CRUD dengan Ajax-->

<table id="example" class="table table-striped table-bordered" style="width:100%">
<thead>
    <!-- Header kolom-kolom data -->
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>No Telp</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    <?php
    // Memasukkan file koneksi.php untuk menghubungkan ke database
    include 'koneksi.php';
    $no = 1;
    $query = "SELECT * FROM anggota ORDER BY id DESC";
    // Menjalankan query menggunakan objek koneksi $db1
    $sql = $db1->prepare($query);
    $sql->execute();
    // Mengambil hasil query
    $resl = $sql->get_result();
    // Jika terdapat data dalam hasil query
    if ($resl->num_rows > 0) {
        // Melakukan pengulangan untuk setiap baris hasil query
        while ($row = $resl->fetch_assoc()) {
            $id = $row['id'];
            $nama = $row['nama'];
            // Mengubah kode jenis kelamin menjadi teks yang lebih deskriptif
            $jenis_kelamin = ($row['jenis_kelamin'] == 'L') ? 'Laki-Laki' : 'Perempuan'; // Perbaikan sintaks
            $alamat = $row['alamat'];
            $no_telp = $row['no_telp'];
    ?>
            <!-- Menampilkan baris data dalam tabel -->
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $nama; ?></td>
                <td><?php echo $jenis_kelamin; ?></td>
                <td><?php echo $alamat; ?></td>
                <td><?php echo $no_telp; ?></td>
                <td>
                    <!-- Tombol untuk melakukan edit dan hapus data -->
                    <button id="<?php echo $id; ?>" class="btn btn-success btn-sm edit_data"> <i class="fa fa-edit"></i> Edit </button>
                    <button id="<?php echo $id; ?>" class="btn btn-danger btn-sm hapus_data"> <i class="fa fa-trash"></i> Hapus </button>
                </td>
            </tr>
    <?php
        }
    } else {
    ?>
        <!-- Jika tidak ada data yang ditemukan dalam query -->
        <tr>
            <td colspan='7'>Tidak ada data ditemukan</td>
        </tr>
    <?php
    }
    ?>
</tbody>
</table>
<script type="text/javascript">
    // Menjalankan fungsi DataTable ketika dokumen sudah siap
    $(document).ready(function() {
        $('#example').DataTable();
    });

    function reset() {
        document.getElementById("err_nama").innerHTML = "";
        document.getElementById("err_jenis_kelamin").innerHTML = "";
        document.getElementById("err_alamat").innerHTML = "";
        document.getElementById("err_no_telp").innerHTML = "";
    }

    $(document).on('click', '.edit_data', function() {
        $('html, body').animate({ scrollTop: 0 }, 'slow');
        var id = $(this).attr('id');
        $.ajax({
            type: 'POST',
            url: "get_data.php",
            data: { id: id },
            dataType: 'json',
            success: function(response) {
                reset();
                $('html, body').animate({ scrollTop: 30 }, 'slow');
                document.getElementById("id").value = response.id;
                document.getElementById("nama").value = response.nama;
                document.getElementById("alamat").value = response.alamat;
                document.getElementById("no_telp").value = response.no_telp;
                if (response.jenis_kelamin == "L") {
                    document.getElementById("jenkell").checked = true;
                } else {
                    document.getElementById("jenkel2").checked = true;
                }
            },
            error: function(response) {
                console.log(response.responseText);
            }
        });
    });

    // Menghapus data ketika tombol hapus ditekan
    $(document).on('click', '.hapus_data', function() {
        var id = $(this).attr('id');
        $.ajax({
            type: 'POST',
            url: "hapus_data.php",
            data: { id: id },
            success: function() {
                $('.data').load("data.php");
            },
            error: function(response) {
                console.log(response.responseText);
            }
        });
    });
</script>
