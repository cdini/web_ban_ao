<?php require('website/views/shared/header.php'); ?>
<style>
.modal-title h2{
    color: #000;
    margin-bottom: 1em;
}

</style>
    <div class="product-model">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="home"><b>TRANG CHỦ</b></a></li>
            <li class="active">Áo thun - thể thao</li>
        </ol>

        <div class="col-md-9 product-model-sec">
            <div class="feature-grids" style="background-color:#ffffff">
                <div class="section" id="intro">
                 <?php if (empty($livesports)) : ?>
                        <h3 class="col-sm-12">Không có sản phẩm nào trong danh mục này.</h3>
                    <?php endif; ?>
                    <!-- team -->
                <div class="row">
  <div class="column">
    <div class="card">
      <img src="public\upload\product\blong.png" alt="Jane" style="width:20%">
      <div class="container">
        <h2>LÂM BẢO LONG</h2>
        <p class="title">DEVELOPER</p>
        <p>cập nhật</p>
        <p>baolong@example.com</p>
        <p><button type="button" class="btn btn-primary">Liên hệ</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="public\upload\product\bao.jpg" alt="Mike" style="width:20%">
      <div class="container">
        <h2>NGUYỄN MINH BẢO</h2>
        <p class="title">DEVELOPER || BẢO TRÌ NÂNG CẤP WEBSITE</p>
        <p>Nhóm trưởng</p>
        <p>minhbao@example.com</p>
        <p><button type="button" class="btn btn-primary">Liên hệ</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="public\upload\product\baokim.jpg" alt="John" style="width:10%">
      <div class="container">
        <h2>Kim Gia Bảo</h2>
        <p class="title">THIẾT KẾ GIAO DIỆN UI/UX || VIẾT BÁO CÁO</p>
        <p>cập nhật</p>
        <p>kimbao@example.com</p>
        <p><button type="button" class="btn btn-primary">Liên hệ</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="public\upload\product\thai.jpg" alt="John" style="width:10%">
      <div class="container">
        <h2>NGUYỄN LÊ QUỐC THÁI</h2>
        <p class="title">THIẾT KẾ GIAO DIỆN UX/UI</p>
        <p>cập nhật</p>
        <p>baolong@example.com</p>
        <p><button type="button" class="btn btn-primary">Liên hệ</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="public\upload\product\plong.jpg" alt="John" style="width:10%">
      <div class="container">
        <h2>PHI LONG</h2>
        <p class="title"></p>
        <p>cập nhật</p>
        <p>philong@example.com</p>
        <p><button type="button" class="btn btn-primary">Liên hệ</button></p>
      </div>
    </div>
  </div>
</div>
                
                
                
                
              <!--  -->
                </div>
            </div>
        </div>
    <?php require('website/views/shared/navbar.php'); ?>
    </div>
</div>
</div>

<?php require('website/views/shared/footer.php'); ?>