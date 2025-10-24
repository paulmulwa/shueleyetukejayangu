@extends('admin.admin_dashboard')
@section('admin')
    <!-- partial -->

    {{--  --}}





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


    <div class="page-content">



        <div class="row">
            <div class="col-md-12 col-xl-12 middle-wrapperr">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Add Services</h6>
                            <form method="post" action="{{ route('store.services') }}" id="myForm"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Header</label>
                                            <input type="text" name="header" class="form-control"
                                                placeholder="Enter header">
                                        </div>
                                    </div><!-- Col -->

                                    <div class="col-sm-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Text</label>
                                            <input type="text" name="text" class="form-control"
                                                placeholder="Enter text">
                                        </div>
                                    </div>

                                    {{-- <div class="col-sm-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Icon</label>
                                            <input type="file" name="icon" class="form-control"
                                                placeholder="Enter Icon" onchange="icon(this)">
                                            <img src="" id="icon">
                                        </div>
                                    </div> --}}

                                    <div class="mb-3, mt-4">
                                        <label for="exampleInputUsername1" class="form-label">Icon</label>
                                        <input type="text" name="icon"
                                        class="form-control" id="icon"
                                          placeholder="Type Icon">

                                        </div>


                                        <div class="mt-4">


                                            <button type="submit" class="btn btn-primary me-2">Submit</button>
        </div>


                    </div>
                </div>
            </div>

        </div>


    </div>


















    {{-- <script type="text/javascript">
        $(document).ready(function() {
            $('#myForm').validate({
                rules: {
                    property_name: {
                        required: true,
                    },
                    property_status: {
                        required: true,
                    },
                    lowest_price: {
                        required: true,
                    },
                    max_price: {
                        required: true,
                    },
                    icon: {
                        required: true,
                    },
                    multi_img: {
                        required: true,
                    },
                    ptype_id: {
                        required: true,
                    },

                },
                messages: {
                    property_name: {
                        required: 'Please Enter Property Name',
                    },
                    property_status: {
                        required: 'Please Enter Property status',
                    },
                    lowest_price: {
                        required: 'Please Enter lowest Price',
                    },
                    max_price: {
                        required: 'Please Enter maximum price',
                    },
                    ptype_id: {
                        required: 'Please Enter Property Id',
                    },

                    icon: {
                        required: 'Please Enter Property thumbmail',
                    },
                    multi_img: {
                        required: 'Please Enter multiple images',
                    },


                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                },
            });
        });
    </script> --}}

    <script type="text/javascript">
        function icon(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#icon').attr('src', e.target.result).width(80).height(80);
                };
                reader.readAsDataURL(input.files[0]);

            }
        }
    </script>



    {{-- <script>
        $(document).ready(function() {
            $('#multiImg').on('change', function() { //on file input change
                if (window.File && window.FileReader && window.FileList && window
                    .Blob) //check File API supported browser
                {
                    var data = $(this)[0].files; //this file data

                    $.each(data, function(index, file) { //loop though each file
                        if (/(\.|\/)(gif|jpeg|jpg|png|webp)$/i.test(file
                            .type)) { //check supported file type
                            var fRead = new FileReader(); //new filereader
                            fRead.onload = (function(file) { //trigger function on successful read
                                return function(e) {
                                    var img = $('<img/>').addClass('thumb').attr('src',
                                            e.target.result).width(100)
                                        .height(80); //create image element
                                    $('#preview_img').append(
                                    img); //append image to output element
                                };
                            })(file);
                            fRead.readAsDataURL(file); //URL representing the file's data.
                        }
                    });

                } else {
                    alert("Your browser doesn't support File API!"); //if File API is absent
                }
            });
        });
    </script> --}}
@endsection
