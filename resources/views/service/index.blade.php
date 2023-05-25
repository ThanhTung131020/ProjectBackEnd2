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
                        <th>ID</th>
                        <th>tên</th>
                        <th>sdt</th>
                        <th>loi nhan</th>
                        <th>email</th>


                    </tr>
                    </thead>

                    <tbody>



                        <tr>

                            <td>{{++$i}}</td>
                            <td>121</td>
                            <td>1231</td>
                            <td>1231</td>
                            <td>
                                </td>

                        </tr>

                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endsection
