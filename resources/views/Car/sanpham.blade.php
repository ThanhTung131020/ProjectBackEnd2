@extends('Car/header')

<body>
    <div class="main">

        <div class="content-right">
            <div class="breadcum">
                <ul class="breadcum-menu">
                    <li><a href="#">Trang chủ <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
                    <li><a href="#">Tất cả sản phẩm</a></li>
                </ul>
            </div>
            <div class="collection-product">
                <form action="" class="register-sub">
                    <input class="hoten" type="text" placeholder="Họ tên" name="key">

                </form>
                <div class="product all-product">
                    @foreach ($car as $item)
                    <div class="box">
                        <div class="img-thumb">
                            <a href="#">
                                <img src="{{url('uploads')}}/{{$item ->mainImage}}" alt="">
                            </a>
                            <div class="info-car">
                                <h3 class="title">
                                    <a href="#">{{$item ->name}}</a>
                                </h3>
                                <div class="price">
                                    <span class="regular-price">{{$item ->price}}</span>
                                </div>
                                <div class="chitiet">
                                    <a href="{{route('detail.car',['id'=>$item->id])}}">
                                        Chi tiết
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach

                </div>

            </div>
            {{$car->links()}}
            <!-- footer -->

            <!-- footer ends -->
        </div>
    </div>
</body>
