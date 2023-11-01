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

                        <h6 class="card-title" style="mb-10">Edit Roles in Permission</h6>

                        <form id="myForm" method="POST" action="{{ route('admin.roles.update',$role->id) }}" class="forms-sample">
                            @csrf
                            <div class="form-group mb-3, mt-3">
                                <label for="exampleInputUsername1" class="form-label">Roles Name</label>
                               <h3>{{ $role->name }}</h3>
                            </div>

                            <div class="form-check mb-2, mt-5">
                                <input type="checkbox" class="form-check-input" id="checkDefaultmain">
                                <label for="form-check-label" for="checkDefault">Permission All</label>
                            </div>


                            <hr>
                            @foreach ($permission_groups as $group)
                                <div class="row">
                                    <div class="col-3">

                                        @php
                                            $permissions = App\Models\User::getpermissionByGroupName($group->group_name);
                                        @endphp
                                        <div class="form-check mb-2">
                        <input type="checkbox" class="form-check-input" id="checkDefault" {{App\Models\User::roleHasPermissions($role,$permissions) ? 'checked' : ''}} >
                                <label for="form-check-label"
                                                for="checkDefault">{{ $group->group_name }}</label>
                                        </div>
                                    </div>
                                    <div class="col-9">



                                        @foreach ($permissions as $permission)
                                            <div class="form-check mb-2">
                        <input type="checkbox" class="form-check-input" name="permission[]"
                                                 id="checkDefault{{ $permission->id }}"
                                                  value="{{$permission->id }}"
                                                  {{$role->hasPermissionTo($permission->name)
                                                ? 'checked': ''}}>

                                                <label class="form-check-label" for="checkDefault{{ $permission->id }}">
                                                    {{ $permission->name }}</label>



                                                </div>


                                                    @endforeach

                                              <br>
                                            </div>
                                        </div>

                                        @endforeach

                                        <br>
                                            <button type="submit" class="btn btn-primary me-2">Submit</button>

                                </form>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
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
