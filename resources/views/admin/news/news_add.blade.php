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
                            <li class="breadcrumb-item active">News</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->

            <div class="row">
                <div class="col-8 m-auto">
                    <div class="card">
                        <div class="card-header text-center bg-primary text-white">
                            <div class="card-title">
                                Add News
                            </div>
                           
                        </div>
                        <div class="card-body">
                           <form>
                               <div class="row">
                                   <div class="col-12">
                                    <div class="mb-3">
                                        
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Select Category</option>
                                            <option value="1">Category One</option>
                                            <option value="2">Category Two</option>
                                            <option value="3">Category Three</option>
                                          </select>
                                    </div>


                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Select Image</label>
                                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                          </div> 
                                       
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="formrow-firstname-input">News Title </label>
                                        <input type="text" class="form-control" id="formrow-firstname-input" name="title" value="">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="formrow-firstname-input">News Description</label>
                                        
                                        
                                            <div id="ckeditor-classic"></div>
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
