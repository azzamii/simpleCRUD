<?php
include_once("config.php");

$id_member = $_GET['id_member'];

$result = mysqli_query($mysqli, "DELETE FROM member WHERE id_member='$id_member'");

header("Location:deletemember.php");
?>