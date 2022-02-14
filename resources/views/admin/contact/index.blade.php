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
                            <li class="breadcrumb-item active">Contacts</li>
                        </ol>
                    </div>
                    {{-- <a href="" class="mb-sm-0 btn btn-primary"><i class="fas fa-plus"></i> All Message</a> --}}
                </div>
            </div>
        </div>
        <!-- end page title -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="card-title text-center" style="color: #ffffff">All Messages</h4>
                    </div>
                    <div class="card-body">

                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                            <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Message</th>       
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                                @foreach ($contacts as $contact)
                                    
                                
                               
                                    <tr
                                    @if ($contact->status == '1')
                                          style="background-color: rgb(185, 181, 181)"
                                    @elseif ($contact->status == '2')
                                         style="background-color: #01C273"
                                     @elseif ($contact->status == '3')
                                         style="background-color: white"
                                    @endif
                                    >

                                        
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ Illuminate\Support\Str::limit($contact->message, 20) }}</td>
                                    
                                        <td>
                                            <a type="submit" href="{{ route('admin.contact.view',$contact->id) }}" class="btn btn-sm btn-success waves-effect waves-light">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a type="submit" href="{{ route('admin.contact.replay.index',$contact->id) }}" class="btn btn-sm btn-success waves-effect waves-light">
                                                <i class="fas fa-reply"></i>
                                            </a>
                                            <a href="{{ route('admin.contact.destroy',$contact->id) }}" id="delete" class="btn btn-sm btn-danger waves-effect waves-light">
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
