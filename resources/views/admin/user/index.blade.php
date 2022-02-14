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
                            <li class="breadcrumb-item active">User</li>
                        </ol>
                    </div>
                    <a href="{{ route('admin.user.create') }}" class="mb-sm-0 btn btn-primary"><i class="fas fa-plus"></i> Add User</a>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="card-title text-center" style="color: #ffffff">All User</h4>
                    </div>
                    <div class="card-body">

                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($users as $user)
                            <tr>

                                <td>{{ $user->adminProfile->name ?? '' }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @if ( $user->role == 'SuperAdmin')
                                       <span class="badge bg-primary">Super Admin</span>
                                    @elseif ( $user->role == 'Admin')
                                        <span class="badge bg-success">Admin</span>
                                    @else
                                        <span class="badge bg-info">Moderator</span>
                                    @endif
                                </td>
                                <td>
                                    @if ( $user->status == 'Active')
                                       <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-danger">In Active</span>
                                    @endif
                                </td>
                                <td>
                                    @if (Auth::User()->id != $user->id)
                                    <a type="submit" href="{{ route('admin.user.edit',$user->id) }}" class="btn btn-sm btn-success waves-effect waves-light">
                                        <i class="mdi mdi-pencil d-block font-size-16"></i>
                                    </a>
                                    <a href="{{ route('admin.user.delete',$user->id) }} " id="delete" class="btn btn-sm btn-danger waves-effect waves-light">
                                        <i class="mdi mdi-trash-can d-block font-size-16"></i>
                                    </a>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

        <div class="row">
            <div class="col-12">
                    <div class="card-header bg-primary">
                        <h4 class="card-title text-center" style="color: #ffffff">All Trash User</h4>
                    </div>
                    <div class="card-body">

                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                            <thead>
                            <tr>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($userTrashLists as $trashList)
                            <tr>
                                <td>{{ $trashList->email }}</td>
                                <td>
                                    @if ( $trashList->role == 'SuperAdmin')
                                       <span class="badge bg-primary">Super Admin</span>
                                    @elseif ( $trashList->role == 'Admin')
                                        <span class="badge bg-success">Admin</span>
                                    @else
                                        <span class="badge bg-info">Moderator</span>
                                    @endif
                                </td>
                                 <td>
                                    @if ( $trashList->status == 'Active')
                                       <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-danger">In Active</span>
                                    @endif
                                </td>
                                <td>
                                    @if (Auth::User()->id != $trashList->id)
                                    <a type="submit" href="{{ route('admin.user.restore',$trashList->email) }}" class="btn btn-sm btn-success waves-effect waves-light">

                                        <i class="fas fa-trash-restore d-block p-1 font-size-16"></i>
                                    </a>
                                    <a href="{{ route('admin.user.permanentDelete',$trashList->email) }}" id="delete" class="btn btn-sm btn-danger waves-effect waves-light">
                                        <i class="mdi mdi-delete-forever d-block font-size-16"></i>
                                    </a>
                                    @endif
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
