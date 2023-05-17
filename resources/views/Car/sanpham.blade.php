@extends('Car/index')
@section('content')


<body>
    <div class="main">
        <div class="content-left">
            <div class="header-left">
                <div class="logo">
                    <a href="#">
                        <img src="./img/logo.png" alt="">
                    </a>
                </div>
                <div class="side-bar">
                    <div class="navigation">
                        <div class="search">
                            <input type="text" placeholder="Từ khóa">
                        </div>
                        <div class="menu">
                            <ul class="navbar-menu">
                                <li><a href="./index.html" class="active">Trang chủ</a></li>
                                <li><a href="#">Giới thiệu</a></li>
                                <li><a href="#">Sản phẩm</a></li>
                                <li><a href="#">Tin tức</a></li>
                                <li><a href="#">Sự kiện</a></li>
                                <li><a href="#">Hệ thống cửa hàng</a></li>
                                <li><a href="#">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="navigation-bottom">
                        <div class="account">
                            <a href="#">Đăng nhập</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-right">
            <div class="breadcum">
                <ul class="breadcum-menu">
                    <li><a href="#">Trang chủ <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                    <li><a href="#">Tất cả sản phẩm</a></li>
                </ul>
            </div>
            <div class="collection-product">
                <div class="sor-pagi">
                    <b>Sắp xếp:</b>
                    <label for="" class="form-checkput">
                        <input type="radio">
                        A → Z
                    </label>
                    <label for="" class="form-checkput">
                        <input type="radio">
                        Z → A
                    </label>
                    <label for="" class="form-checkput">
                        <input type="radio">
                        Giá tăng dần
                    </label>
                    <label for="" class="form-checkput">
                        <input type="radio">
                        Giá giảm dần
                    </label>
                    <label for="" class="form-checkput">
                        <input type="radio">
                        Hàng mới nhất
                    </label>
                    <label for="" class="form-checkput">
                        <input type="radio">
                        Hàng cũ nhất
                    </label>
                </div>
                <div class="product all-product">
                    @foreach ($car as $item)
                    <div class="box">
                        <div class="img-thumb">
                            <a href="#">
                                <img src="{{$item ->mainImage}}" alt="">
                            </a>
                            <div class="info-car">
                                <h3 class="title">
                                    <a href="#">{{$item ->name}}</a>
                                </h3>
                                <div class="price">
                                    <span class="regular-price">{{$item ->price}}</span>
                                </div>
                                <div class="chitiet">
                                    <a href="#">
                                        Chi tiết
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    @endforeach
                   
                </div>
                <ul class="pagination">
                    <li>
                        <a class="" href="#" title="Trang trước">«</a>
                    </li>
                    <li>
                        <a href="#" class="page-link">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a title="Trang kế">»</a>
                    </li>
                </ul>
            </div>
            <!-- footer -->
            <div class="footer">
                <div class="footer-left">
                    <h3 class="footer-title">
                        <a href="#">Liên hệ</a>
                    </h3>
                    <span class="logo-title">
                        Mew S
                    </span>
                    <p>
                        Địa chỉ: Số 17/110 Trần Duy Hưng
                    </p>
                    <p>
                        Email: jansperry4@gmail.com
                    </p>
                    <p>
                        Số điện thoại: 0975997736
                    </p>
                    <div class="cart-icon">
                        <img src="./img/payment-1.png" alt="">
                        <img src="./img/payment-2.png" alt="">
                        <img src="./img/payment-3.png" alt="">
                        <img src="./img/payment-4.png" alt="">
                    </div>
                </div>
                <div class="footer-right">
                    <h2 class="title-register">Đăng ký tư vấn</h2>
                    <form action="" class="register-sub">
                        <input class="hoten" type="text" placeholder="Họ tên">
                        <div class="regiter-left">
                            <input type="text" placeholder="Số diện thoại">
                        </div> <div class="regiter-right">
                            <input type="text" placeholder="Địa chỉ email">
                        </div>
                        <textarea name="" id="form-group" cols="30" rows="10" placeholder="Lời nhắn"></textarea>
                    </form>
                    <div class="button-register">
                        <button>Đăng ký</button>
                    </div>
                </div>
            </div>
            <!-- footer ends -->
        </div>
    </div>
</body>
@endsection
@yield('content')