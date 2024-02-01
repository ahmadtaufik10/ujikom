<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SKEMA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-
T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M
2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2>Skema</h2>
        <a href="tambah_skema.php"> <button type="button" class="btn btn-primary">Tambah KD Skema</button></a>
        <a href="index_peserta.php"> <button type="button" class="btn btn-primary">Lihat Data Peserta</button></a>
        <br /><br />
        
        <!--Letak Form Pencarian-->
        <?php
        if (isset($_GET['cari'])) {
            $cari = $_GET['cari'];
            echo "<b>Hasil pencarian : " . $cari . "</b>";
        }
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">KD skema</th>
                    <th scope="col">nama skema</th>
                    <th scope="col">jenis</th>
                    <th scope="col">unit</th>
                </tr>
            </thead>
            <!--Letak Proses Pencarian-->
            <?php

            include 'koneksi.php';
            $no = 1;
            if (isset($_GET['cari'])) {
                $cari = $_GET['cari'];
                $sql = mysqli_query($coon, "select * from tb_skema where kd_skema like
'%" . $cari . "%'");
            } else {
                $sql = mysqli_query($coon, "select * from tb_skema");
            }
            while ($data = mysqli_fetch_array($sql)) {
                ?>
                <tbody>
                    <tr>
                        <th scope="row">
                            <?php echo $no; ?>
                        </th>
                        <td>
                            <?php echo $data['kd_skema']; ?>
                        </td>
                        <td>
                            <?php echo $data['nm_skema']; ?>
                        </td>
                        <td>
                            <?php echo $data['jenis']; ?>
                        </td>
                        <td>
                            <?php echo $data['unit']; ?>
                        </td>
                        <td>
                            <a href="edit_skema.php?id=<?php echo $data['id_skema']; ?>"><button type="button"
                                    class="btn btn-warning">Edit</button>
                                <a href="delete_skema.php?id=<?php echo $data['id_skema'] ?>"><button type="button"
                                        class="btn btn-danger">Hapus</button>
                        </td>
                    </tr>
                    <?php

                    $no++;
            }
            ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46c
DfL" crossorigin="anonymous"></script>
</body>

</html>