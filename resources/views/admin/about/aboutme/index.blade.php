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
                            <li class="breadcrumb-item active">About me</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->

            <div class="row">
                <div class="col-10 m-auto">
                    <div class="card">
                        <div class="card-header text-center bg-primary text-white">
                            <div class="card-title">
                                About Me
                            </div>
                           
                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.about.update',$about->id)}}" method="post">
                                @csrf
                               
                               <div class="row">
                                   <div class="col-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="formrow-email-input">Name</label>
                                        <input type="hidden" name="id" value="{{ $about->id }}">
                                        <input type="text" class="form-control" id="name"  name="name" value="{{$about->name}}">
                                        @error('name')
                                            <span class="text text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                   </div>
                                   <div class="col-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="formrow-email-input">Address</label>
                                        <input type="text" class="form-control" id="address" name="address" value="{{$about->address}}">

                                        @error('address')
                                            <span class="text text-danger">{{$message}}</span>
                                       @enderror
                                    </div>
                                   </div>
                                   <div class="col-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="formrow-email-input">Study</label>
                                        <input type="text" class="form-control" id="study" name="study" value="{{$about->study}}">
                                        @error('study')
                                            <span class="text text-danger">{{$message}}</span>
                                       @enderror
                                    </div>
                                   </div>
                               </div>

                               <div class="row">
                                <div class="col-4">
                                 <div class="mb-3">
                                     <label class="form-label" for="formrow-email-input">Degree</label>
                                     <input type="text" class="form-control" id="degree" name="degree" value="{{$about->degree}}">
                                     @error('degree')
                                            <span class="text text-danger">{{$message}}</span>
                                      @enderror
                                 </div>
                                </div>
                                <div class="col-4">
                                 <div class="mb-3">
                                     <label class="form-label" for="formrow-email-input">Mail</label>
                                     <input type="email" class="form-control" id="mail" name="mail" value="{{$about->mail}}">

                                     @error('mail')
                                            <span class="text text-danger">{{$message}}</span>
                                     @enderror
                                 </div>
                                </div>
                                <div class="col-4">
                                 <div class="mb-3">
                                     <label class="form-label" for="formrow-email-input">Phone</label>
                                     <input type="text" class="form-control" id="phone" name="phone" value="{{$about->phone}}">

                                     @error('phone')
                                     <span class="text text-danger">{{$message}}</span>
                                     @enderror

                                 </div>
                                </div>
                            </div>
                                      

                            <div class="row">
                                <div class="col-12">
                                 <div class="mb-3">
                                     <label class="form-label" for="formrow-firstname-input">Details</label>

                                     <textarea id="summernote" name="description">{{ $about->description }}</textarea>
                                                
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
        