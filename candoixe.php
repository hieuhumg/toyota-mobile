<?php
include_once 'header.php';
?>
    <div class="banner-detail position-relative"
         style="background: url(dist/images/banner-canbanxe.jpg) no-repeat center; background-size: cover">
        <div class="container">
            <a href="" class="come-back"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
            <div class="title-car">
                <h3>Bạn cần đổi xe</h3>
                <p>Đổi xe nhanh chóng và dễ dàng với TOYOTA SURE</p>
            </div>
        </div>
    </div>

    <div class="car-sale"
         style="background: url(dist/images/banner2-canbanxe.jpg) no-repeat center; background-size: cover">
        <div class="container">
            <div class="car-sale-widget">
                <h5 class="mb-3">Hướng dẫn</h5>
                <div class="steps d-flex justify-content-between">
                    <p class="text active"><span>Bước 1:</span> Nhập thông tin về chiếc xe của bạn để hệ thống định giá.</p>
                    <p><i class="fa fa-arrow-right" aria-hidden="true"></i></p>
                    <p class="text"><span>Bước 2: </span> Nhập thông tin cá nhân của bạn để chúng tôi liên hệ và hỗ trợ bạn</p>
                    <p><i class="fa fa-arrow-right" aria-hidden="true"></i></p>
                    <p class="text"><span>Bước 3:</span> Chọn chiếc xe bạn muốn đổi từ kết quả tìm kiếm và xem khoảng giá chênh lệch.</p>
                </div>
                <div class="car-price">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Định giá xe của bạn</h3>
                            <p class="mt-2">Hãy nhập thông tin bên dưới, TOYOTA SURE sẽ giúp bạn định giá chiếc xe. Yêu
                                cầu khách hàng khai báo trung thực về tình trạng xe của bạn.</p>
                            <p class="note">* Chú ý: Giá trị thực tế của xe có thể sẽ có thay đổi một chút sau khi được
                                kiểm định thực tế</p>
                        </div>
                        <div class="col-md-12 p-0">
                            <div class="form-inline">
                                <div class="form-group col-3">
                                    <select class="custom-select">
                                        <option selected> Loại xe</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="form-group col-9 ">
                                    <select class="custom-select">
                                        <option selected>Loại xe</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 p-0">
                            <div class="form-inline">
                                <div class="form-group position-relative col-12">
                                    <img class="price position-absolute" src="dist/images/price.png" alt="">
                                    <input type="email" class="form-control" placeholder="Giá đề xuất"
                                           style="padding-left: 50px">
                                    <div class="VND position-absolute">VND</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 p-0">
                            <div class="form-inline">
                                <div class="form-group col-4">
                                    <select class="custom-select">
                                        <option selected> Dòng xe</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="form-group col-4 ">
                                    <select class="custom-select">
                                        <option selected> Phiên bản</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="form-group col-4 ">
                                    <select class="custom-select">
                                        <option selected> Năm sản xuất</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 p-0">
                            <div class="form-inline">
                                <div class="form-group col-4">
                                    <select class="custom-select">
                                        <option selected> Số km đã đi</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="form-group col-4 ">
                                    <select class="custom-select">
                                        <option selected> Nơi đăng ký</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="form-group col-4 ">
                                    <input type="text" class="form-control" placeholder="Thời gian bán">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 p-0">
                            <div class="form-inline">
                                <div class="form-group col-12">
                                    <textarea class="form-control" id="textarea" rows="6"
                                              placeholder="Thêm mô tả"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 p-0">

                        </div>
                        <div class="col-md-12 mt-4">
                            <h3>Thông tin của bạn</h3>
                            <p>Bạn hãy để lại thông tin để các chuyên gia của chúng tôi liên hệ và trợ giúp bạn định giá
                                chiếc xe được tốt nhất.</p>
                        </div>
                        <div class="col-md-12 p-0">
                            <form action="">
                                <div class="form-inline">
                                    <div class="form-group col-4">
                                        <input class="form-control" type="text" placeholder="Họ và tên">
                                    </div>
                                    <div class="form-group col-4">
                                        <input class="form-control" type="text" placeholder="Số điện thoại">
                                    </div>
                                    <div class="form-group col-4">
                                        <input class="form-control" type="text" placeholder="Email">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="change-car">
                <div class="d-flex justify-content-end align-items-center">
                    <span class="change">Nếu bạn có nhu cầu đổi xe - <a href="">Bấm vào đây</a></span>
                    <div class="more">
                        <a href="#modalsalecar">Ước tính giá trị xe của bạn</a>
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
    <div class="utility">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3 class="title-product">
                        <span>Tiện ích</span>  cho bạn
                    </h3>
                    <div class="widget">
                        <div class="row">
                            <div class="col-3">
                                <div class="sub-utility">
                                    <div class="image">
                                        <img src="dist/images/utility-icon-1.png" alt="">
                                    </div>
                                    <div class="title">
                                        <h5>
                                            Tính toán
                                            khoản vay
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="sub-utility">
                                    <div class="image">
                                        <img src="dist/images/utility-icon-2.png" alt="">
                                    </div>
                                    <div class="title">
                                        <h5>
                                            Tìm xe
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="sub-utility">
                                    <div class="image">
                                        <img src="dist/images/utility-icon-3.png" alt="">
                                    </div>
                                    <div class="title">
                                        <h5>
                                            Tìm đạ lý
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="sub-utility">
                                    <div class="image">
                                        <img src="dist/images/utility-icon-4.png" alt="">
                                    </div>
                                    <div class="title">
                                        <h5>
                                            Chuyển nhượng
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <h3 class="title-product">
                        <span>Giới thiệu </span>  bạn bè
                    </h3>
                    <div class="form-intro">
                        <h3>
                            Chúng tôi có chính sách thưởng cho người giới thiệu cực kỳ hấp dẫn ( <span>xem tại đây</span>). <br> Hãy giới thiệu cho chúng tôi ngay để được tư vấn.
                        </h3>
                        <form class="">
                            <div class="form-group mb-2">
                                <input type="text" class="form-control" id="staticEmail2" placeholder="Họ và tên">
                                <input type="text" class="form-control" id="inputPassword2" placeholder="Số điện thoại">
                            </div>
                            <div class="more float-right">
                                <a href="" style="padding: 14px 20px;">Liên hệ ngay</a>
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