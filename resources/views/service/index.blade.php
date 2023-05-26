{{$i = 0}}
@extends('admin/layout')
@section('content')
    <div class="container">
        <div class="card">
            <div class="car-haeder">
                <div class="row">
                    <div class="col-md-6">


                        <h3>danh sach tu van</h3>

                    </div>

                </div>


            </div>

            <div class="car-body">


                <table class="table table-borderd" style="font-family: Bold ; font-weight: bold">

                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>tên</th>
                        <th>sdt</th>
                        <th>loi nhan</th>
                        <th>email</th>
                         <th>chức năng</th>

                    </tr>
                    </thead>

                    <tbody>


                        @foreach($people as $item)
                        <tr>

                            <td>{{++$i}}</td>

                            <td>{{$item->name}}</td>
                            <td>{{$item->phone}}</td>
                            <td>{{$item->message}} </td>
                            <td>{{$item->email}}</td>
                            <td><a href="{{route('delete',['id'=>$item->id])}}">xóa</a></td>

                        </tr>

                        @endforeach
                    </tbody>
                </table>
                {{$people->links()}}
            </div>
        </div>
    </div>

@endsection
