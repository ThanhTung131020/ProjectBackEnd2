
@extends('admin/layout')
@section('content')
<div class="container">
    <div class="card">
        <div class="car-haeder">
            <div class="row">
                <div class="col-md-6">
                    <script>https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js</script>
                    <script type="text/javascript">
                    $(document).ready(function (){
                        $('#sort').on('change', function(){
                            var url = $(this).val();
                            alert(url);
                        })
                    })
                    </script>
                    @csrf


                    <h3>quản lý xe</h3>

                </div>
                <div class="col-md-6">
                    <a href="{{route('admin.add')}}" class="btn btn-primary float-end">thêm mới </a>

                </div>
            </div>


        </div>
        @if(Session::has('thongbao'))
            <div class="alert alert-success">
                {{Session::get('thongbao')}}
            </div>
        @endif
        <div class="car-body">


            <table class="table table-borderd" style="font-family: Bold ; font-weight: bold">

                <thead>
                    <tr>
                        <th>STT</th>
                        <th>ID</th>
                        <th>tên xe</th>
                        <th>ảnh chính</th>
                        <th>chức năng</th>


                    </tr>
                </thead>

                <tbody>
                    {{$i = 0}}
                    @foreach ($car as $item)

                        <tr>

                            <td>{{++$i}}</td>
                            <td>{{$item ->id}}</td>
                            <td>{{$item ->name}}</td>
                            <td style="">
                                <img src="{{url('uploads')}}/{{$item ->mainImage}}" alt="" width="80px" height="80px">
                               </td>
                               <td><a href="{{route('editProducts',['id' => $item->id])}}" style="background-color: rgb(30, 210, 231) ; border-radius: 5px ; padding: 10px ; text-decoration-line: none ; color: aliceblue ">sửa</a>
                                <a href="{{route('delete',['id'=>$item->id])}}" style="background-color: rgb(237, 19, 19) ; border-radius: 5px ; padding: 10px ; text-decoration-line: none  ; color: gold ">xóa</a></td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$car->links()}}
        </div>
    </div>
</div>

@endsection
