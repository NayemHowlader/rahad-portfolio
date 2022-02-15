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
            <li class="breadcrumb-item"><a href="{{ route('admin.service.index') }}">Service</a></li>
            <li class="breadcrumb-item active">Edit</li>
        </ol>
    </div>
    <a href="{{ route('admin.service.index') }}" class="mb-sm-0 btn btn-primary"> All Service</a>
</div>
</div>
</div>
<!-- end page title -->

<div class="row">
<div class="col-8 m-auto">
<div class="card">
    <div class="card-header bg-primary">
        <h4 class="card-title text-center" style="color: #ffffff">Edit Serivice</h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="card">
                    <!-- end card header -->
                    <div class="card-body">
                        <div>

                            <form method="post" action="{{ route('admin.service.update',$service->id) }}" enctype="multipart/form-data">
                                
                                @csrf

                                <div class="mb-3">
                        
                                    <label class="form-label required" for="formrow-firstname-input">Title</label>
                                    <input type="text" class="form-control" id="formrow-firstname-input" name="title" value="{{ $service->title }}">
                                    @error('title')
                                    <span class="text text-danger">{{$message}}</span>
                                @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label required">Status</label>
                                    <select name="status" id="" class="form-control">
                                        <option value>---Select Status---</option>
                                        <option @if ($service->status == 'Active') selected @endif value="Active">Active</option>
                                        <option @if ($service->status == 'Deactive') selected @endif value="Deactive">Deactive</option>
                                    </select>
                                    @error('status')
                                    <span class="text text-danger">{{$message}}</span>
                                @enderror
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

@endsection

@endsection
