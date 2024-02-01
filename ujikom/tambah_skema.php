<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Skema</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <form name="tambah" method="post" action="tambah_proses_skema.php" enctype="multipart/form-data">
        <div class="container">
            <h1>Tambah Peserta Sertifikasi</h1>

            <div class="mb-3">
                <label class="form-label">KD Skema</label>
                <select class="form-select" name="kd_skema">
                    <option value="" selected disabled>Pilih KD</option>
                    <option value="SKM-001">SKM-001</option>
                    <option value="SKM-002">SKM-002</option>
                    <option value="SKM-003">SKM-003</option>
                    <option value="SKM-004">SKM-004</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Nama Skema</label>
                <select class="form-select" name="nm_skema">
                    <option value="" selected disabled>Pilih Skema</option>
                    <option value="Junior Web Developer">Junior Web Developer</option>
                    <option value="Digital Marketing">Digital Marketing</option>
                    <option value="Desainer Multimedia Muda">Desainer Multimedia Muda</option>
                    <option value="Network Administrator Muda">Network Administrator Muda</option>
                </select>
            </div>


            <div class="mb-3">
                <label class="form-label">Jenis</label>
                <select class="form-select" name="jenis">
                <option value="" selected disabled>Pilih Jenis</option>
                    <option value="Klaster">Klaster</option>
                    <option value="KKNI">KKNI</option>
                </select>

            <div class="mb-3">
                <label class="form-label">Unit</label>
                <input type="text" class="form-control" name="unit">
            </div>

            <button type="submit" name="tambah" class="btn btn-primary">Submit</button>
        </div>
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>