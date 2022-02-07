@extends('layouts.admin.admin_app')
@section('admin_content')



<div class="page-content">
    <div class="container-fluid">


        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Main</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->

            <div class="row">
                <div class="col-lg-6 m-auto sm-12">
                    <div class="card">
                        <div class="card-header text-center bg-primary text-white">
                            <div class="card-title">
                                Banner Section
                            </div>
                           
                        </div>
                        <div class="card-body">
                           <form action="{{route('admin.main.update')}}" method="post">
                            @csrf
                         
                               <div class="row">
                                   <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="formrow-firstname-input">Title</label>
                                        <input type="text" class="form-control" id="formrow-firstname-input" name="title" value="{{$main->title}}">
                                        @error('title')
                                         <span class="text text-danger">{{$message}}</span>
                                         @enderror
                                    </div>
                                   </div>
                               </div>
                               <div class="row">
                                   <div class="col-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="formrow-email-input">Sub title 1</label>
                                        <input type="text"  class="form-control" id="formrow-email-input" name="sub_title1" value="{{$main->sub_title1}}">
                                        @error('sub_title1')
                                        <span class="text text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                   </div>
                                   <div class="col-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="formrow-email-input">Sub title 1</label>
                                        <input type="text" class="form-control" id="formrow-email-input" name="sub_title2" value="{{$main->sub_title2}}">
                                        @error('sub_title2')
                                        <span class="text text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                   </div>
                                   <div class="col-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="formrow-email-input">Sub title 3</label>
                                        <input type="text" class="form-control" id="formrow-email-input" name="sub_title3" value="{{$main->sub_title3}}">
                                        @error('sub_title3')
                                        <span class="text text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                   </div>
                               </div>
                                      
                    
                                        
                                        
                                            <button type="submit" class="btn btn-primary w-mdm mt-4">Submit</button>
                                        
                                    </form>
                            
                        </div>
                    </div>
                </div>
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
