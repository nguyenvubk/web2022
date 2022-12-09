<script type="text/javascript">
  document.title = 'Chỉnh sửa tin tức';
</script> 
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        <h1>Chỉnh sửa tin tức</h1>
        <a href="/admin/news">Trở về</a>
      </header>
      <div class="panel-body">
        <?php $form = app\core\Form\Form::beginEnctype('', "post") ?>
            <div class="form-group col-md-8">
                <label for="title">Tiêu đề bài viết</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Tên bài viết"
                    value="<?=$params['news']->getTitle()?>"
                >
            </div>
            <div class="form-group col-md-4">
              <label for="image">Hình ảnh</label>
              <input type="file" id="image" name="image" style="width: 100%" accept="image/png, image/jpeg, image/gif">
            </div>
            <div class="form-group col-md-8">
              <label for="description">Mô tả</label>
              <textarea type="text" class="form-control" id="description" name="description" placeholder="Mô tả"><?=$params['news']->getDescription()?></textarea>
            </div>
            <div class="form-group col-md-4">
                <label for="status">Trạng thái</label>
                <select name="status" id="status" class="form-control" style="width:235px">
                    <option value="1" <?=$params['news']->getStatus() ? 'selected' : '' ?>>Đăng</option>
                    <option value="0" <?=!$params['news']->getStatus() ? 'selected' : '' ?>>Chưa đăng</option>
                </select>
            </div>
            <div class="form-group col-md-8">
                <label>Chi tiết bài viết</label>
                <textarea name="content" id="content" class="form-control"><?=$params['news']->getContent()?></textarea>
                <script>CKEDITOR.replace('content');</script>
            </div>
        
          <div class="form-row">
            <div class="col-md-4">
              <button type="submit" class="btn btn-primary"><i class="fas fa-file-plus"></i> Chỉnh sửa bài viết</button>
            </div>
          </div>
        <?php app\core\form\Form::end() ?>
      </div>
    </section>
  </div>
</div>