<?php 
  require('./handle/deffense.php');
  require('common/meta.php');
  require('common/header.php');
?>
    <form method="POST" action="./handle/createJob.php" enctype="multipart/form-data">
      <div class="form-group">
        <label for="name">商品名稱</label>
        <input type="text" class="form-control" id="name" name="name">
      </div>
      <div class="form-group">
        <label for="description">商品敘述</label>
        <textarea class="form-control" id="description" rows="5" name="description"></textarea>
      </div>
      <div class="form-group">
        <label for="counts">數量</label>
        <input type="number" class="form-control" id="counts"  name="counts">
      </div>
      <div class="form-group">
        <label for="price">單價</label>
        <input type="number" class="form-control" id="price"  name="price">
      </div>
      <div class="form-group">
        <label for="image">上傳圖片：</label>
        <input type="file" class="form-control" id="image "name="image" >
      </div>
      <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary">送出</button>
      </div>
    </form>
<?php require('common/footer.php');?>