<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'crud_data');

if (!$koneksi) {
    die("conection gagal :" . mysqli_connect_error());
}

$sql = "SELECT * FROM data";
$result = mysqli_query($koneksi, $sql);
$data = [];

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
} else {
    echo "null hasilmnya";
}

// menutup koneksi
mysqli_close($koneksi);

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
    <div class="container border shadow col-md-6 mt-3">
        <h3 class="text-center">DATA MAHASISWA</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Kelas</th>
                    <th>Nama Kelas</th>
                    <th>Dosen Pengajar</th>
                    <th>Program Studi</th>
                    <th>Semester</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($data) && is_array($data)) : ?>
                    <?php $no = 1; ?>
                    <?php foreach ($data as $product) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= htmlspecialchars($product['kode']) ?></td>
                            <td><?= htmlspecialchars($product['nama']) ?></td>
                            <td><?= htmlspecialchars($product['dosen']) ?></td>
                            <td><?= htmlspecialchars($product['studi']) ?></td>
                            <td><?= htmlspecialchars($product['semester']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="6">No data found</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script>
        $('#edit').on('click', function() {
            alert('Data Wis Diubah');
        });
    </script>
</body>

</html>