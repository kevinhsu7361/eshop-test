<?php 
  require('./handle/deffense.php');
  require('common/meta.php');
  require('common/header.php');
?>

    <h3 class="h5 text-center my-3">歡迎你，管理者[<?= $_SESSION['userName']?>]</h3>
    <ul class="nav justify-content-center mb-3">
      <li class="nav-item">
        <a class="nav-link" href="./shoppingCart.php">購物車</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./addJob.php">賣商品</a>
      </li>
        <li class="nav-item">
          <a class="nav-link" href="./checkJobs.php">買過的商品</a>
        </li>
      <li class="nav-item">
        <a class="nav-link" href="./handle/logout.php">登出</a>
      </li>
    </ul>
    <div class="row">
    <?php include('./handle/admin_getCommodity.php'); ?>
      <?php foreach ($jobs as $key => $item): ?>
        <div class="col-lg-4 col-md-6 mb-3">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title"><?= $item['name'] ?></h5>
              <p class="card-text"><?= $item['picture'] ?></p>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
<?php require('common/footer.php');?>