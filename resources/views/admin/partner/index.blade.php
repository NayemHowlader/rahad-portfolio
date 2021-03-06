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
                            <li class="breadcrumb-item active">Partners</li>
                        </ol>
                    </div>
                    <a href="{{ route('admin.partner.create') }}" class="mb-sm-0 btn btn-sm btn-primary"><i class="fas fa-plus"></i> Add Partner</a>
                </div>
            </div>
        </div>
        <!-- end page title -->
       <div class="row">
           <div class="col-12">
               <div class="card">
                   <div class="card-header">
                       <div class="card-title">
                           All Partner
                       </div>
                   </div>
                   <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                          <tr>
                              <th>S/N</th>
                              <th>Partner Logo</th>
                              <th>Status</th>
                              <th>Added By</th>
                              <th>Edited By</th>
                              <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($partners as $partner )
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                   
                                    <td class="avatar-xxl me-3">
                                        <img src="{{asset('photo/partner')}}/{{ $partner->image }}" alt="" class="img-fluid d-block img-thumbnail">
                                    </td>
                                    <td>
                                        @if ($partner->status == 'Active')
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-danger">DeActive</span>
                                        @endif
                                    </td>
                                    <td>{{ $partner->users_addedby->email }}</td>
                                    <td>
                                        @if ($partner->edited_by != null)
                                            
                                        {{ $partner->users_editedby->email }}
                                        
                                        @endif
                                    </td>
                                   
                                    <td>
                                        <a href="{{ route('admin.partner.edit', $partner->id) }}" class="btn btn-sm btn-primary"> <i class="mdi mdi-pencil d-block font-size-16"></i></a>
                                        <a href="{{ route('admin.partner.destroy', $partner->id) }}" class="btn btn-sm btn-primary"> <i class="mdi mdi-trash-can d-block font-size-16"></i></a>
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
