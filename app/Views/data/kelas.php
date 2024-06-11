<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Kantor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container border shadow">
        <h3 class="text-center">DATA KELAS</h3>
        <!-- tambah data -->
        <a href="<?= base_url('add_data_kantor') ?>" class="btn btn-success mb-3">+ Tambah Data</a>

        <!-- box tool -->
        <nav aria-label="...">
            <ul class="pagination pagination-sm">
                <li class="page-item active" aria-current="page">
                    <a href="<?= base_url('data_table') ?>"> <span class="page-link">1</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
            </ul>
        </nav>

        <!-- form pencarian -->
        <div class="form-group d-flex mb-4" style="max-width: 500px;">
            <label for="search-text" class="input-group-addon mx-3 btn-primary">Search</label>
            <input class="form-control" type="text" name="search-txt" id="search-txt" placeholder="Masukan pencarian" autocomplete="off" autofocus>
        </div>






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
                        <a href="<?= base_url('lihat_data') . '/' . $kelas->id ?>" class="btn btn-info mb-3">Lihat</a>
                        <a href="<?= base_url('edit_data_kantor') . '/' . $kelas->id ?>" class="btn btn-warning mb-3">Edit</a>
                        <a href="<?= base_url('delete_data_kantor') . '/' . $kelas->id ?>" class="btn btn-danger mb-3">Hapus</a>

                        <!-- upload file -->
                        <?php if (session()->getFlashdata('errors')) : ?>
                            <ul>
                                <?php foreach (session()->getFlashdata('errors') as $error) : ?>
                                    <li><?= esc($error) ?></li>
                                <?php endforeach ?>
                            </ul>
                        <?php endif ?>

                        <?php if (session()->getFlashdata('message')) : ?>
                            <p><?= esc(session()->getFlashdata('message')) ?></p>
                        <?php endif ?>

                        <?php if (session()->getFlashdata('error')) : ?>
                            <p><?= esc(session()->getFlashdata('error')) ?></p>
                        <?php endif ?>

                        <form action="<?= site_url('upload') ?>" method="post" enctype="multipart/form-data">
                            <input type="file" name="file" />
                            <button type="submit">Upload</button>
                        </form>
                    </td>
                </tr>

            <?php endforeach; ?>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>