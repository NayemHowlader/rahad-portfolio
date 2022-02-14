@extends('layouts.admin.admin_app')
@section('admin_content')
<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.user.index') }}">All User</a></li>
                            <li class="breadcrumb-item active">User</li>
                        </ol>
                    </div>
                    <a href="{{ route('admin.user.index') }}" class="mb-sm-0 btn btn-primary">All User</a>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-8 m-auto">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="card-title text-center" style="color: #ffffff">Add User</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 ">
                                <div class="card">
                                    <!-- end card header -->
                                    <div class="card-body">
                                        <div>
                                            <form method="post" action="{{ route('admin.user.store') }}" enctype="multipart/form-data">
                                                @csrf
                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label class="form-label">Name</label>
                                                        <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Enter Name" required/>
                                                        @error('name')
                                                            <span class="text text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label class="form-label">Email</label>
                                                        <span id="email_validation">
                                                            
                                                        </span>
                                                        <input type="email" onkeyup="emailValidate()" name="email" id="email" class="form-control" value="{{old('email')}}" placeholder="Enter Email" required/>
                                                       
                                                        @error('email')
                                                            <span class="text text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label class="form-label">Password</label>
                                                        <input type="password" name="password" value="{{old('password')}}" class="form-control" placeholder="Enter Password" required/>
                                                        @error('password')
                                                            <span class="text text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label class="form-label">Confirm Password</label>
                                                        <input type="password" name="password_confirmation" value="{{old('password_confirmation')}}" class="form-control" placeholder="Confirm Password" required/>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label class="form-label">User Role</label>
                                                        <select name="role" id="" class="form-control">
                                                            <option value="">---Select Role---</option>
                                                            <option value="SuperAdmin">Super Admin</option>
                                                            <option value="Admin">Admin</option>
                                                            <option value="Moderator">Moderator</option>
                                                        </select>
                                                     </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label class="form-label">Status</label>
                                                        <select name="status" id="" class="form-control">
                                                            <option value>---Select Status---</option>
                                                            <option value="Active">Active</option>
                                                            <option value="InActive">InActive</option>
                                                        </select>
                                                     </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label class="form-label">Image</label>
                                                        <input type="file" name="image" class="form-control"/>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </div>
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
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->

@section('admin_scripts')
@if (Session::has('alert-success'))
<script>
    toastr.success("{!! Session::get('alert-success') !!}");
</script>
@endif

<script>
    function emailValidate() {
        console.log('ok');
        var x = document.getElementById("email");
        $.ajax({
                type:'GET',
                url:'{!!URL::to('admin/user/email-validate')!!}',
                data:{'emailValidate':x.value},
                success:function(response){
                    if(response.message == 'Invalid'){
                         $('#email_validation').html("<span class='text text-danger'>Email Already Exists!!</span>");
                    }
                    else{
                        $('#email_validation').html("");
                    }
                   
                },

            });
    }
</script>

@endsection

@endsection
