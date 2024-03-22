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
        <h3 class="text-center">TAMBAH DATA</h3>
        <form action="<?= base_url('proses_edit_kantor') ?>" method="POST">


            <!-- form id hidden -->
            <input type="hidden" class="form-control" id="nama" name="id" value="<?= $data_kelas->id ?>">
            <!-- tambah data -->
            <div class="mb-3">
                <label for="kode" class="form-label">Kode Kelas</label>
                <input type="text" class="form-control" id="kode" name="kode" required="" value="<?= $data_kelas->kode ?>">
            </div>

            <div class="mb-3">
                <label for="nama" class="form-label">Nama Kelas</label>
                <input type="text" class="form-control" id="nama" name="nama" required="" value="<?= $data_kelas->nama ?>">
            </div>

            <div class="mb-3">
                <label for="dosen" class="form-label">Dosen Pengajar</label>
                <input type="text" class="form-control" id="dosen" name="dosen" required="" value="<?= $data_kelas->dosen ?>">
            </div>

            <div class="mb-3">
                <label for="studi" class="form-label">Program Studi</label>
                <input type="text" class="form-control" id="studi" name="studi" required="" value="<?= $data_kelas->studi ?>">
            </div>

            <div class="mb-3">
                <label for="semester" class="form-label">Semester</label>
                <input type="text" class="form-control" id="semester" name="semester" required="" value="<?= $data_kelas->semester ?>">
            </div>

            <button type="submit" class="btn btn-success" id="edit">Simpan</button>

        </form>
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