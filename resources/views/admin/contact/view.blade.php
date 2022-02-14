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
                            <li class="breadcrumb-item active">View</li>
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
                           <form >
                               
                               <div class="row">
                                   <div class="col-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="formrow-email-input">Name</label>
                                        <input type="text" readonly class="form-control" id="formrow-email-input" name="sub_title1" value="{{ $contact->name }}">
                                    </div>
                                   </div>
                                   <div class="col-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="formrow-email-input">Email</label>
                                        <input type="text" readonly class="form-control" id="formrow-email-input" name="sub_title2" value="{{  $contact->email  }}">
                                    </div>
                                   </div>
                               </div>

                               <div class="row">
                                <div class="col-12">
                                 <div class="mb-3">
                                     <label class="form-label" for="formrow-firstname-input">Message</label>
                                     
                                     <textarea class="form-control" readonly id="exampleFormControlTextarea1" name="replay" rows="3">{{  $contact->message  }}</textarea>
                     
                                     
                                 </div>
                                </div>

                                <a href="{{ route('admin.contact.replay.index',$contact->id) }}" class="mb-sm-0 font-size-18 btn btn-primary"><i class="fas fa-reply"></i> Replay</a>
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





@endsection
