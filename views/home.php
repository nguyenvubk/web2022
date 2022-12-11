<!-- <div class="home-promote">
    <div class="home-text">
        <img src="/images/kv-text.png" class="img-responsive" alt="Our story">
    </div>
    
</div> -->

<div class="home-page">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade d-flex align-items-center" data-bs-touch="true" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-current="true"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-current="true"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <?php 
                foreach ($params['news'] as $key => $newsModel) {
                    ?>
                    <div class="carousel-item <?=$key==0?'active':''?>" data-bs-interval="2000">
                        <a href="/news/content?id=<?=$newsModel->getId()?>">
                            <img src="/images/news/<?=$newsModel->getImage()?>" alt="...">

                        </a>
                    </div>
                    <?php
                }
            ?>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container">
        <div class="home-block">
            <div class="row menu-list-home">
                <div class="col-lg-6 col-12">
                    <img src="https://file.hstatic.net/1000075078/file/banner_app_59792ee4e6074b33aca7f140433e9292.jpg" alt="" class="w-100">
                </div>
                
                <?php foreach($params['product'] as $productModel) {
                    ?>
                    <div class="col-lg-3 col-6">
                        <a href="/product?id=<?=$productModel->getId()?>">
                            <img src="<?=$productModel->getImageUrl()?>" alt="" class="w-100">
                        </a>
                        <div class="menu-item-info">
                            <h3>
                                <a href="/product?id=<?=$productModel->getId()?>"><?=$productModel->getName()?></a>
                            </h3>
                            <p class="price-product-item"><?=number_format($productModel->getPrice())?> đ</p>
                        </div>
                    </div>
                    <?php
                } ?>


            </div>
        </div>
        <div class="home-block d-flex justify-content-center">
            <p class="introduce">-- Giới thiệu --</p>
        </div>
        <div class="home-block">
            <div class="row gy-5">
                <div class="col-md-12 col-lg-6 home-poster">
                    <img src="https://magiamgialientuc.com/wp-content/uploads/2018/08/T%C3%A1n-g%E1%BA%ABu-c%C3%B9ng-b%E1%BA%A1n-b%C3%A8-ho%E1%BA%B7c-th%C6%B0-gi%C3%A3n-t%E1%BA%A1i-The-Coffee-House.jpg" alt="" class="home-img w-100">
                </div>
                <div class="col-md-12 col-lg-6 home-content">
                    <div>
                        <img src="/images/home/bullet-1.png"/>
                    </div>
                    <h3>Không chỉ là uống cà phê</h3>
                    <p>
                    Việc đi uống cà phê từ lâu không chỉ là ngồi uống một tách cà phê mà còn là dịp gặp mặt và trò chuyện 
                    cùng bạn bè để cùng nhau thư giãn và chia sẻ những điều trong cuộc sống. Đến với <strong>My Coffee</strong>, 
                    chúng tôi trân trọng và đề cao giá trị kết nối giữa con người và trải nghiệm của khách hàng. Chúng 
                    tôi được truyền cảm hứng từ những ly cà phê và thức uống do mình tạo ra.
                    <br><br>

                    Chúng tôi tin tưởng mạnh mẽ rằng những thức uống đảm bảo nhất về chất lượng cùng thái độ phục vụ tận 
                    tình chu đáo và không gian yên tĩnh tại <strong>My Coffee</strong> sẽ mang lại những niềm vui cho bạn và bạn có 
                    thể chia sẻ cùng bạn bè và gia đình.
                    </p>
                </div>
                
            </div>
        </div>
        <div class="home-block">
            <div class="row gy-5">
                
                <div class="col-md-12 col-lg-6 home-content">
                    <div>
                        <img src="/images/home/bullet-2.png"/>
                    </div>
                    <h3>My Coffee</h3>
                    <p>
                    Bắt đầu ra mắt vào năm 2022 nhưng với cái tên <strong>My Coffee</strong> và sự phát triển của thương 
                    hiệu là điều mà nhiều Startup đáng mơ ước, đặc biệt trong ngành F&B. Ngôi nhà cà phê cho biết 
                    sẽ trở thành Starbucks thứ 2 ở Việt Nam, khi nhắc tới <strong>My Coffee</strong> là nhắc tới một thương 
                    hiệu cà phê Việt.
                    <br><br>
                    Có 3 yếu tố tiên quyết để quán cà phê này thu hút khách hàng là không gian của quán, thái độ phục 
                    vụ của nhân viên và những tiện ích mà chuỗi cửa hàng cà phê này mang lại cho khách hàng.
                    </p>
                </div>
                <div class="col-md-12 col-lg-6 home-poster">
                    <img src="https://magiamgialientuc.com/wp-content/uploads/2018/08/%C4%90%E1%BB%99i-ng%C5%A9-nh%C3%A2n-vi%C3%AAn-t%E1%BA%A1i-The-coffee-house-1.jpg" alt="" class="w-100">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div id="home-video" class="home-video">
                    <div id="home-video-image">
                        <img class="home-video-image" src="/images/kv-text.png" />
                    </div>
                    <iframe id="topVideo" class="video-play mb_YTVPlayer" frameborder="0" allowfullscreen="1"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        title="YouTube video player"
                        src="https://www.youtube.com/embed/9RUT30ni1_Y?&mute=1&loop=1&playlist=9RUT30ni1_Y&autoplay=1&amp;controls=0&amp;rel=0&amp;disablekb=0&amp;modestbranding=1&amp;showinfo=0&amp;preload=true&amp;playsinline=1&amp;iv_load_policy=3&amp;enablejsapi=1&amp;origin=http%3A%2F%2Fcaztus.vn&amp;widgetid=1"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function setHeight() {
    var topVideo = document.getElementById('topVideo');
    var homeVideoImage = document.getElementById('home-video-image');
    var homeVideo = document.getElementById('home-video');

    var width = topVideo.offsetWidth;
    document.getElementById('topVideo').style.height = 0.56 * (width);
    document.getElementById('home-video').style.height = 0.56 * (width);
    document.getElementById('home-video-image').style.height = homeVideoImage.offsetWidth / 1.38;



    document.getElementById('home-video-image').style.left = (topVideo.offsetWidth / 2) - (homeVideoImage.offsetWidth /
        2);
    document.getElementById('home-video-image').style.top = (topVideo.offsetHeight / 2) - (homeVideoImage.offsetHeight /
        2);
}

setHeight();
</script>