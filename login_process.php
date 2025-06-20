<?php 

session_start();
require_once 'db.php';

$userid = trim($_POST['userid'] ?? '');
$password = $_POST['password'] ?? '';

?>