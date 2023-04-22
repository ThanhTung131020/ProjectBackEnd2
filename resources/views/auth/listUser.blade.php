@extends('dashboard')
@section('content')
<main class="signup-form">
    
                    <h3 class="card-header text-center">List user</h3>
                   
                        <form action="" method="POST"  enctype="multipart/form-data">
                            @csrf
                           <table class="table table-borderred">
                            <thead>

                              <tr>
                              
                                <th>Name</th>
                                <th>Email</th>
                                
                                <th>phone</th>
                                <th>Create at</th>
                                <th>Image</th>
                                <th>Detail User</th>
                              </tr>
                            </thead>
                          
                            <tbody>
                              
                                  
                            
                              @foreach ($users as $item)
                              <tr>                               
                                <td>{{ $item ->name  }}</td>
                                <td>{{ $item ->email  }}</td>                             
                                <td>{{ $item ->phone  }}</td>
                                <td>{{ $item ->created_at->format('m-d-Y')}}</td>                               
                              <td><img src="{{url('uploads')}}/{{$item ->fileToUpload}}" alt="" width="80px" height="80px"></td>
                              <td><a href="{{route('detail.user',['id'=> $item ->id])}}">View</a></td>
                              </tr>
                              @endforeach
                              
                            </tbody>
                           </table>
                           {{$users->links()}}
                        </form>          
</main>
@endsection