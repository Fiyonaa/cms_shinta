<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Daftar Saran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 style="text-align : center">Daftar Saran</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID Saran</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Isi Saran</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
                <?php foreach($saran as $row) {  ?>
                    <tr>
                        <td><?= $row['id_saran'] ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['isi_saran'] ?></td>
                        <td><?= $row['tanggal'] ?></td>
                    </tr>
				<?php } ?>
                
                <tr>
                    <td colspan="5" class="text-center">Tidak ada saran yang tersedia</td>
                </tr>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>