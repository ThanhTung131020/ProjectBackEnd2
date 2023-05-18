
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap");

* {
  padding: 0;
  margin: 0;
  text-decoration: none;
  list-style: none;
  box-sizing: border-box;
  font-family: "Quicksand", sans-serif;
}

.main {
  width: 100%;
}

.content-left {
  width: 15%;
  float: left;
  height: 100%;
  top: 0;
  position: fixed;
  background-color: #22272b;
}


.content-right {
  width: 85%;
  float: right;
}

.logo {
  height: 84px;
  background-color: #07a044;
  padding: 20px 0 20px 20px;
}

.logo img {
  width: 200px;
  height: 65px;
  color: #fff;
}

.navigation {
  background-color: #2d343a;
  padding: 0 10px 30px;
}

.search input {
  width: 100%;
  background-color: #22272b;
  height: 38px;
  border: none;
  margin-top: 20px;
  text-indent: 15px;
}

.menu {
  margin-top: 15px;
  border-top: 1px solid #fff;
  padding-top: 10px;
}

ul.navbar-menu li {
  margin-bottom: 10px;
}

ul.navbar-menu li a {
  color: #bbbbbb;
  font-size: 16px;
  text-transform: uppercase;
  font-weight: 400;
}

ul.navbar-menu li a.active {
  color: #07a044;
}

.navigation-bottom {
  margin-top: 500px;
}

.account {
  border-top: 1px solid #07a044;
  padding: 20px;
  text-align: center;
}

.account a {
  color: #ffffff;
}

.account:hover {
  background-color: #07a044;
  transition: 0.3s;
  cursor: pointer;
}

.slide img {
  background-repeat: no-repeat;
  background-position: center;
  width: 100%;
  height: 600px;
}

.service {
  height: 168px;
  padding: 48px 24px;
  width: 100%;
}

.box {
  width: 25%;
  float: left;
  padding: 0 15px;
  margin-bottom: 18px;
}

.box-service {
  display: flex;
}

.icon-service img {
  width: 35px;
  height: 35px;
}

a.icon-circle {
  width: 65px;
  height: 65px;
  border-radius: 50%;
  background-color: #07a044;
  text-align: center;
  display: block;
  padding: 15px 0;
  margin-right: 10px;
}

.box-body {
  color: #000000;
}

.box-body span {
  font-size: 16px;
  font-weight: 700;
  line-height: 24px;
}

.box-body p {
  font-size: 16px;
  font-weight: 400;
}

.about {
  background-color: #07a044;
  height: 220px;
  padding: 48px;
  text-align: center;
  color: #ffffff;
}

.about h3 {
  font-size: 24px;
  font-weight: 700;
  margin-bottom: 15px;
}

.about p {
  width: 930px;
  max-width: 100%;
  margin: 0 auto;
  line-height: 24px;
}

.product {
  height: 512px;
  padding: 64px 24px 8px;
  position: relative;
  background-color: #efefef;
}

h3.title-product {
  text-align: center;
  font-size: 24px;
  margin-bottom: 40px;
}

h3.title-product a {
  color: #212529;
}

h3.title-product a:hover {
  color: #07a044;
  transition: 0.3s;
}

.img-thumb img {
    padding-left: 10px;
  width: 375px;
  height: 260px;
  background-color: #ffffff;
  object-fit: cover;
}

.info-car {
  position: relative;
}

h3.title {
  text-align: left;
}

h3.title a {
  font-size: 16px;
  color: #000000;
}

.price {
  margin-top: 5px;
  color: #000000;
}

span.price-old {
  color: #b8b8b8;
  font-size: 13px;
  text-decoration: line-through;
  font-weight: 500;
}

.chitiet {
  margin-top: 5px;
}

.chitiet a {
  color: #000000;
  font-weight: 600;
}

.chitiet a:hover {
  color: #07a044;
  transition: 0.3s;
}

.product.pd-af {
  padding: 48px 24px 8px;
}

.sale-car {
  background-color: #07a044;
  position: absolute;
  top: 0;
  right: -5px;
  padding: 5px 15px;
  transform: skewX(-20deg);
}

.sale-car span {
  color: #fff;
  font-weight: 600;
  letter-spacing: -1px;
}

.review {
  height: 460px;
  padding: 48px 24px 8px;
}

.review-left {
  width: 50%;
  float: left;
}

.review img {
  width: 796px;
  height: 398px;
  padding: 0 12px;
  object-fit: cover;
}

.review-right {
  width: 50%;
  float: right;
}

.event {
  height: 500px;
  padding: 48px 24px 8px;
}

.box-review {
  display: flex;
  height: 164px;
  background-color: #2d343a;
  margin-bottom: 15px;
  margin-right: 20px;
}

.box-review img {
  width: 328px;
  height: 164px;
}

.review-content {
  padding: 44px 15px;
}

h3.review-title {
  margin-bottom: 10px;
}

h3.review-title a {
  color: #ffffff;
  font-size: 18px;
  font-weight: 400;
}

h3.review-title a:hover {
  color: #07a044;
  transition: 0.3s;
}

.date span {
  color: #b3b3b3;
}

.footer {
  height: 418px;
}

.footer-left {
  width: 50%;
  float: left;
  background-image: url(/img/bg-contact.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  background-position: right;
  height: 418px;
  background-color: #07a044;
  background-blend-mode: multiply;
  padding: 48px 16px;
}

h3.footer-title {
  position: relative;
  margin-bottom: 28px;
}

h3.footer-title::before {
  position: absolute;
  content: "";
  height: 2px;
  width: 88px;
  background-color: #ffffff;
  position: absolute;
  left: 0;
  bottom: -2px;
}

h3.footer-title a {
  font-size: 48px;
  font-weight: 400;
  color: #ffffff;
}

span.logo-title {
  color: #ffffff;
  font-size: 25px;
}

.footer-left p {
  margin-bottom: 16px;
  color: #ffffff;
  font-weight: 600;
  margin-top: 8px;
  font-size: 16px;
}

.footer-right {
  width: 50%;
  float: right;
  background-color: #2d343a;
  height: 418px;
  padding: 48px 15px;
}

h2.title-register {
  color: #07a044;
  margin-bottom: 20px;
}

form.register-sub input.hoten {
  width: 100%;
  background-color: #ffffff;
  border: 1px solid #59646a;
  padding: 6px 12px;
  border-radius: 3px;
  margin-bottom: 10px;
  height: 38px;
  display: block;
  margin-bottom: 15px;
}

form.register-sub input::placeholder {
  font-size: 16px;
  color: #b8b8b8;
}

.regiter-left {
  margin-right: 10px;
}

.regiter-left input {
  width: 49%;
  float: left;
  background-color: #2d343a;
  border: 1px solid #59646a;
  padding: 6px 12px;
  border-radius: 3px;
  margin-bottom: 15px;
  height: 38px;
  display: block;
}

.regiter-right input {
  width: 49%;
  float: right;
  background-color: #2d343a;
  border: 1px solid #59646a;
  padding: 6px 12px;
  border-radius: 3px;
  margin-bottom: 15px;
  height: 38px;
  display: block;
}

textarea#form-group {
  width: 100%;
  background-color: #2d343a;
  border: 1px solid #59646a;
  border-radius: 3px;
  padding: 6px 12px;
  height: 86px;
  display: block;
}

textarea::placeholder {
  color: #b8b8b8;
  font-size: 16px;
}

.button-register {
  margin-top: 15px;
}

.button-register button {
  background-color: #07a044;
  padding: 6px 12px;
  color: #ffffff;
  font-size: 19px;
  text-transform: uppercase;
  font-weight: 600;
  height: 55px;
  width: 145px;
}

.button-register button:hover {
  border: 1px solid #07a044;
  color: #07a044;
  background-color: #2d343a;
  cursor: pointer;
  transition: 0.3s;
}

.breadcum {
  height: 160px;
  background-image: url(/img/breadcrumb.jpg);
  background-size: auto;
  background-position: top;
  background-repeat: no-repeat;
  position: relative;
  background-attachment: fixed;
}

.breadcum::before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  opacity: 0.5;
  background-color: #000000;
}

ul.breadcum-menu {
  text-align: center;
  position: relative;
  z-index: 3;
}

ul.breadcum-menu li {
  display: inline-block;
}

ul.breadcum-menu li a {
  line-height: 160px;
  color: #ffffff;
  font-weight: 500;
}

.com-info {
  background-image: url(/img/bg_com.png);
  height: 528px;
  background-size: cover;
  background-repeat: no-repeat;
  padding: 24px;
  background-position: bottom right;
}

h1.font-text {
  color: #ffffff;
  text-align: center;
  font-size: 40px;
}

.bread-box-info {
  width: 980px;
  margin: 0 auto;
  background-color: #ffffff;
  height: 424px;
  padding: 24px;
}

.bread-box-info p {
  font-size: 16px;
  margin-bottom: 16px;
}

a.name-info {
  color: #07a044;
  font-style: italic;
  font-weight: 700;
}

span.mews {
  color: #000000;
  font-style: italic;
  font-weight: 700;
}

.collection-product {
  background-color: #efefef;
  height: 1300px;
}

.sor-pagi {
  padding: 16px 24px;
  height: 58px;
  border-bottom: 1px solid #dcdcdd;
}

.form-checkput {
  margin-right: 15px;
}

.product.all-product {
  height: 1150px;
}

ul.pagination {
  text-align: center;
}

ul.pagination li {
  display: inline-block;
  width: 37px;
  height: 38px;
}

ul.pagination li a {
  padding: 8px 12px;
  border-color: #07a044;
  color: #000000;
  display: block;
  border: 1px solid #b3b3b3;
  margin: 0;
}

ul.pagination li a.page-link {
  border: 1px solid #07a044;
}

    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>mew cars</title>
</head>
<body>
    <div class="main">
        <div class="content-left">
            <div class="header-left">
                <div class="logo">
                    <a href="#">
                        <img src="https://static.vecteezy.com/system/resources/previews/010/890/876/original/illustration-car-logo-template-for-car-wash-auto-detailing-auto-glass-and-tint-service-modification-garage-free-vector.jpg" alt="">
                    </a>
                </div>
                <div class="side-bar">
                    <div class="navigation">
                        <div class="search">
                            <input type="text" placeholder="Từ khóa">
                        </div>
                        <div class="menu">
                            <ul class="navbar-menu">
                                <li><a href="{{route('home')}}" class="active">Trang chủ</a></li>
                               <li><a href="{{route('products')}}">sản phẩm</a></li>
                            </ul>
                        </div>
                    </div>
                  
                    <div class="navigation-bottom">
                        <div class="account">
                        </div>
                    </div>
                </div>
            </div>
        </div>
      @yield('content')
