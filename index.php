<?php
require_once "db.php";

session_start();

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
}

?>
