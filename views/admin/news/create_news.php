<script type="text/javascript">
  document.title = 'Tạo tin tức';
</script> 
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        <h1>Tạo tin tức</h1>
        <a href="/admin/news">Trở về</a>
      </header>
      <div class="panel-body">
        <?php $form = app\core\Form\Form::begin('', "post") ?>
            <div class="form-group col-md-8">
              <label for="name">Tiêu đề bài viết</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Tên bài viết">
            </div>
            <div class="form-group col-md-4">
              <label for="image">Hình ảnh</label>
              <input type="file" id="image" name="image" style="width: 100%" accept="image/png, image/jpeg" required>
            </div>
            <div class="form-group col-md-8">
              <label for="desc">Mô tả</label>
              <textarea type="text" class="form-control" id="desc" name="desc" placeholder="Mô tả"></textarea>
            </div>
            <div class="form-group col-md-4">
                <label for="status">Trạng thái</label>
                <select name="status" id="status" class="form-control" style="width:235px">
                    <option value="1">Đăng</option>
                    <option value="0">Chưa đăng</option>
                </select>
            </div>
            <div class="form-group col-md-8">
                <label>Chi tiết bài viết</label>
                <textarea name="fulltext" id="fulltext" class="form-control"></textarea>
                <script>CKEDITOR.replace('fulltext');</script>
            </div>
        
          <div class="form-row">
            <div class="col-md-4">
              <button type="submit" class="btn btn-primary"><i class="fas fa-file-plus"></i> Tạo bài viết</button>
            </div>
          </div>
        <?php app\core\form\Form::end() ?>
      </div>
    </section>
  </div>
</div>