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
                            <li class="breadcrumb-item"><a href="{{ route('admin.portfolio.index') }}">Portfolio</a></li>
                            <li class="breadcrumb-item active">Create</li>
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
                           <form action="{{ route('admin.portfolio.store') }}"  method="post" enctype="multipart/form-data">
                            @csrf
                               <div class="row">
                                   <div class="col-12">
                                    <div class="mb-3">
                                        <label class="required" for="category">Select Category</label>
                                        <select class="form-select" aria-label="Default select example" name="category_name">
                                            <option >select category</option>
                                            @foreach ($categories as $category )
                                            @if($category->status == 'Active')
                                            <option  value="{{ $category->category }}">{{ $category->category }}</option>
                                            @endif
                                            @endforeach

                                            @error('category_name')
                                              <span class="text text-danger">{{$message}}</span>
                                             @enderror
                                          
                                          </select>
                                    </div>

                                    <div class="mb-3">
                                        
                                        <label class="form-label required" for="formrow-firstname-input">Portfolio Title </label>
                                        <input type="text" class="form-control" id="formrow-firstname-input" name="title" value="">
                                        @error('title')
                                              <span class="text text-danger">{{$message}}</span>
                                             @enderror
                                    </div>

                                   

                                    <div class="mb-3">
                                        
                                        <div class="form-group">
                                            <label class="required">Portfolio Image(600*600)</label>
                                            <input type="file" class="form-control" name="image" >
                                            @error('image')
                                              <span class="text text-danger">{{$message}}</span>
                                             @enderror
                                          </div> 
                                    </div>

                                   

                                    <div class="mb-3">
                                        
                                        <label class="form-label required" for="formrow-firstname-input">Portfolio Details</label>

                                        <textarea id="summernote" name="details"></textarea>
                                        @error('details')
                                        <span class="text text-danger">{{$message}}</span>
                                       @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label required" for="formrow-firstname-input">Select Status</label>
                                        <select class="form-select" aria-label="Default select example" name="status">
                                            <option selected>Select Status</option>
                                            <option value="Active">Active</option>
                                            <option value="Deactive">Deactive</option>
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
