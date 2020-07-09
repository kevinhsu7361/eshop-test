<?php

if (empty($_POST['userName']) || empty($_POST['passWord'])){
    die('請檢查資料有無漏填！');
}

include('./connDB.php');
$sql = 'SELECT userName FROM user WHERE userName = :userName';
$statement = $pdo->prepare($sql);
$statement->bindValue(':userName', $_POST['userName'], PDO::PARAM_STR);
$statement->execute();
$result =  $statement -> fetch(PDO::FETCH_ASSOC);

if ($result){
    die("這個帳號已經被註冊");
}

$sql = 'INSERT INTO user (userName , email ,phone , passWord) 
        VALUES (:userName , :email , :phone , :passWord)';
$password = password_hash($_POST['passWord'] , PASSWORD_DEFAULT);
$statement = $pdo->prepare($sql);
$statement->bindValue(':userName', $_POST['userName'], PDO::PARAM_STR);
$statement->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
$statement->bindValue(':phone', $_POST['phone'], PDO::PARAM_STR);
$statement->bindValue(':passWord', $password, PDO::PARAM_STR);
$result = $statement->execute(); 

if($result){
    header('Location: ../login.php');
    die();
} else {
    echo '資料新增失敗';
}
?>