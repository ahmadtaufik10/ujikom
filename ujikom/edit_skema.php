<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-
T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M
2HN" crossorigin="anonymous">
</head>

<body>
    <?php
    include "koneksi.php";
    $sql = mysqli_query($coon, "select * from tb_skema where id_skema =
'$_GET[id]'") or die(mysqli_error($coon));
    $data = mysqli_fetch_array($sql);
    ?>
    <form name="edit" method="post" action="edit_proses_skema.php">
        <input type="hidden" name="id" value="<?php echo $data['id_skema']; ?>">
        <div class="container">
            <h1>Edit Dosen</h1>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Dosen</label>
                <select class="form-select" name="kd_skema">
                    <option value="" selected disabled>Pilih KD</option>
                    <option value="SKM-001">SKM-001</option>
                    <option value="SKM-002">SKM-002</option>
                    <option value="SKM-003">SKM-003</option>
                    <option value="SKM-004">SKM-004</option>
                </select>
               
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nama Skema</label>
                <select class="form-select" name="nm_skema">
                    <option value="" selected disabled>Pilih Skema</option>
                    <option value="Junior Web Developer">Junior Web Developer</option>
                    <option value="Digital Marketing">Digital Marketing</option>
                    <option value="Desainer Multimedia Muda">Desainer Multimedia Muda</option>
                    <option value="Network Administrator Muda">Network Administrator Muda</option>
                </select>
                
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Jenis</label>
                <select class="form-select" name="jenis">
                <option value="" selected disabled>Pilih Jenis</option>
                    <option value="Klaster">Klaster</option>
                    <option value="KKNI">KKNI</option>
                </select>
                
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">unit</label>
                <input type="text" class="form-control" name="unit" value="<?php echo
                    $data['unit']; ?>">
            </div>
            <button type="submit" name="edit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46c
DfL" crossorigin="anonymous"></script>
</body>

</html>