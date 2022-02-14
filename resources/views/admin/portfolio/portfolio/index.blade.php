
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
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Portfolio</li>
                        </ol>
                    </div>
                    <a href="{{ route('admin.portfolio.create') }}" class="mb-sm-0 font-size-18 btn btn-primary"><i class="fas fa-plus"></i> Add Portfolio</a>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="card-title text-center" style="color: #ffffff">All Portfolio</h4>
                    </div>
                    <div class="card-body">

                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                            <thead>
                            <tr>
                                <th>Category Name</th>
                                <th>Title</th>
                                <th>Details</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Created By</th>
                                <th>Edited By</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                                @foreach ($portfolios as $portfolio)
                                    
                                
                            <tr>
                               

                                <td>{{ $portfolio->category_name }}</td>     
                                <td>{{ $portfolio->title }}</td>    
                                  
                                <td>{{ Illuminate\Support\Str::limit($portfolio->details, 10) }}</td>
                                <td><img src="{{asset('photo/portfolio')}}/{{ $portfolio->image }}" alt="img" style="height: 40px"></td>  
                                <td>
                                    @if ( $portfolio->status == 'Active')
                                       <span class="badge bg-success">Active</span>
                                       @else
                                        <span class="badge bg-danger">Deactive</span>

                                        @endif
                                </td>

                                <td>{{ $portfolio->created_by }}</td>
                                <td>{{ $portfolio->edited_by }}</td>
                                <td>
                                    <a type="submit" href="{{ route('admin.portfolio.edit',$portfolio->id) }}" class="btn btn-sm btn-success waves-effect waves-light">
                                        <i class="mdi mdi-pencil d-block font-size-16"></i>
                                    </a>
                                    <a href="{{ route('admin.portfolio.destroy',$portfolio->id) }}" id="delete" class="btn btn-sm btn-danger waves-effect waves-light">
                                        <i class="mdi mdi-trash-can d-block font-size-16"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

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
