@extends('admin.admin_dashboard')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>



    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">User Details</a></li>
                <li class="breadcrumb-item active" aria-current="page">User Details</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">User Details</h6>
                        {{-- <p class="text-muted mb-3">Add class <code>.table</code></p> --}}
                        <div class="table-responsive">
                            <table class="table table-striped">

                                <tbody>
                                    <tr>
                                        <td>User Name</td>
                                        <td><code>{{ $cont->name }}</code></td>
                                    </tr>

                                    <tr>
                                        <td>Phone</td>
                                        <td><code>{{ $cont->phone}}</code></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">User Details</h6>
                        <p class="text-muted mb-3">User Details <code>.table-hover</code></p>
                        <div class="table-responsive">
                            <table class="table table-striped">

                                <tbody>

                                    <tr>
                                        <td>Message</td>
                                        <td><code>{{ $cont->message }}</code></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td><code>{{ $cont->email }}</code></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
