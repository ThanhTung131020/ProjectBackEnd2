@extends('dashboard')
@section('content')
<main class="signup-form">    
                    <h3 class="card-header text-center">Details User</h3>                  
                        <section class="vh-100" style="background-color: #9de2ff;">
                          <div class="container py-5 h-200">
                            <div class="row d-flex justify-content-center align-items-center h-100">
                              <div class="col col-md-9 col-lg-7 col-xl-9">
                                <div class="card" style="border-radius: 15px;">
                                  <div class="card-body p-4">
                                    <div class="d-flex text-black">
                                      <div class="flex-shrink-0">
                                        <img src="{{url('uploads')}}/{{$users ->fileToUpload}}"
                                          alt="Generic placeholder image" class="img-fluid"
                                          style="width: 200px; border-radius: 10px;">
                                      </div>
                                      <div class="flex-grow-1 ms-1">
                                        <h5 class="mb-1">{{ $users->name }}</h5>
                                        <p class="mb-2 pb-1" style="color: #2b2a2a;">{{$users ->email}}</p>
                                        <div class="d-flex justify-content-start rounded-3 p-1 mb-2"
                                          style="background-color: #efefef;">
                                          <div>
                                            <p class="small text-muted mb-1">phone</p>
                                            <p class="mb-0">{{ $users ->phone }}</p>
                                          </div>
                                          <div class="px-1">
                                            <p class="small text-muted mb-1">created at</p>
                                            <p class="mb-0">{{ $users ->created_at }}</p>
                                          </div>
                                          <div class="px-1">
                                            <p class="small text-muted mb-1">password</p>
                                            <p class="mb-0">{{ $users ->password }}</p>
                                          </div>
                                        </div>
                                        <div class="d-flex pt-1">
                                          <button type="button" class="btn btn-outline-primary me-1 flex-grow-1">Chat</button>
                                          <button type="button" class="btn btn-primary flex-grow-1">Follow</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </section>
</main>
@endsection
