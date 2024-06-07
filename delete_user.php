<?php
include('config.php');
?>

<?php
$id = $_GET['id'];
$query = "DELETE FROM users WHERE id='$id'";
mysqli_query($db, $query);
header('Location: admin.php');
exit;
