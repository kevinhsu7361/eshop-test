<?php // php 與 html 分離 ?>
<body>
    <div class="container">
        <h1 class="h1 text-center my-3">go 物網</h1>
        <ul class="nav justify-content-center mb-3">
            <li class="nav-item">
            <?php if(!isset($_SESSION['userName'])):?>
            <a class="nav-link" href="./login.php">登入</a>
            <?php else: ?>
            <a class="nav-link" href="./admin.php"><?=$_SESSION["userName"]?></a>
            <?php endif; ?>
            </li>
        </ul>
        <div class="text-center">搜尋</div>