<?php
require('common/meta.php');
require('common/header.php');
?>
      <form class="card-body" method="POST" action="./model/login.php">
        <div class="form-group">
          <label for="userName">帳號</label>
          <input type="text" class="form-control" id="userName" name="userName" placeholder="請輸入帳號" require>
        </div>
        <div class="form-group">
          <label for="passWord">密碼</label>
          <input type="password" class="form-control" id="passWord" name="passWord" placeholder="請輸入密碼" require>
        </div>
        <button type="submit" class="btn btn-success">登入</button>
        <a href="register.php" class="btn btn-outline-danger">註冊</a>
      </form>
<?php require('common/footer.php');?>