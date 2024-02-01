<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PESERTA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous">

    <style>
        @keyframes moveHeading {
            0% { transform: translateX(0); }
            50% { transform: translateX(20px); }
            100% { transform: translateX(0); }
        }

        h2 {
            animation: moveHeading 2s infinite;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Peserta</h2>
        <a href="tambah_peserta.php"> <button type="button" class="btn btn-primary">Tambah Peserta</button></a>
        <a href="index_skema.php"> <button type="button" class="btn btn-primary">Lihat Data Skema</button></a>
        <br /><br />
        <form action="index_peserta.php" method="get">
            <label>Cari Berdasarkan nama, alamat, atau kode peserta:</label>
            <br>
            <input type="text" name="cari">
            <input type="submit" value="cari">
            <br><br>
        </form>

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
                    <th scope="col">ID Peserta</th>
                    <th scope="col">KD Skema</th>
                    <th scope="col">Nama Peserta</th>
                    <th scope="col">jenis Kelamin</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No HP</th>
                </tr>
            </thead>
            <!--Letak Proses Pencarian-->
            <?php

            include 'koneksi.php';
            $no = 1;
            if (isset($_GET['cari'])) {
                $cari = $_GET['cari'];
                $sql = mysqli_query($coon, "SELECT * FROM tb_peserta WHERE nm_peserta LIKE '%" . $cari . "%' OR alamat LIKE '%" . $cari . "%' OR id_peserta LIKE '%" . $cari . "%'");
            } else {
                $sql = mysqli_query($coon, "SELECT * FROM tb_peserta");
            }
            while ($data = mysqli_fetch_array($sql)) {
                ?>
                <tbody>
                    <tr>

                        <td>
                            <?php echo $data['id_peserta']; ?>
                        </td>
                        <td>
                            <?php echo $data['kd_skema']; ?>
                        </td>
                        <td>
                            <?php echo $data['nm_peserta']; ?>
                        </td>
                        <td>
                            <?php echo $data['jekel']; ?>
                        </td>
                        <td>
                            <?php echo $data['alamat']; ?>
                        </td>
                        <td>
                            <?php echo $data['no_hp']; ?>
                        </td>
                        <td>
                            <a href="edit_peserta.php?id=<?php echo $data['id_peserta']; ?>"><button type="button"
                                    class="btn btn-warning">Edit</button></a>
                            <a href="delete_peserta.php?id=<?php echo $data['id_peserta'] ?>"><button type="button"
                                    class="btn btn-danger">Hapus</button></a>
                        </td>
                    </tr>
                    <?php

                    $no++;
            }
            ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>
