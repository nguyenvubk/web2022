<script type="text/javascript">
  document.title = 'Thông tin cửa hàng';
</script> 
<div class="row">
  <div class="col-lg-6">
    <section class="panel">
      <header class="panel-heading">
        <h1>Thông tin cửa hàng</h1>
        <a href="/admin/stores">Trở về</a>
      </header>
      <div class="panel-body">
        <dl class="dl-horizontal">
          <dt>Mã cửa hàng</dt><dd><?= $params['storeModel']->getId() ?></dd>
          <dt>Trạng thái</dt><dd><?= $params['storeModel']->getStatus() ?></dd>
          <dt>Địa chỉ</dt><dd><?= $params['storeModel']->getAddress() ?></dd>
          <dt>Số điện thoại</dt><dd><?= $params['storeModel']->getHotline() ?></dd>
          <dt>Giờ mở cửa</dt><dd><?= $params['storeModel']->getOpentime() ?></dd>
        </dl>
      </div>
    </section>
  </div>
</div>