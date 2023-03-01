<?php
$options_category = array(
    'order_by' => 'Id'
);
$categories = get_all('categories', $options_category);
$contactinfo = get_a_record('contactinfo',1);
?>

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-3 address wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
                <h1>
                    contact info
                </h1>
                <address>
                    <p><i class="fa fa-home pr-10"></i> Địa chỉ: LÝ TỰ TRỌNG</p>

                    <p><i class="fa fa-globe pr-10"></i>VIỆT NAM</p>

                    <p><i class="fa fa-phone pr-10"></i> SĐT : 0123 456 789</p>

                </address>
            </div>
            <div class="col-lg-3 col-sm-3 address wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
                <h1>
                    Social
                </h1>
                <address>

                    <p><i class="fa fa-envelope pr-10"></i> Email : <a href="javascript:;">abcxyz@gmail.com</a></p>

                    <p><i class="fa fa-facebook pr-10"></i>  Facebook : <a href="javascript:;">https://www.facebook.com/BaoNSaKa.soccer/</a></p>

                    <p><i class="fa fa-envelope pr-10"></i> Zalo : <a href="javascript:;"> 0328452810</a></p>

                </address>
            </div>
            <div class="col-lg-3 col-sm-3">
                <div class="page-footer wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
                    <h1>
                        order
                    </h1>
                    <ul class="page-footer-list">
                        <li>
                            <i class="fa fa-angle-right"></i>
                            <a href="intro">Về chúng tôi</a>
                        </li>
                        <li>
                            <i class="fa fa-angle-right"></i>
                            <a href="intro">Hướng dẫn đặt hàng</a>
                        </li>
                        <li>
                            <i class="fa fa-angle-right"></i>
                            <a href="intro">Vận chuyển hàng</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3">
                <div class="page-footer wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
                    <h1>
                        Sản phẩm
                    </h1>
                    <ul class="page-footer-list">
                        <?php if (!empty($categories)) : ?>
                            <?php foreach ($categories as $category): ?>
                                <li>
                                    <i class="fa fa-angle-right"></i>
                                    <a href="group/<?php echo $category['Id'] ?>-<?php echo $category['alias'] ?>.html"> <?php echo $category['Name'] ?></a>
                                </li>
                            <?php endforeach; ?>
                        <?php endif ; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer end -->
<!--small footer start -->
<div class="footer-small">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-6 pull-right">
                <ul class="social-link-footer list-unstyled">
                    <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".1s"><a href="#"><i
                                class="fa fa-facebook"></i></a></li>
                    <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".2s"><a href="#"><i
                                class="fa fa-google-plus"></i></a></li>
                    <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".3s"><a href="#"><i
                                class="fa fa-dribbble"></i></a></li>
                    <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".4s"><a href="#"><i
                                class="fa fa-linkedin"></i></a></li>
                    <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".5s"><a href="#"><i
                                class="fa fa-twitter"></i></a></li>
                    <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".6s"><a href="#"><i
                                class="fa fa-skype"></i></a></li>
                    <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".7s"><a href="#"><i
                                class="fa fa-github"></i></a></li>
                    <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".8s"><a href="#"><i
                                class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <div class="copyright">
                    <p>&copy; Bao Nguyen Team DEV</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="fb-root"></div>
<script>
    (function($) {
        $(document).ready(function() {
            $('.fb-page-box').hide();
            $('.fb-page-header').click(function(){
                $('.fb-page-box').slideToggle();
            });
        });
    })(jQuery);
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
        fjs.parentNode.insertBefore(js, fjs);
    }
    (document, 'script', 'facebook-jssdk'));
</script>
<div class="fb-chat-popup">
    <div class="fb-page-header"><i class="fa fa-comments"></i> Hỗ Trợ Trực Tuyến</div>
    <div class="fb-page-box">
        <div class="fb-page" data-href="https://www.facebook.com/BaoNSaKa.soccer/" data-height="350" data-width="300" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="false" data-tabs="messages" data-show-posts="false"></div>
        <div class="chat-single"><a target="_blank" href="https://www.facebook.com/BaoNSaKa.soccer/"><i class="fa fa-facebook-square"></i> Fanpage Blog</a></div>
    </div>
</div>

<script src="<?=PATH_URL?>/public/js/responsiveslides.min.js"></script>
<script type="text/javascript" src="<?=PATH_URL?>/public/js/memenu.js"></script>
<script>
    $('#q').focus(function()
    {
        $(this).attr('data-default', $(this).width());
        $(this).animate({ width:370 }, 'slow');
    }).blur(function()
    {
        var w = $(this).attr('data-default');
        $(this).animate({ width: w }, 'slow');
    });
</script>

<script>
    $(function () {
        $("#slider").responsiveSlides({
            auto: true,
            speed: 500,
            namespace: "callbacks",
            pager: true,
        });
    });
</script>

<script>
    this.screenshotPreview = function () {
        xOffset = 10;
        yOffset = 30;
        $("a.screenshot").hover(function (e) {
                this.t = this.title;
                this.title = "";
                var c = (this.t != "") ? "<br/>" + this.t : "";
                $("body").append("<p id='screenshot'><img src='" + this.rel + "' alt='url preview' width='350' height='500' />" + c + "</p>");
                $("#screenshot")
                    .css("top", (e.pageY - xOffset) + "px")
                    .css("left", (e.pageX + yOffset) + "px")
                    .fadeIn("fast");
            },
            function () {
                this.title = this.t;
                $("#screenshot").remove();
            });
        $("a.screenshot").mousemove(function (e) {
            $("#screenshot")
                .css("top", (e.pageY - xOffset) + "px")
                .css("left", (e.pageX + yOffset) + "px");
        });
    };
</script>

<script>$(document).ready(function () {
        $(".memenu").memenu();
        screenshotPreview();
    });
</script>

</body>
</html>
