<?php
include('config.php');

// Get the user ID from the URL
$id = $_GET['id'];

// Fetch the user data from the database
$query = "SELECT * FROM users WHERE id='$id'";
$result = mysqli_query($db, $query);
$user = mysqli_fetch_assoc($result);

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['alamat']) && isset($_POST['noTelepon']) && isset($_POST['isiLaporan'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $noTelepon = $_POST['noTelepon'];
    $isiLaporan = $_POST['isiLaporan'];
    $balasan = $_POST['balasan'];

    $query = "UPDATE users SET name='$name', email='$email', alamat='$alamat', noTelepon='$noTelepon', isiLaporan='$isiLaporan', balasan='$balasan' WHERE id='$id'";
    mysqli_query($db, $query);
    header('Location: admin.php');
    exit;
}

?>

<?php
include('./template/head.php');
?>

<div class="container py-5">
    <h2>Update Data User</h2>
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
        <div class="mb-3">
            <label for="balasan" class="form-label">Balas</label>
            <input name="balasan" type="text" class="form-control" id="balasan" />
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>

<?php
include('./template/foot.php');
?>