
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title>게시글 삭제</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="view-container">
    <h2>게시글 삭제</h2>
    <p>정말로 이 게시글을 삭제하시겠습니까?</p>
    <form>
      <input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? htmlspecialchars($_GET['id']) : ''; ?>">
      <button type="submit" class="delete-button">삭제하기</button>
      <a href="board.php" class="back-button">취소</a>
    </form>
  </div>
</body>
</html>