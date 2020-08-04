
<div class="footer">
    <div class="container">
        <div class="box-footer">
            <div class="row">
                <div class="col-md-5">
                    <div class="logo-footer">
                        <img src="dist/images/logo-footer.png" alt="">
                        <p>Chuyên trang mua bán ô tô đã qua sử dụng của TOYOTA Việt Nam</p>
                    </div>
                </div>
                <div class="col-md-7">
                    <ul class="menu-footer">
                        <li>
                            <a href="">Tìm mua xe</a>
                            <a href="">Cần bán xe</a>
                            <a href="">Cần đổi xe</a>
                        </li>
                        <li>
                            <a href="">Giới thiệu</a>
                            <a href="">Danh sách đâị lý</a>
                            <a href="">Hướng dẫn</a>
                        </li>
                        <li>
                            <a href="">Chính sách bảo hành</a>
                            <a href="">Quy trình thẩm định</a>
                            <a href="">Công cụ hỗ trợ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="box-footer">
            <div class="row">
                <div class="col-md-5">
                    <div class="title">
                        <h3>CÔNG TY Ô TÔ TOYOTA VIỆT NAM</h3>
                        <p>Số GCNĐKDN: 2500150335</p>
                        <p>Cấp lần đầu: Ngày 26/03/2007</p>
                        <p>Đăng ký thay đổi lần thứ 16: Ngày 07/05/2018</p>
                        <p>Cơ quan cấp: Sở kế hoạch và đầu tư tỉnh Vĩnh Phúc</p>
                        <p>Địa chỉ: Phường Phúc Thắng, Thành phố Phúc Yên, Tỉnh Vĩnh Phúc, Việt Nam</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <form class="form-contact" action="">
                        <h3>ĐĂNG KÝ NHẬN THÔNG TIN VỀ TOYOTA SURE</h3>
                        <div class="form-group">
                            <input type="text" class="form-control mb-3" placeholder="Họ và tên">
                            <input type="text" class="form-control" placeholder="Email:">
                        </div>
                        <a href="" class="buy" style="width: 120px; float: right">Đăng ký</a>
                    </form>
                </div>
                <div class="col-md-3">
                    <div class="info-footer">
                        <h3>THÔNG TIN LIÊN HỆ</h3>
                        <p><i class="fas fa-phone-alt"></i> 1800 1524  -  0916 001 524</p>
                        <p><i class="fas fa-envelope"></i> toyota_sure@toyotavn.com.vn</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="copyright d-flex justify-content-between align-items-center">
            <img src="dist/images/thongbao.png" alt="">
            <p>Bản quyền 2020 thuộc về TOYOTA Việt Nam</p>
        </div>
    </div>
</div>

</body>
<script src="dist/js/jquery3-2-1.js"></script>
<script src="dist/js/boostrap-datepicker.js"></script>
<script src="dist/bootstrap/js/bootstrap.min.js"></script>
<script src="dist/slick-1.6.0/slick/slick.min.js"></script>
<script src="dist/js/cascadingDivs.js"></script>
<script src="dist/js/stellarnav.min.js"></script>
<script src="dist/WOW-master/dist/wow.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
<script src="dist/box/jquery.fancybox.min.js"></script>
<script src="dist/js/custom.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        jQuery('#banners').cascadingDivs();
        //js banner index
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36251023-1']);
        _gaq.push(['_setDomainName', 'jqueryscript.net']);
        _gaq.push(['_trackPageview']);

        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();

        jQuery('.stellarnav').stellarNav({
            theme: 'dark',
            breakpoint: 1200,
            position: 'right',
            phoneBtn: '#',
            locationBtn: '#'
        });
        //open modal can doi xe
        $('a[href$="#candoixe"]').on( "click", function() {
            $('#candoixe').modal('show');
        });

    });
</script>
<script>
    document.getElementById('vid').play();
</script>

<script src="https://code.jquery.com/jquery-migrate-3.0.1.js"></script>
<script>
    new WOW().init();
</script>
</html>