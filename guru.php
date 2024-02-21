<?php
include 'config/koneksi.php';
include 'templates/header.php';
include 'templates/navbar.php';

$result = mysqli_query($koneksi, "SELECT * FROM tb_guru");


?>


<div class="container mt-5">
    <h3>Data Guru</h3>
    <a href="tambahguru.php" class="btn btn-primary float-end">Tambah</a>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Mapel</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $a = 1;
            while ($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?= $a ?></td>
                    <td><?= $row['nama_guru'] ?></td>
                    <td><?= $row['jenis_kelamin']  ?></td>
                    <td><?= $row['alamat'] ?></td>
                    <td><?= $row['mapel'] ?></td>
                    <td>
                        <a href="editguru.php?id_guru=<?= $row['id_guru'] ?>" class="btn btn-primary">Edit</a>
                        <a href="hapusguru.php?id_guru=<?= $row['id_guru'] ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data guru ini?')" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php $a++ ?>
            <?php endwhile ?>
        </tbody>
    </table>
</div>



<?php
include 'templates/footer.php';
?>