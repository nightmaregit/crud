<?php
include('config.php');

// Get the user ID from the URL
$id = $_GET['id'];

// Fetch the user data from the database
$query = "SELECT * FROM users WHERE id='$id'";
$result = mysqli_query($db, $query);
$user = mysqli_fetch_assoc($result);

if (isset($_POST['balasan'])) {
    $balasan = $_POST['balasan'];

    $query = "UPDATE users SET balasan='$balasan' WHERE id='$id'";
    mysqli_query($db, $query);
    header('Location: ./frontend/index.php');
    exit;
}

?>

<?php
include('./template/head.php');
?>

<div class="container py-5">
    <h2>Balas</h2>
    <form class="mt-4" method="POST">
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