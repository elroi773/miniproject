<?php 

session_start();
require_once 'db.php';

$userid = trim($_POST['userid'] ?? '');
$password = $_POST['password'] ?? '';

if(!$userid || !$password){
  echo"<script>alert('다 입력해주세용~!'); history.back();</script>";
  exit;
}

?>