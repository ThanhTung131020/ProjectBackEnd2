@extends('admin/layout')
@section('content')
    <div class="container">
        <div class="card">
            <div class="car-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>thêm sản phẩm</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('admin.car')}}" class="btn btn-primary float-end">danh sách sản phẩm </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('add.custom')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                    <strong>
                        tên xe
                    </strong>
                    <input type="text" name="name" class="form-control" placeholder="nhập tên">
                </div>
                <div class="form-group">
                    <strong>
                        giá
                    </strong>
                    <input type="text" name="price" class="form-control" placeholder="nhập giá">
                </div>
                <div class="form-group">
                    <strong>
                        năm sản xuất
                    </strong>
                    <input type="text" name="manufacture" class="form-control" placeholder="nhập năm sản xuất">
                </div>
                <div class="form-group">
                    <strong>
                        mô tả chi tiết
                    </strong>
                    <input type="text" name="description" class="form-control" placeholder="mô tả chi tiết">
                </div>
                <div class="form-group">
                    <strong>
                        hãng sản xuất
                    </strong>
                    <input type="text" name="company" class="form-control" placeholder="nhập hãng sản xuất">
                </div>
                <div class="form-group" style="margin-top: 50px ; ">
                    <strong style="">
                        ảnh chính
                    </strong>
                    <input type="file" name="mainImage" id="mainImage" style="margin-left: 22px">
                </div>
                <div class="form-group" style="margin-top:20px">
                    <strong>
                        ảnh chi tiết 1
                    </strong>
                    <input type="file" name="image1" id="image1">
                </div>
                <div class="form-group" style="margin-top:20px">
                    <strong>
                        ảnh chi tiết 2
                    </strong>
                    <input type="file" name="image2" id="image2">
                </div>
                <div class="form-group" style="margin-top:20px">
                    <strong>
                        ảnh chi tiết 3
                    </strong>
                    <input type="file" name="image3" id="image3">
                </div>
            </div>
            <button type="submit" class="btn btn-success mt-2" style="padding: 20px">THÊM</button>
            
            </form>
        </div>
    </div>
    </div>
@endsection
