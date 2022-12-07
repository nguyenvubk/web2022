<script type="text/javascript">
  document.title = 'Bảng điều khiển';
</script> 

<div class="main_notification">
<div class="row">
  <div class="col-sm-6 col-md-3">
    <div class="card card-stats card-primary">
      <a href="/admin/users">
        <div class="card-body">
          <div class="row">
            <div class="col-5">
              <div class="icon-big text-center card-icon">
                <i class="fa fa-users"></i>
              </div>
            </div>
            <div class="col-7 d-flex align-items-center">
              <div class="numbers">
                <p class="card-category">Thành viên</p>
                <?php
                    $count = 0;
                    foreach($params['users'] as $user) {
                      if($user->getRole() === 'client') $count++;
                    }
                    echo '<h4 class="card-title"> ' . $count .' </h4>';
                ?>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="card card-stats card-success">
      <a href="/admin/orders/accepted">
        <div class="card-body ">
          <div class="row">
            <div class="col-5">
              <div class="icon-big text-center card-icon">
              <i class="fas fa-chart-bar"></i>
              </div>
            </div>
            <div class="col-7 d-flex align-items-center">
              <div class="numbers">
              
                <p class="card-category">Doanh thu</p>
              
                <?php
                    echo '<h4 class="card-title"> ' . number_format($params['list'][0], 0, ',', '.') . ' VNĐ' .' </h4>';
                ?>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="card card-stats card-danger">
      <a href="/admin/products">
        <div class="card-body">
          <div class="row">
            <div class="col-5">
              <div class="icon-big text-center card-icon">
                <i class="far fa-newspaper"></i>
              </div>
            </div>
            <div class="col-7 d-flex align-items-center">
              <div class="numbers">
              
                <p class="card-category">Sản phẩm</p>
                <?php
                      $count = 0;
                      foreach($params['products'] as $product) {
                        $count ++;
                      }
                      echo '<h4 class="card-title"> ' . $count .' </h4>';
                      ?>
              </div>
            </div>
          </div>
        </div>
      </a>

    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="card card-stats card-warning">
      <a href="/admin/orders/accepted">
      <div class="card-body ">
        <div class="row">
          <div class="col-5">
            <div class="icon-big text-center card-icon">
              <i class="far fa-check-circle"></i>
            </div>
          </div>
          <div class="col-7 d-flex align-items-center">
            <div class="numbers">
              <p class="card-category">Đã bán</p>
              <?php
                    echo '<h4 class="card-title"> ' . $params['list'][1] .' </h4>';
                    ?>
            </div>
          </div>
        </div>
      </div>
      </a>
    </div>
  </div>
</div>
</div>