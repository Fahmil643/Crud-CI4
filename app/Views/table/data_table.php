<?php
// Koneksi ke database MySQL
$koneksi = mysqli_connect("localhost", "root", "", "crud_data");

// Periksa koneksi
if (mysqli_connect_error()) {
    echo "Gagal terhubung ke MySQL: " . mysqli_connect_error();
    exit();
}

// Query untuk mengambil data dari database
$query = "SELECT * FROM prodi";
$result = mysqli_query($koneksi, $query);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Kantor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container border shadow">
        <h3 class="text-center">DATA KELAS</h3>
        <!-- tambah data -->
        <a href="<?= base_url('add_data_table') ?>" class="btn btn-success mb-3">+ Tambah Data</a>

        <table class="table table-striped text-center">
            <tr>
                <th>No</th>
                <th>Kode Prodi</th>
                <th>Nama Prodi</th>
            </tr>

            <?php
            // Menampilkan data dari database
            $no = 1;
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['kode_prodi'] ?></td>
                    <td><?= $row['nama_prodi'] ?></td>
                </tr>
            <?php
            }
            ?>
        </table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>

<?php
// Tutup koneksi
mysqli_close($koneksi);
?>