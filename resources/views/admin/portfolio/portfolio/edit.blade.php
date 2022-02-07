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
                                 Portfolio Edit
                            </div>
                           
                        </div>
                        <div class="card-body">
                           <form method="post" action="{{ route('admin.portfolio.update',$portfolio->id) }}"  }}>
                            @csrf
                               <div class="row">
                                   <div class="col-12">
                                    <div class="mb-3">
                                        <label for="">Select Category</label>
                                        <select class="form-select" aria-label="Default select example" name="category_name">
                         

                                            
                                            @foreach ($categories as $category )
                                            @if($category->status == 'Active')
                                            <option  value="{{ $category->category }}">{{ $category->category }}</option>
                                            @endif
                                            @endforeach 

                                            
                                            <option selected value="{{ $portfolio->category_name }}">{{ $portfolio->category_name }}</option> 
                                         

                                          </select>
                                    </div>

                                    <div class="mb-3">
                                        
                                        <label class="form-label" for="formrow-firstname-input">Portfolio Title </label>
                                        <input type="text" class="form-control" id="formrow-firstname-input" name="title" value="{{ $portfolio->title }}">
                                    </div>

                                   

                                    <div class="mb-3">
                                        
                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Portfolio Image</label>
                                            <img src="{{asset('photo/portfolio')}}/{{ $portfolio->image }}" alt="img" style="height: 40px" name="image">
                                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                          </div> 
                                    </div>

                                   

                                    <div class="mb-3">
                                        
                                        <label class="form-label" for="formrow-firstname-input">Portfolio Details</label>
                                     

                                        <textarea id="summernote" name="details">{{ $portfolio->details }}</textarea>
                                    </div>

                                    <div class="mb-3">
                                        
                                        <select class="form-select" aria-label="Default select example" name="status">
                                        <option @if ($portfolio->status == 'Active') selected @endif value="Active">Active</option>
                                        <option @if ($portfolio->status == 'Deactive') selected @endif value="Deactive">Deactive</option>
                                          </select>
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
