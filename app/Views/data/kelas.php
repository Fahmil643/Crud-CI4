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
        <a href="<?= base_url('add_data_kantor') ?>" class="btn btn-success mb-3">+ Tambah Data</a>
        <table class="table table-striped text-center">
            <tr>
                <th>No</th>
                <th>Kode Kelas</th>
                <th>Nama Kelas</th>
                <th>Dosen Pengajar</th>
                <th>Program Studi</th>
                <th>Semester</th>
                <th>Aksi</th>
            </tr>

            <?php
            $nomer = 0;
            foreach ($all_data_kantor as $kelas) :
                $nomer++;
            ?>
                <tr>
                    <td><?= $nomer; ?></td>
                    <td><?= $kelas->kode ?></td>
                    <td><?= $kelas->nama ?></td>
                    <td><?= $kelas->dosen ?></td>
                    <td><?= $kelas->studi ?></td>
                    <td><?= $kelas->semester ?></td>

                    <td>
                        <a href="<?= base_url('edit_data_kantor') . '/' . $kelas->id ?>" class="btn btn-warning mb-3">Edit</a>
                        <a href="<?= base_url('delete_data_kantor') . '/' . $kelas->id ?>" class="btn btn-danger mb-3">Hapus</a>
                    </td>
                </tr>

            <?php endforeach ?>
        </table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>