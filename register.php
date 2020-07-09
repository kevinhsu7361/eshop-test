<?php
require('common/meta.php');
require('common/header.php');
?>
      <form class="card-body" method="POST" action="./model/register.php">
        <div class="form-group">
          <label for="userName">帳號</label>
          <input type="text" class="form-control" id="userName" name="userName" placeholder="請輸入帳號">
        </div>
        <div class="form-group">
          <label for="email">信箱</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="請輸入信箱">
        </div>
        <div class="form-group">
          <label for="phone">手機</label>
          <input type="text" class="form-control" id="phone" name="phone" placeholder="請輸入手機號碼">
        </div>
        <div class="form-group">
          <label for="passWord">密碼</label>
          <input type="password" class="form-control" id="passWord" name="passWord" placeholder="請輸入密碼">
        </div>
        <button type="submit" class="btn btn-success">註冊</button>
      </form>
    </div>
  </div>
<?php require('common/footer.php');?>