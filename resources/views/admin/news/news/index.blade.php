
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
                            <li class="breadcrumb-item active">News</li>
                        </ol>
                    </div>
                    <a href="{{ route('admin.news.create') }}" class="mb-sm-0 btn btn-primary"><i class="fas fa-plus"></i> Add News</a>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="card-title text-center" style="color: #ffffff">All News</h4>
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

                                @foreach ($newses as $news)
                                    
                                
                            <tr>
                               

                                <td>{{ $news->category_name }}</td>     
                                <td>{{ $news->title }}</td>    
                                  
                                <td>{{ Illuminate\Support\Str::limit($news->details, 10) }}</td>
                                <td><img src="{{asset('photo/news')}}/{{ $news->image }}" alt="img" style="height: 40px"></td>  
                                <td>
                                    @if ( $news->status == 'Active')
                                       <span class="badge bg-success">Active</span>
                                       @else
                                        <span class="badge bg-danger">Deactive</span>

                                        @endif
                                </td>

                                <td>{{ $news->created_by }}</td>
                                <td>{{ $news->edited_by }}</td>
                                <td>
                                    <a type="submit" href="{{ route('admin.news.edit',$news->id) }}" class="btn btn-sm btn-success waves-effect waves-light">
                                        <i class="mdi mdi-pencil d-block font-size-16"></i>
                                    </a>
                                    <a href="{{ route('admin.news.destroy',$news->id) }}" id="delete" class="btn btn-sm btn-danger waves-effect waves-light">
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
