@extends('admin.admin_dashboard')
@section('admin')
    <!-- partial -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


    <div class="page-content">


        <!-- left wrapper end -->
        <!-- middle wrapper start -->
        <div class="col-md-8 col-xl-8 middle-wrapper">
            <div class="row">
                <div class="card">
                    <div class="card-body">

                <h6 class="card-title" style="mb-10">Contact Us setting</h6>

                        <form id="myForm" method="POST" action="{{ route('update.admincontacts') }}" class="forms-sample" enctype="multipart/form-data">
                            @csrf
                <input type="hidden" name="id" value="{{$contact->id }}">
                            <div class="form-group mb-3, mt-5">
                                <label for="exampleInputUsername1" class="form-label">Email 1</label></label>
                                <input type="text" name="email1" class="form-control"
                                     placeholder="Enter Email" value="{{ $contact->email1 }}">
                            </div>
                            <div class="form-group mb-3, mt-5">
                                <label for="exampleInputUsername1" class="form-label">Email 2</label></label>
                                <input type="text" name="email2" class="form-control"
                                     placeholder="Enter Email" value="{{ $contact->email2 }}">
                            </div>

                            <div class="form-group mb-3, mt-5">
                                <label for="exampleInputUsername1" class="form-label">Address 1</label></label>
                                <input type="text" name="address1" class="form-control"
                                     placeholder="Enter Address" value="{{ $contact->address1 }}">
                            </div>
                            <div class="form-group mb-3, mt-5">
                                <label for="exampleInputUsername1" class="form-label">Address 2</label></label>
                                <input type="text" name="address2" class="form-control"
                                     placeholder="Enter Address" value="{{ $contact->address2 }}">
                            </div>
                            <div class="form-group mb-3, mt-5">
                                <label for="exampleInputUsername1" class="form-label">Phone Number 1</label></label>
                                <input type="text" name="phone1" class="form-control"
                                     placeholder="Enter Phone" value="{{ $contact->phone1 }}">
                            </div>
                            <div class="form-group mb-3, mt-5">
                                <label for="exampleInputUsername1" class="form-label">Phone Number 2</label></label>
                                <input type="text" name="phone2" class="form-control"
                                     placeholder="Enter Phone" value="{{ $contact->phone2 }}">
                            </div>






                            {{-- <div class="mt-4"> --}}
                                <button type="submit" class="btn btn-primary me-2">
                                    Submit</button>
                                </form>
                                </div>
                            {{-- </div> --}}

                        @endsection

