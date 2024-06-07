<?php
include('./template/head.php');
?>

<?php
include('./create_user_logic.php');
?>

<div class="container py-5">
    <h2>Tambah Data User</h2>
    <form class="mt-4" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input name="name" type="text" class="form-control" id="name" />
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id="email" />
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">alamat</label>
            <input name="alamat" type="text" class="form-control" id="alamat" />
        </div>
        <div class="mb-3">
            <label for="noTelepon" class="form-label">No Telepon</label>
            <input name="noTelepon" type="text" class="form-control" id="noTelepon" />
        </div>
        <div class="mb-3">
            <label for="isiLaporan" class="form-label">Isi Laporan</label>
            <input name="isiLaporan" type="text" class="form-control" id="isiLaporan" />
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>

<?php
include('./template/foot.php');
?>