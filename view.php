<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title>게시글 보기</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="view-container">
    <h2>📄 게시글 상세보기</h2>

    <div class="view-post">
      <h3 class="view-title">게시글 제목입니다</h3>
      <p class="view-meta">
        작성자: <strong>admin</strong> | 작성일: <span>2025-06-20</span>
      </p>
      <div class="view-content">
        <p>
          여기에는 게시글의 실제 내용이 표시됩니다.<br>
          줄바꿈도 적용되고,<br>
          여러 줄의 내용을 쓸 수 있어요.
        </p>
      </div>
    </div>

    <div class="view-actions">
      <a href="board.php" class="back-button">← 목록으로</a>
      <a href="delete.php?id=1" class="delete-button">삭제하기</a>
    </div>
  </div>
</body>
</html>
