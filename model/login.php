<?php
session_start();
if (empty($_POST['userName']) || empty($_POST['passWord'])){
  die('請檢查資料有無漏填！');
}
include('./connDB.php');
$sql = 'SELECT * FROM user WHERE userName=:userName '; //username 是 db 的欄位名稱，我們的參數先用冒號表示
$statement = $pdo->prepare($sql);
$statement->bindValue(':userName', $_POST['userName'], PDO::PARAM_STR); //prepare 完之後，在 bind 我們 post 的資料
$statement->execute();
$result =  $statement -> fetch(PDO::FETCH_ASSOC); //撈特定的資料

if (password_verify($_POST['passWord'],$result['passWord'])) {
  // 給予 session
  $_SESSION['userName'] = $result['userName'];
  $_SESSION['userID'] = $result['id'];
  header('Location: ../index.php');
  die();
} else {
  header('Location: ../login.php');
}
?>