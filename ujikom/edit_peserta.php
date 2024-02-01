<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Peserta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-
T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M
2HN" crossorigin="anonymous">
</head>

<body>
    <?php
    include "koneksi.php";
    $sql = mysqli_query($coon, "select * from tb_peserta where id_peserta ='$_GET[id]'") or die(mysqli_error($coon));
    $data = mysqli_fetch_array($sql);
    ?>
    <form name="edit" method="post" action="edit_proses_peserta.php">
        <input type="hidden" name="id" value="<?php echo $data['id_peserta']; ?>">
            <div class="container">
                <h1>Edit Peserta</h1>
                <br>
                <div class="mb-3">
                <label class="form-label">id_peserta</label>
                <input type="text" class="form-control" name="id_peserta">
            </div>
                <div class="mb-3">
                <label class="form-label">kd_skema</label>
                <input type="text" class="form-control" name="kd_skema">
            </div>

            <div class="mb-3">
                <label class="form-label">nm_peserta</label>
                <input type="text" class="form-control" name="nm_peserta">
            </div>

            <div class="mb-3">
                <label class="form-label">jekel</label>
                <input type="text" class="form-control" name="jekel">
            </div>

            <div class="mb-3">
                <label class="form-label">alamat</label>
                <input type="text" class="form-control" name="alamat">
            </div>

            <div class="mb-3">
                <label class="form-label">no_hp</label>
                <input type="text" class="form-control" name="no_hp">
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