<?php
include('./template/head.php');
?>

<?php
include('config.php');
?>

<div class="container py-5">
    <h2>Data User</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Isi Laporan</th>
                <th>Balasan</th>
                <th>Di ubah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM users";
            $result = mysqli_query($db, $query);
            while ($user = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['name'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td><?= $user['isiLaporan'] ?></td>
                    <td><?php if (empty($user['balasan'])) { ?>
                            belum ada respon
                        <?php } else { ?>
                            <?= $user['balasan'] ?>
                        <?php } ?></td>
                    <td><?= date('d-m-Y H:i:s', strtotime($user['updated_at'])) ?></td>
                    <td>
                        <a href="update_admin.php?id=<?= $user['id'] ?>" class="btn btn-sm btn-primary">balas</a>
                        <a href="delete_user.php?id=<?= $user['id'] ?>" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php
include('./template/foot.php');
?>