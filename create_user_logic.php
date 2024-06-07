<?php
include('config.php');
?>

<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['alamat']) && isset($_POST['noTelepon']) && isset($_POST['isiLaporan'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['alamat'];
    $noTelepon = $_POST['noTelepon'];
    $isiLaporan = $_POST['isiLaporan'];
    $balasan = null;
    $query = "INSERT INTO users (name, email, alamat, noTelepon,isiLaporan,balasan) VALUES ('$name', '$email', '$alamat','$noTelepon','$isiLaporan','$balasan')";
    mysqli_query($db, $query);
    header('Location: index.php');
    exit;
}
