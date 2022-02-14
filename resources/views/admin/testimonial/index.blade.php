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
                            <li class="breadcrumb-item active">Testimonials</li>
                        </ol>
                    </div>
                    <a href="{{ route('admin.testimonial.create') }}" class="mb-sm-0 btn btn-sm btn-primary"><i class="fas fa-plus"></i> Add Testimonial</a>
                </div>
            </div>
        </div>
        <!-- end page title -->
       <div class="row">
           <div class="col-12">
               <div class="card">
                   <div class="card-header">
                       <div class="card-title">
                           All Testimonial
                       </div>
                   </div>
                   <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                          <tr>
                              <th>S/N</th>
                              <th>Name</th>
                              <th>Desination</th>
                              <th>Details</th>
                              <th>Status</th>
                              <th>Added By</th>
                              <th>Edited By</th>
                              <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($testimonials as $testimonial )
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $testimonial->name }}</td>
                                    <td>{{ $testimonial->desination }}</td>
                                    <td>{{ Illuminate\Support\Str::limit($testimonial->details, 10) }}</td>
                                    <td>
                                        @if ($testimonial->status == 'Active')
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-danger">Deactive</span>
                                        @endif
                                    </td>
                                    <td>{{ $testimonial->users_addedby->email }}</td>
                                    <td>
                                        @if ($testimonial->edited_by != null)
                                            
                                        {{ $testimonial->users_editedby->email }}
                                        
                                        @endif
                                    </td>
                                   
                                    <td>
                                        <a href="{{ route('admin.testimonial.edit', $testimonial->id) }}" class="btn btn-sm btn-primary"> <i class="mdi mdi-pencil d-block font-size-16"></i></a>
                                        <a href="{{ route('admin.testimonial.destroy', $testimonial->id) }}" class="btn btn-sm btn-primary"> <i class="mdi mdi-trash-can d-block font-size-16"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                           
                        </tbody>
                    </table>
                   </div>
               </div>
           </div>
       </div>
       
    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
<!-- End Page-content -->

@section('admin_scripts')
@if (Session::has('alert-success'))
<script>
    toastr.success("{!! Session::get('alert-success') !!}");
</script>
@endif

@endsection

@endsection
