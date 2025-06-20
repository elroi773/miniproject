<?php
$host = 'localhost';
$dbname = 'miniproject';
$user = 'root';
$pass = 'Mysql4344!'; // XAMPP 기본은 비번 없음

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
} catch (PDOException $e) {
    die("DB 연결 실패: " . $e->getMessage());
}
?>
