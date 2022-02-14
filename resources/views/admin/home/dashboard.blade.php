@extends('layouts.admin.admin_app')
@section('admin_content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Welcome !</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active">Welcome !</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">

            <div class="col-xl-3 col-md-6">
                <!-- card -->
                <div class="card card-h-100">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <h5 class="text-muted mb-3 lh-1 d-block">Super Admin</h5>
                                <h6 class="mb-3">
                                  <span>{{ $superadmin }}</span>
                                </h6>
                            </div>

                            <div class="admin-icon">
                                <i class="fas fa-user-shield" style="color: #f0674c;font-size:25px"></i>
                            </div>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col -->

            <div class="col-xl-3 col-md-6">
                <!-- card -->
                <div class="card card-h-100">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <h5 class="text-muted mb-3 lh-1 d-block">Admin</h5>
                                <h6 class="mb-3">
                                    <span>{{ $admin }}</span> 
                                </h6>
                            </div>

                            <div class="admin-icon">
                                <i class="fas fa-user-shield" style="color: #f0674c;font-size:25px"></i>
                            </div>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col -->


            <div class="col-xl-3 col-md-6">
                <!-- card -->
                <div class="card card-h-100">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <h5 class="text-muted mb-3 lh-1 d-block">Moderator</h5>
                                <h6 class="mb-3">
                                     <span>{{ $moderator }}</span> 
                                </h6>
                            </div>

                            <div class="admin-icon">
                                <i class="fas fa-user-shield" style="color: #f0674c;font-size:25px"></i>
                            </div>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col -->


            <div class="col-xl-3 col-md-6">
                <!-- card -->
                <div class="card card-h-100">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <h5 class="text-muted mb-3 lh-1 d-block">Services</h5>
                                <h6 class="mb-3">
                                <span>{{ $services }}</span> 
                                </h6>
                            </div>

                            <div class="admin-icon">
                
                                <i class="fab fa-servicestack" style="color: #f0674c;font-size:25px"></i>
                            </div>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col -->

            <div class="col-xl-3 col-md-6">
                <!-- card -->
                <div class="card card-h-100">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <h5 class="text-muted mb-3 lh-1 d-block">Partners</h5>
                                <h6 class="mb-3">
                                   <span>{{ $partners }}</span> 
                                </h6>
                            </div>

                            <div class="admin-icon">
                            
                                <i class="fas fa-hands-helping" style="color: #f0674c;font-size:25px"></i>
                            </div>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col -->


            <div class="col-xl-3 col-md-6">
                <!-- card -->
                <div class="card card-h-100">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <h5 class="text-muted mb-3 lh-1 d-block">Testimonials</h5>
                                <h6 class="mb-3">
                                    <span>{{ $testimonials }}</span> 
                                </h6>
                            </div>

                            <div class="admin-icon">
                                <i class="fas fa-book" style="color: #f0674c;font-size:25px"></i>
                            </div>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col -->


            <div class="col-xl-3 col-md-6">
                <!-- card -->
                <div class="card card-h-100">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <h5 class="text-muted mb-3 lh-1 d-block">Portfolios</h5>
                                <h6 class="mb-3">
                                   <span>{{ $portfolios }}</span> 
                                </h6>
                            </div>

                            <div class="admin-icon">
                                <i class="fas fa-user-circle" style="color: #f0674c;font-size:25px"></i>
                            </div>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col -->



            <div class="col-xl-3 col-md-6">
                <!-- card -->
                <div class="card card-h-100">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <h5 class="text-muted mb-3 lh-1 d-block">News</h5>
                                <h6 class="mb-3">
                             <span>{{ $news }}</span> 
                                </h6>
                            </div>

                            <div class="admin-icon">
                                <i class="fas fa-newspaper" style="color: #f0674c;font-size:25px"></i>
                            </div>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col -->

        </div><!-- end row-->
    </div>
    <!-- container-fluid -->
</div>
@endsection
