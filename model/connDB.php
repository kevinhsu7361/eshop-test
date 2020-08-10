<?php 
// 資料庫設定
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'shop';
$port = 3306;
$charset = 'utf8';
// 組成dsn
$dsn = "mysql:host=$servername;dbname=$dbname;port=$port;charset=$charset";

try{
  // 建立PDO
  $pdo = new PDO($dsn,$username, $password); 
} catch(PDOException $e) {
  echo "Database 連線失敗";
  exit;
}
?>