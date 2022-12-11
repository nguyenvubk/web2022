<script type="text/javascript">
  document.title = 'Sửa đổi sản phẩm';
</script> 
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        <h1>Sửa đổi sản phẩm</h1>
        <a href="/admin/products">Trở về</a>
      </header>
      <div class="panel-body">
        <?php $form = app\core\Form\Form::begin('', "post") ?>
          <div class="form-row">
            <div class="form-group col-md-3">
              <?php echo $form->field($productModel, 'id') ?>
            </div>
            <div class="form-group col-md-3">

              <label for="category_id">Tên mục</label>
              <select name="category_id" id="category_id" class='form-control'>
                <?php
                  foreach($params['categories'] as $category) {
                    ?>
                    <option value="<?=$category->getId()?>" <?=$productModel->getCategoryId() == $category->getId()?'selected':''?>><?=$category->getName()?></option>
                    <?php
                  }
                ?>
              </select>
            </div>

            </div>
            <div class="form-group col-md-3">
              <?php echo $form->fieldtype($productModel, 'price', 'number') ?>
            </div>
            <div class="form-group col-md-3">
              <?php echo $form->field($productModel, 'image_url') ?>
            </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <?php echo $form->field($productModel, 'description') ?>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-4">
              <button type="submit" class="btn btn-primary"><i class="fa fa-pencil"></i> Chỉnh sửa sản phẩm</button>
            </div>
          </div>
        <?php app\core\form\Form::end() ?>
      </div>
    </section>
  </div>
</div>