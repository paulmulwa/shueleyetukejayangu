@extends('admin.admin_dashboard')
@section('admin')
    <!-- partial -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


    <div class="page-content">


        <!-- left wrapper end -->
        <!-- middle wrapper start -->
        <div class="col-md-12 col-xl-12 middle-wrapper">
            <div class="row">
                <div class="card">
                    <div class="card-body">

                        <h6 class="card-title" style="mb-10">Add Roles in Permission</h6>

                        <form id="myForm" method="POST" action="{{ route('role.permission.store') }}" class="forms-sample">
                            @csrf
                            <div class="form-group mb-3, mt-3">
                                <label for="exampleInputUsername1" class="form-label">Roles Name</label>
                                <select name="role_id" class="form-select" id="exampleInputUsername1">
                                    <option selected="" disabled="">Select Group</option>

                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-check mb-2, mt-5">
                                <input type="checkbox" class="form-check-input" id="checkDefaultmain">
                                <label for="form-check-label" for="checkDefaultmain">Permission All</label>
                            </div>


                            <hr>
                            @foreach ($permission_groups as $group)
                                <div class="row">
                                    <div class="col-3">

                                        <div class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input" name="permission[]"
                                                id="checkDefault">
                                            <label class="form-check-label" {{-- for="checkDefault">{{ $permission->name }}</label> --}}
                                                for="checkDefault"></label>
                                            {{-- for="checkDefault">{{ $group->group_name }}</label> --}}


                                        </div>
                                    </div>
                                    <div class="col-9">

                                        @php
                                            $permissions = App\Models\User::getpermissionByGroupName($group->group_name);
                                        @endphp


                                        @foreach ($permissions as $permission)
                                            <div class="form-check mb-2">
                                                {{-- if(checked=="1")
                                                {
                                                    else{

                                                   }
                                                } --}}
                                                <input type="checkbox" class="form-check-input" name="permission[]"
                                                    id="checkDefault{{ $permission->id }}" value="{{ $permission->id }}">
                                                <label class="form-check-label" for="checkDefault{{ $permission->id }}">
                                                    {{ $permission->name }} </label>

                                            </div>
                                        @endforeach
                                        <br>
                                    </div>


                                </div>
                            @endforeach
                            <br>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                            </div>


                            <script type="text/javascript">
                                $('#checkDefaultmain').click(function() {
                                    if ($(this).is(':checked')) {
                                        $('input[type=checkbox]').prop('checked', true);

                                    } else {
                                        $('input[type=checkbox]').prop('checked', false);
                                    }
                                });
                            </script>
                        @endsection
