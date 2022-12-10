<script type="text/javascript">
  document.title = 'Xem tin tức';
</script> 
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        <h1>Xem tin tức</h1>
        <a href="/admin/news">Trở về</a>
      </header>
      <div class="panel-body">
        <label>Hình ảnh</label><br>
        <img src="/images/news/<?=$params['news']->getImage()?>" width="500px"><br><br>
        <label>Tiêu đề bài viết</label>
        <p><?=$params['news']->getTitle()?></p>
        <label>Mô tả</label>
        <p><?=$params['news']->getDescription()?></p>
        <label>Trạng thái</label>
        <p><?=$params['news']->getStatus() ? 'Đăng': 'Chưa đăng'?></p>
        <label>Chỉnh sửa lần cuối</label>
        <p><?=$params['news']->getDate()?></p>
        <label>Nội dung</label>
        <div class="content">
          <?=$params['news']->getContent()?>
        </div>

      </div>
    </section>
  </div>
</div>