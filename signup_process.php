<?php
require_once('db.php');

$userid = trim($_POST['userid']); // form 에서 post 방식으로 userid 를 가지고 옴
$password = $_POST['userpw']; // 사용자가 입력한 비밀번호
$password_confirm = $_POST['userpw_confirm']; // 비밀번호 확인란

if (!$userid || !$password || !$password_confirm) {
  echo "<script>alert('다 입력해주셍요~!');history.back();</script>"; // 하나라도 비어있으면 경고
  exit;
}

if ($password !== $password_confirm) {
  echo "<script>alert('비밀번호가 일치하지 않아요');history.back();</script>"; // 비밀번호와 확인이 다르면 경고
  exit;
}

$stmt = $pdo->prepare("SELECT * FROM users WHERE userid=?"); // 해킹 방지 
// 위 쿼리문의 ? 는 value 임 ! 
$stmt->execute([$userid]);

if ($stmt->fetch()) { // 가져오기 쿼리를 실행해봤더니 아이디 정보가 fetch 가 됨 중복이 되어있으면 알려주는 것임 
  echo "<script>alert('이미 준비 하는 아이디에요.');history.back();</script>";
  exit;
}

$hash = password_hash($password, PASSWORD_DEFAULT); // 비밀번호 암호화
$stmt = $pdo->prepare("INSERT INTO users(userid, password) VALUES(?,?)"); // 회원 정보 저장 쿼리
$result = $stmt->execute([$userid, $hash]);

if ($result) {
  echo "<script>alert('회원 가입이 완료되었습니다! 로그인 해주세용'); location.href='login.php';</script>"; // 성공 시 로그인 페이지로
} else {
  echo "<script>alert('회원가입에 실패했습니다.'); history.back();</script>"; // 실패 시 뒤로가기
}
?>
