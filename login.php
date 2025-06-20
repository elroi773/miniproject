
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title>로그인</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="login-container">
    <h2>로그인</h2>
    <form action="login_process.php" method="post" autocomplete="off">
      <div class="form-group">
        <label for="userid">아이디</label>
        <input type="text" id="userid" name="userid" required>
      </div>

      <div class="form-group">
        <label for="password">비밀번호</label>
        <input type="password" id="password" name="password" required>
      </div>

      <button type="submit">로그인</button>
    </form>

    <p>계정이 없으신가요? <a href="signup.php">회원가입하기</a></p>
  </div>
</body>
</html>
