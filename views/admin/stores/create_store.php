<script type="text/javascript">
  document.title = 'Thêm cửa hàng';
</script> 
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        <h1>Thêm cửa hàng</h1>
        <a href="/admin/stores">Trở về</a>
      </header>
      <div class="panel-body">
        <?php $form = app\core\Form\Form::begin('', "post") ?>
            <div class="form-group col-md-4">
              <label for="price">Tên cửa hàng</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Tên cửa hàng">
            </div>
            <div class="form-group col-md-4">
              <label for="address">Địa chỉ</label>
              <input type="text" class="form-control" id="address" name="address" placeholder="Địa chỉ">
            </div>
            <div class="form-group col-md-4">
              <label for="phone">Số điện thoại</label>
              <input type="text" class="form-control" id="phone" name="phone" placeholder="Số điện thoại">
            </div>
            <div class="form-group col-md-4">
              <label for="image_url">Địa chỉ hình ảnh</label>
              <input type="text" class="form-control" id="image_url" name="image_url" placeholder="Địa chỉ hình ảnh">
            </div>
            <div class="form-group col-md-4">
              <label for="open_time">Giờ mở cửa</label>
              <input type="text" class="form-control" id="open_time" name="open_time" placeholder="Giờ mở cửa">
            </div>
            <div class="form-group col-md-4">
            </div>
          <div class="form-row">
            <div class="col-md-4">
              <button type="submit" class="btn btn-primary"><i class="fa fa-cart-plus"></i> Tạo cửa hàng</button>
            </div>
          </div>
        <?php app\core\form\Form::end() ?>
      </div>
    </section>
  </div>
</div>