<script type="text/javascript">
  document.title = 'Danh sách tin tức';
</script> 
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        <h1>Tin tức</h1>
          <a href="/admin/news/create" class="btn btn-success">Tạo ra</a>
      </header>
      <div class="panel-body">
        <table class="table table-striped table-hover dt-datatable">
          <thead>
            <tr>
              <th>ID</th>
              <th>Hình ảnh</th>
              <th>Tiêu đề</th>
              <th>Ngày đăng</th>
              <th>Mô tả</th>
              <th class="no-sort"></th>
            </tr>
          </thead>
          <tbody>
              <?php 
                foreach($params['news'] as $newsModel) {
              ?>
                <tr class="news-list">
                    <td>1</td>
                    <td>
                        <img width="60" height="60"src="/images/news/<?=$newsModel->getImage();?>" />
                    </td>
                    <td><?=$newsModel->getTitle()?></td>
                    <td><?=$newsModel->getDate()?></td>
                    <td><?=$newsModel->getDescription()?></td>
                    <td>
                        <a class="fa fa-eye btn btn-info btn-sm" href="/admin/news/details?id=<?=$newsModel->getId()?>"></a>
                        <a class="fa fa-pencil btn btn-warning btn-sm" href="/admin/news/edit?id=<?=$newsModel->getId()?>"></a>
                        <?php $form = app\core\Form\Form::begin('/admin/news/delete', "post") ?>
                          <input type="hidden" name="id" value="<?=$newsModel->getId()?>">
                          <button type="submit" class="fa fa-trash btn btn-danger btn-sm"<?=$newsModel->getId()?>"></button>
                        <?php app\core\form\Form::end() ?>
                      </td>  
                </tr>
              <?php 
                }
              ?>

          </tbody>
        </table>
      </div>
    </section>
  </div>
</div>