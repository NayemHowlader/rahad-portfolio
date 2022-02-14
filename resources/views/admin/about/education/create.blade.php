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
                            <li class="breadcrumb-item active">Education</li>
                            <li class="breadcrumb-item active">Create</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->

            <div class="row">
                <div class="col-6 m-auto">
                    <div class="card">
                        <div class="card-header text-center bg-primary text-white">
                            <div class="card-title">
                                Add Education
                            </div>
                           
                        </div>
                        <div class="card-body">
                           <form action="{{ route('admin.about.education.store') }}"  method="post" enctype="multipart/form-data">
                            @csrf
                               <div class="row">
                                   <div class="col-12">
                                    <div class="mb-3">
                                        
                                        <label class="form-label" for="formrow-firstname-input">Institute</label>
                                        <input type="text" class="form-control" id="formrow-firstname-input" name="institute" value="">
                                     @error('institute')
                                        <span class="text text-danger">{{$message}}</span>
                                    @enderror
                                    </div>

                                    <div class="mb-3">
                                        
                                        <label class="form-label" for="formrow-firstname-input">Degree</label>
                                        <input type="text" class="form-control" id="formrow-firstname-input" name="degree" value="">
                                     @error('degree')
                                        <span class="text text-danger">{{$message}}</span>
                                    @enderror
                                    </div>


                                    <div class="mb-3">
                                        
                                        <label class="form-label" for="formrow-firstname-input">Academic Year</label>
                                        <input type="text" class="form-control" id="formrow-firstname-input" name="year" value="">
                                     @error('year')
                                        <span class="text text-danger">{{$message}}</span>
                                    @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="form-label">Status</label>
                                        <select name="status" id="" class="form-control">
                                            <option value>---Select Status---</option>
                                            <option  value="Active">Active</option>
                                            <option  value="Deactive">Deactive</option>
                                        </select>
                                    @error('status')
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
