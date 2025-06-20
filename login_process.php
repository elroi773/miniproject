<?php 

session_start();
require_once 'db.php';

$userid = trim($_POST['userid'] ?? '');
$password = $_POST['password'] ?? '';

if(!$userid || !$password){
  echo"<script>alert('다 입력해주세용~!'); history.back();</script>";
  exit;
}

$stmt = $pdo->prepare("SELECT * FROM users WHERE userid=?"); // 해킹 방지 
$stmt->execute([$userid]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if(!$user){ 
  echo"<script>alert('가입 하셨조..?'); history.back();</script>";
  exit;
}

if(!password_verify($password, $user['password'])){
  echo"<script>alert('비번 틀림'); history.back();</script>";
  exit;
}


$_SESSION['user_id'] = $user['userid'];
$_SESSION['id'] = $user['id'];


header('Location:board.php');
exit;
?>