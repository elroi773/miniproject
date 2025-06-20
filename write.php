
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title>글쓰기</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="write-container">
    <h2>✏️ 글 작성</h2>

    <form>
      <div class="form-group">
        <label for="title">제목</label>
        <input type="text" id="title" name="title" required>
      </div>

      <div class="form-group">
        <label for="content">내용</label>
        <textarea id="content" name="content" rows="10" required></textarea>
      </div>

      <button type="submit">작성하기</button>
    </form>

    <p><a href="board.php">← 목록으로 돌아가기</a></p>
  </div>
</body>
</html>
