<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title>회원가입</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="signup-container">
    <h2>회원가입</h2>
    <form action="signup_process.php" method="post" autocomplete="off">
      <div class="form-group">
        <label for="userid">아이디</label>
        <input type="text" id="userid" name="userid" required>
      </div>

      <div class="form-group">
        <label for="userpw">비밀번호</label>
        <input type="password" id="userpw" name="userpw" required>
      </div>

      <div class="form-group">
        <label for="userpw_confirm">비밀번호 확인</label>
        <input type="password" id="userpw_confirm" name="userpw_confirm" required>
      </div>

      <button type="submit">가입하기</button>
    </form>

    <p>이미 계정이 있으신가요? <a href="login.php">로그인하기</a></p>
  </div>
</body>
</html>
