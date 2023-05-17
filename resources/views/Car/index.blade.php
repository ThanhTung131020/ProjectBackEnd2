@extends('Car/header')
@section('content')

        <div class="content-right">
            <div class="slide">
                <a href="#">
                    <img src="https://etimg.etb2bimg.com/photo/92234254.cms" alt="">
                </a>
            </div>
            <!-- service -->
            <div class="service">
                <div class="box">
                    <div class="box-service">
                        <div class="icon-service">
                            <a href="#" class="icon-circle">
                                <img src="data:image/png;base64,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" alt="">
                            </a>
                        </div>
                        <div class="box-body">
                            <span>Vị thế của công ty</span>
                            <p>Với nhiều năm kinh nghiệm trong ngành du lịch và cho thuê xe ô tô</p>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="box-service">
                        <div class="icon-service">
                            <a href="#" class="icon-circle">
                                <img src="data:image/png;base64,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" alt="">
                            </a>
                        </div>
                        <div class="box-body">
                            <span>Có mặt khắp nơi</span>
                            <p>Showroom có mặt tại Hà Nội, Hải Phòng cùng 16 tỉnh thành khác</p>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="box-service">
                        <div class="icon-service">
                            <a href="#" class="icon-circle">
                                <img src="https://media.istockphoto.com/id/1355934840/vector/full-customer-care-service-icon-vector-illustration.jpg?s=612x612&w=0&k=20&c=XBY9TTVW00cFB35_kSKIiyqSlb_16qlk3op0AiRw4sM=" alt="">
                            </a>
                        </div>
                        <div class="box-body">
                            <span>Phục vụ chuyên nghiệp</span>
                            <p>Đội ngũ tư vấn chuyên nghiệp, tận tình</p>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="box-service">
                        <div class="icon-service">
                            <a href="#" class="icon-circle">
                                <img src="https://d1nhio0ox7pgb.cloudfront.net/_img/g_collection_png/standard/512x512/gift.png" alt="">
                            </a>
                        </div>
                        <div class="box-body">
                            <span>Quà tặng hấp dẫn</span>
                            <p>Ưu đãi cực khủng nhân dịp Tết Tân Sửu</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- service ends -->
            <!-- about -->
            <div class="about">
                <h3>VỀ MEW S</h3>
                <p>Mang xứ mệnh là đem đến các sản phẩm tốt nhất cho khách hàng trong lĩnh vực cung cấp các dòng ô tô cao cấp, chúng tôi <br> mang đến bạn các dịch vụ không thể hấp hấp dẫn hơn. <br>
                    Mew-S thành lập từ 2015 và không ngừng phát triển mạng lưới showroom trên khắp Việt Nam.
                </p>
            </div>
            <!-- about ends -->
            <!-- product -->
            <div class="product">
                <h3 class="title-product">
                    <a href="#">SẢN PHẨM NỔI BẬT</a>
                </h3>
                <div class="box">
                    <div class="img-thumb">
                        <a href="#">
                            <img src="https://mensfolio.vn/wp-content/uploads/2021/07/Aventador-Ultimae-Coupe-1-3961-1625659942.jpg" alt="">
                        </a>
                        <div class="info-car">
                            <h3 class="title">
                                <a href="#">Honda CRV-E</a>
                            </h3>
                            <div class="price">
                                <span class="regular-price">998.000.000₫</span>
                            </div>
                            <div class="chitiet">
                                <a href="#">
                                    Chi tiết
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="img-thumb">
                        <a href="#">
                            <img src="https://mensfolio.vn/wp-content/uploads/2021/07/Aventador-Ultimae-Coupe-1-3961-1625659942.jpg" alt="">
                        </a>
                        <div class="info-car">
                            <h3 class="title">
                                <a href="#">Honda Brio</a>
                            </h3>
                            <div class="price">
                                <span class="regular-price">450.000.000₫</span>
                            </div>
                            <div class="chitiet">
                                <a href="#">
                                    Chi tiết
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="img-thumb">
                        <a href="#">
                            <img src="https://mensfolio.vn/wp-content/uploads/2021/07/Aventador-Ultimae-Coupe-1-3961-1625659942.jpg" alt="">
                        </a>
                        <div class="info-car">
                            <h3 class="title">
                                <a href="#">Honda HR-V-L</a>
                            </h3>
                            <div class="price">
                                <span class="regular-price">Liên hệ</span>
                            </div>
                            <div class="chitiet">
                                <a href="#">
                                    Chi tiết
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="img-thumb">
                        <a href="#">
                            <img src="https://mensfolio.vn/wp-content/uploads/2021/07/Aventador-Ultimae-Coupe-1-3961-1625659942.jpg" alt="">
                        </a>
                        <div class="info-car">
                            <h3 class="title">
                                <a href="#">Honda Accord</a>
                            </h3>
                            <div class="price">
                                <span class="regular-price">998.000.000₫</span>
                            </div>
                            <div class="chitiet">
                                <a href="#">
                                    Chi tiết
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- product ends -->
            <div class="product pd-af">
                <h3 class="title-product">
                    <a href="#">SẢN PHẨM BÁN CHẠY</a>
                </h3>
                <div class="box">
                    <div class="img-thumb">
                        <a href="#">
                            <img src="https://mensfolio.vn/wp-content/uploads/2021/07/Aventador-Ultimae-Coupe-1-3961-1625659942.jpg" alt="">
                        </a>
                        <div class="info-car">
                            <h3 class="title">
                                <a href="#">Honda CRV-E</a>
                            </h3>
                            <div class="price">
                                <span class="regular-price">998.000.000₫</span>
                                <span class="price-old">1.000.000.000₫</span>
                            </div>
                            <div class="chitiet">
                                <a href="#">
                                    Chi tiết
                                </a>
                            </div>
                            <div class="sale-car">
                                <span>-15%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="img-thumb">
                        <a href="#">
                            <img src="https://mensfolio.vn/wp-content/uploads/2021/07/Aventador-Ultimae-Coupe-1-3961-1625659942.jpg" alt="">
                        </a>
                        <div class="info-car">
                            <h3 class="title">
                                <a href="#">Honda CRV-E</a>
                            </h3>
                            <div class="price">
                                <span class="regular-price">998.000.000₫</span>
                            </div>
                            <div class="chitiet">
                                <a href="#">
                                    Chi tiết
                                </a>
                            </div>
                            <div class="sale-car">
                                <span>-15%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="img-thumb">
                        <a href="#">
                            <img src="https://mensfolio.vn/wp-content/uploads/2021/07/Aventador-Ultimae-Coupe-1-3961-1625659942.jpg" alt="">
                        </a>
                        <div class="info-car">
                            <h3 class="title">
                                <a href="#">Honda CRV-E</a>
                            </h3>
                            <div class="price">
                                <span class="regular-price">998.000.000₫</span>
                            </div>
                            <div class="chitiet">
                                <a href="#">
                                    Chi tiết
                                </a>
                            </div>
                            <div class="sale-car">
                                <span>-15%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="img-thumb">
                        <a href="#">
                            <img src="https://mensfolio.vn/wp-content/uploads/2021/07/Aventador-Ultimae-Coupe-1-3961-1625659942.jpg" alt="">
                        </a>
                        <div class="info-car">
                            <h3 class="title">
                                <a href="#">Honda CRV-E</a>
                            </h3>
                            <div class="price">
                                <span class="regular-price">998.000.000₫</span>
                            </div>
                            <div class="chitiet">
                                <a href="#">
                                    Chi tiết
                                </a>
                            </div>
                            <div class="sale-car">
                                <span>-15%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- review -->
            <div class="review">
              
                <div class="review-left">
                    
                    <a href="#">
                        <img src="https://assets.entrepreneur.com/content/3x2/2000/1661888151-DAL500017.jpg" alt="">
                    </a>
                </div>
                <div class="review-right">
                    <a href="#">
                        <img src="https://www.bugatti.com/fileadmin/_processed_/sei/p1/se-image-d37f5243f6ae21dcfb1fbf28dfe261f5.jpg" alt="">
                    </a>
                </div>
            </div>
            <!-- review ends -->
            <!-- event -->
            <div class="event">
                <h3 class="title-product">
                    <a href="#">TIN TỨC - SỰ KIỆN</a>
                </h3>
                <div class="review-left">
                    <div class="box-review">
                        <div class="review-img">
                            <a href="#">
                                <img src="https://media.architecturaldigest.com/photos/60f99c2c0adf8cd1e3beca71/16:9/w_1935,h_1088,c_limit/Now%20You%20Drive%201.jpg" alt="">
                            </a>
                        </div>
                        <div class="review-content">
                            <h3 class="review-title">
                                <a href="#" title="Kia Seltos không còn khan hàng, khách nhận xe trước Tết hưởng trọn">Kia Seltos không còn khan hàng, khách nhận xe trước Tết hưởng trọn</a>
                            </h3>
                            <div class="date">
                                <span>24/12/2020</span>
                            </div>
                        </div>
                    </div>
                    <div class="box-review">
                        <div class="review-img">
                            <a href="#">
                                <img src="https://stimg.cardekho.com/images/carexteriorimages/630x420/Audi/A4/9321/1670914111785/front-left-side-47.jpg?impolicy=resize&imwidth=480" alt="">
                            </a>
                        </div>
                        <div class="review-content">
                            <h3 class="review-title">
                                <a href="#" title="Kia Seltos không còn khan hàng, khách nhận xe trước Tết hưởng trọn">Phân khúc xe hạng A tháng 11/2020: Fadil và Grand i10 cạnh tranh 'máu lửa'</a>
                            </h3>
                            <div class="date">
                                <span>24/12/2020</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="review-right">
                    <div class="box-review">
                        <div class="review-img">
                            <a href="#">
                                <img src="https://www.charlottemclaren.com/wp-content/uploads/2019/09/mclaren-gt.jpg" alt="">
                            </a>
                        </div>
                        <div class="review-content">
                            <h3 class="review-title">
                                <a href="#" title="Kia Seltos không còn khan hàng, khách nhận xe trước Tết hưởng trọn">Top 10 xe bán chạy nhất thị trường Việt tháng 11/2020: VinFast Fadil tăng trưởng mạnh, vượt Hyundai Accent</a>
                            </h3>
                            <div class="date">
                                <span>24/12/2020</span>
                            </div>
                        </div>
                    </div>
                    <div class="box-review">
                        <div class="review-img">
                            <a href="#">
                                <img src="https://www.bugatti.com/fileadmin/_processed_/sei/p1/se-image-d37f5243f6ae21dcfb1fbf28dfe261f5.jpg" alt="">
                            </a>
                        </div>
                        <div class="review-content">
                            <h3 class="review-title">
                                <a href="#" title="Kia Seltos không còn khan hàng, khách nhận xe trước Tết hưởng trọn">VinFast lập kỷ lục doanh số tháng 11, Fadil vững vàng No.2 toàn thị trường</a>
                            </h3>
                            <div class="date">
                                <span>24/12/2020</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- event ends -->
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
                        </div>
                        <div class="regiter-right">
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

</html>
@endsection
