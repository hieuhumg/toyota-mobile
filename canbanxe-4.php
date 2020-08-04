<?php
include_once 'header.php';
?>
    <div class="banner-detail position-relative"
         style="background: url(dist/images/banner-canbanxe.jpg) no-repeat center; background-size: cover">
        <div class="container">
            <a href="" class="come-back"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
            <div class="title-car">
                <h3>Bạn cần bán xe</h3>
                <p>TOYOTA Sure sẽ giúp bạn với quy trình chuyên nghiệp, nhanh chóng</p>
            </div>
        </div>
    </div>

    <div class="car-sale"
         style="background: url(dist/images/banner2-canbanxe.jpg) no-repeat center; background-size: cover">
        <div class="container">
            <div class="car-sale-widget">
                <h5>Hướng dẫn</h5>
                <div class="steps d-flex align-items-center">
                    <p><span>Bước 1:</span> Nhập thông tin về chiếc xe của bạn để hệ thống định giá.</p>
                    <p><i class="fa fa-arrow-right" aria-hidden="true"></i></p>
                    <p><span>Bước 2: </span> Nhập thông tin cá nhân của bạn để chúng tôi liên hệ và hỗ trợ bạn</p>
                </div>
                <div class="car-price">
                    <div class="row">
                        <div class="col-8 pr-4">
                            <h3>Định giá xe của bạn</h3>
                            <p>Hãy nhập thông tin bên dưới, TOYOTA SURE sẽ giúp bạn định giá chiếc xe.
                                Hãy đảm bảo xe của bạn không đâm đụng, không thủy kích và thông tin khai báo là sự
                                thật.</p>
                            <form action="">
                                <div class="d-flex flex-wrap mt-5">
                                    <select class="custom-select">
                                        <option selected>Loại xe</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <select class="custom-select">
                                        <option selected>Dòng xe</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <select class="custom-select">
                                        <option selected>Năm sản xuất</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <select class="custom-select">
                                        <option selected>Phiên bản</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <select class="custom-select">
                                        <option selected>Loại hộp số</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <select class="custom-select">
                                        <option selected>Số km đã đi</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <select class="custom-select">
                                        <option selected>Nơi đăng ký</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </form>
                            <p class="note">* Chú ý: Giá trị thực tế của xe có thể sẽ có thay đổi một chút sau khi được
                                kiểm định thực tế</p>
                            <span class="change">Nếu bạn có nhu cầu đổi xe - <a href="">Bấm vào đây</a></span>
                        </div>
                        <div class="col-4 pl-5">
                            <h5>Thông tin của bạn</h5>
                            <p>Bạn hãy để lại thông tin để các chuyên gia của chúng tôi liên hệ và trợ giúp bạn định giá
                                chiếc xe được tốt nhất.</p>
                            <form action="">
                                <div class="form-sale-car mt-3">
                                    <input type="text" class="form-control" placeholder="Họ và tên">
                                    <input type="text" class="form-control" placeholder="Số điện thoại">
                                    <a href="#modalsalecar" class="tuvan">Ước tính giá trị xe của bạn</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Trigger the modal with a button -->
    <!-- Modal -->
    <div id="modalsalecar" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal">Đóng</button>
                <div class="modal-body">
                    <div class="element">
                        <p class="value"><i class="far fa-sack-dollar"></i> Giá trị ước tính khoảng <span>450.000.000 - 500.000.000</span>VND
                        </p>
                        <p class="endo"><i class="fas fa-badge-dollar"></i> Ưu đãi đặc biệt, khi bán xe tại hệ thống của
                            Toyota Sure, bạn được hưởng voucher giảm giá 15tr cho việc ABC...</p>
                        <p>Danh sách các đại lý có ưu đãi, bạn hãy chọn đại lý để tư ván cho bạn</p>
                        <form action="" class="mt-5">
                            <div class="form-inline justify-content-between align-items-center">
                                <select class="custom-select" style="width: 400px;height: 40px">
                                    <option selected>Toyota Cầu Diễn - Hà Nội (gần bạn nhất)</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <a href="" class="tuvan">Tư vấn cho tôi ngay</a>
                                <span class="change">Nếu bạn có nhu cầu đổi xe - <a href="">Bấm vào đây</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
include_once 'footer.php';
?>