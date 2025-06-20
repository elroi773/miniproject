<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title>게시판</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="board-container">
    <h2>📋 게시판</h2>

    <div class="board-header">
      <a href="write.php" class="write-button">글쓰기</a>
      <a href="logout.php" class="logout-button">로그아웃</a>
    </div>

    <table class="board-table">
      <thead>
        <tr>
          <th>번호</th>
          <th>제목</th>
          <th>작성자</th>
          <th>작성일</th>
        </tr>
      </thead>
      <tbody>
        <!-- 여기에 PHP 반복문으로 게시글 출력 예정 -->
        <tr>
          <td>1</td>
          <td><a href="view.php?id=1">첫 번째 게시글입니다</a></td>
          <td>admin</td>
          <td>2025-06-20</td>
        </tr>
        <tr>
          <td>2</td>
          <td><a href="view.php?id=2">두 번째 글이에요</a></td>
          <td>student01</td>
          <td>2025-06-19</td>
        </tr>
        <!-- ... -->
      </tbody>
    </table>
  </div>
</body>
</html>
