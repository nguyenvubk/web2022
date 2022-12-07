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
        <?php $form = app\core\Form\Form::begin('', "post") ?>
            <div class="form-group col-md-8">
                <label for="name">Tiêu đề bài viết</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Tên bài viết"
                    value="CÀ PHÊ SỮA ESPRESSO THE COFFEE HOUSE - BẬT LON BẬT VỊ NGON"
                >
            </div>
            <div class="form-group col-md-4">
              <label for="image">Hình ảnh</label>
              <input type="file" id="image" name="image" style="width: 100%" accept="image/png, image/jpeg" required>
            </div>
            <div class="form-group col-md-8">
              <label for="desc">Mô tả</label>
              <textarea type="text" class="form-control" id="desc" name="desc" placeholder="Mô tả">Cà phê sữa Espresso là một lon cà phê sữa giải khát với hương vị cà phê đậm đà từ 100% cà phê Robusta cùng vị sữa béo nhẹ cho bạn một trải nghiệm hương vị cà phê hoàn toàn mới.</textarea>
            </div>
            <div class="form-group col-md-4">
                <label for="status">Trạng thái</label>
                <select name="status" id="status" class="form-control" style="width:235px">
                    <option value="1">Đăng</option>
                    <option value="0" selected>Chưa đăng</option>
                </select>
            </div>
            <div class="form-group col-md-8">
                <label>Chi tiết bài viết</label>
                <textarea name="fulltext" id="fulltext" class="form-control">
                    <p>
                        <a href="https://order.thecoffeehouse.com/product/combo-6-lon-ca-phe-sua-espresso">
                            <span style="color:#e67e22;">
                                <strong>Cà phê sữa Espresso</strong>
                            </span> 
                        </a>là một lon cà phê sữa giải khát với hương vị cà phê đậm đà từ&nbsp;100% cà phê Robusta&nbsp;cùng&nbsp;vị sữa béo nhẹ&nbsp;cho bạn một trải nghiệm hương vị cà phê hoàn toàn mới.
                    </p>
                    <p style="text-align: center">
                        <img src="//file.hstatic.net/1000075078/file/1__1__90a516a282eb47e7a9e7b0c067259bc2_grande.jpg"><br>
                        <img src="//file.hstatic.net/1000075078/file/2__1__f131b72f82e84b93a1395802feabf47a_grande.jpg"><br>
                        <img src="//file.hstatic.net/1000075078/file/3__1__f843d744800248c483147b249705c769_grande.jpg"><br>
                        <img src="//file.hstatic.net/1000075078/file/4__1__f4d2204c33d144cc850f2292b602bd68_grande.jpg"><br>
                        <img src="//file.hstatic.net/1000075078/file/5_65f8e2cdb6784493899537b6a06e26f3_grande.jpg"><br>
                        <img src="//file.hstatic.net/1000075078/file/6_3fc5d2e56c59431485328c344a32f6d0_grande.jpg"><br>
                        <img src="//file.hstatic.net/1000075078/file/7__1__0005adebdecd427ab2d20936951a1f07_grande.jpg">
                    </p>
                    <p>&nbsp;</p>
                </textarea>
                <script>CKEDITOR.replace('fulltext');</script>
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