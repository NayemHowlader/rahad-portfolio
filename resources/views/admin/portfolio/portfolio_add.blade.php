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
                            <li class="breadcrumb-item active">Portfolio</li>
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
                                Add Portfolio
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
                                        
                                        <label class="form-label" for="formrow-firstname-input">Project Name </label>
                                        <input type="text" class="form-control" id="formrow-firstname-input" name="title" value="">
                                    </div>

                                    <div class="mb-3">
                                        
                                        <label class="form-label" for="formrow-firstname-input">Client Name </label>
                                        <input type="text" class="form-control" id="formrow-firstname-input" name="title" value="">
                                    </div>

                                    <div class="mb-3">
                                        
                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Project Banner</label>
                                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                          </div> 
                                    </div>

                                    <div class="mb-3">

                                        <label for="basic-url">Project Link</label>
                                            <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                                            </div>
                                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                            </div>
                                    </div>

                                    <div class="mb-3">
                                        
                                        <label class="form-label" for="formrow-firstname-input">Project Details</label>
                                        
                                        
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
