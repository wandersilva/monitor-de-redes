<?php
require_once 'db_connect.php';

$id = $_GET['id'];

$sql = "delete from computadores where id=$id";
$connect->query($sql);
$connect->close();

header("location:../index.php");

//echo "exlua o registro".$id;

?>