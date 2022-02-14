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
                            <li class="breadcrumb-item active">Contact</li>
                            <li class="breadcrumb-item active">Reply</li>
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
                                Contact Detailes
                            </div>
                           
                        </div>
                        <div class="card-body">
                           <form method="post" action="{{ route('admin.contact.replay.store') }}">
                               @csrf
                               <div class="row">
        
                                   <div class="col-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="formrow-email-input">Email</label>
                                        <input type="text" readonly class="form-control" id="formrow-email-input" name="email" value="{{  $contact->email  }}">
                                    </div>
                                   </div>

                                   <div class="col-4" style="display: none">
                                    <div class="mb-3">
                                        <label class="form-label" for="formrow-email-input">Contact_id</label>
                                        <input type="text" readonly class="form-control" id="formrow-email-input" name="message_id" value="{{  $contact->id  }}">
                                    </div>
                                   </div>
                               </div>

                               <div class="row">
                                <div class="col-12">
                                 <div class="mb-3">
                                     <label class="form-label" for="formrow-firstname-input">Message</label>
                                     
                                     <textarea class="form-control" id="exampleFormControlTextarea1" name="replay" rows="3"></textarea>
                                     
                                    
                                     
                                 </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Replay</button>
                                </div>
                            </div>
                                        
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

@endsection

@endsection
