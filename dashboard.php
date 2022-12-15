<?php
include "layouts/header.php";

if(!isset($_SESSION['user_id'])){
    header("Location: errors/403.php");
}
?>

Dashboard

<?php include "layouts/footer.php"; ?>

