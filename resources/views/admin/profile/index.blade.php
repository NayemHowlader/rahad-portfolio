@extends('layouts.admin.admin_app')
@section('admin_content')

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-12">
                <div class="profile-user"></div>
            </div>
        </div>

        <div class="row">
           <div class="profile-content">
               <div class="row align-items-end">
                    <div class="col-sm">
                        <div class="d-flex align-items-end mt-3 mt-sm-0">
                            <div class="flex-shrink-0">
                                <div class="avatar-xxl me-3">
                                    <img src="{{asset('photo/profile')}}/{{ Auth::user()->adminProfile->image }}" alt="" class="img-fluid d-block img-thumbnail">
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <div>
                                    <h5 class="font-size-16 mb-1">{{ Auth::user()->adminProfile->name }}</h5>
                                    <p class="text-muted font-size-13 mb-2 pb-2">
                                        @if (Auth::user()->role == 'SuperAdmin')
                                            <span>Super Admin</span>
                                        @elseif (Auth::user()->role == 'Admin')
                                            <span>Admin</span>
                                        @else
                                            <span>Moderator</span>
                                        @endif

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
           </div>
        </div>
        @section('admin_scripts')
            @if (Session::has('alert-success'))
            <script>
                toastr.success("{!! Session::get('alert-success') !!}");
            </script>
            @endif

            @if (Session::has('alert-danger'))
            <script>
                toastr.warning("{!! Session::get('alert-danger') !!}");
            </script>
            @endif
        @endsection

        <div class="row">
            <div class="col-lg-12">
               <div class="card bg-transparent shadow-none">
                   <div class="card-body">
                        <ul class="nav nav-tabs-custom card-header-tabs border-top mt-2" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link px-3 active" data-bs-toggle="tab" href="#overview" role="tab">Update Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-3" data-bs-toggle="tab" href="#post" role="tab">Update Password</a>
                            </li>
                        </ul>
                   </div>
               </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-8 col-lg-8">
                <div class="tab-content">
                    <div class="tab-pane active" id="overview" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-12 ">
                                <div class="card">
                                    <!-- end card header -->
                                    <div class="card-body">
                                        <div>
                                            <form method="post" action="{{ route('admin.profile.update',Auth::user()->id) }}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label class="form-label">Name</label>
                                                            <input type="text" name="name" class="form-control" value="{{Auth::user()->adminProfile->name }}" placeholder="Enter Name" />
                                                            @error('name')
                                                                <span class="text text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label class="form-label">Email</label>
                                                            <input type="email" name="email" class="form-control" value="{{Auth::user()->email}}" placeholder="Enter Email" />
                                                            @error('email')
                                                                <span class="text text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label class="form-label">Phone</label>
                                                            <input type="text" name="phone" class="form-control" value="{{Auth::user()->adminProfile->phone}}" placeholder="Enter phone" />
                                                            @error('phone')
                                                                <span class="text text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label class="form-label">Image</label>
                                                            <input type="file" name="image" class="form-control"/>
                                                            {{-- <img src="{{asset('photo/profile')}}/{{ Auth::user()->adminProfile->image }}" alt="" style="width:100px;margin-top:20px"> --}}
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group mb-3">
                                                            <label class="form-label">Address</label>
                                                            <textarea name="address" id="" cols="50" class="form-control" rows="5">{{Auth::user()->adminProfile->address}}</textarea>
                                                            @error('address')
                                                                <span class="text text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                </div>

                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end tab pane -->

                    <div class="tab-pane" id="post" role="tabpanel">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12 ">
                                        <div class="card">
                                            <!-- end card header -->
                                            <div class="card-body">
                                                <div>
                                                    <form method="post" action="{{ route('admin.profile.update_password',Auth::user()->id) }}">
                                                        @csrf
                                                        <div class="form-group mb-3">
                                                            <label class="form-label">Old Password</label>
                                                            <input type="password" name="previous_password" value="{{old('password')}}" class="form-control" placeholder="Enter Password" required/>
                                                            @error('previous_password')
                                                                <span class="text text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label class="form-label">Password</label>
                                                            <input type="password" name="password" class="form-control" placeholder="Enter Password" required/>
                                                            @error('password')
                                                                <span class="text text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label class="form-label">Confirm Password</label>
                                                            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required/>
                                                        </div>
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-primary">Update Password</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card -->
                                    </div>
                                    <!-- end col -->
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                        <!-- end card -->
                    </div>
                    <!-- end tab pane -->
                </div>
                <!-- end tab content -->
            </div>
            <!-- end col -->
            <!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->

    @section('admin_scripts')
        @if (Session::has('alert-success'))
        <script>
            toastr.success("{!! Session::get('alert-success') !!}");
        </script>
        @endif

        @if (Session::has('alert-danger'))
        <script>
            toastr.warning("{!! Session::get('alert-danger') !!}");
        </script>
        @endif
    @endsection

@endsection
