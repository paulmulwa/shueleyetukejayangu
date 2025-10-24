@extends('admin.admin_dashboard')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">









<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
                <a href= {{route('add.admin')}} class= "btn btn-inverse-info">Add Admin</a>



					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Admin All</h6>
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>SI</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Action</th>
                        {{-- <th>Start date</th>
                        <th>Salary</th> --}}
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($alladmin as $key => $item)
                      <tr>
                        <td>{{$key+1}}</td>
                        <td>
                    <img class="wd-100 rounded-circle" src="{{ (!empty($item->photo)) ?
                    url('uploads/admin_images/'.$item->photo) : url('uploads/admin_images/no_image.jpg') }}"
                    alt="profile" style="width:80px; height:100px;">
                    {{-- <span class="h4 ms-3">{{$profileData->username}}</span> --}}
                  </td>
                        <td>{{ $item->name}}</td>
                        <td>{{ $item->email}}</td>
                        <td>{{ $item->phone}}</td>
                      <td>{{ $item->role}}</td>

                        <td>
                           @if ($item->status == 'active')
                <span class="badge rounded-pill bg-warning">Active</span>
                               @else
                <span class="badge rounded-pill bg-danger">Inactive</span>

                           @endif</td>
            {{-- <td>
<input data-id="{{ $item->id }}"class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger"
data-toggle="toggle" data-on="Active" zdata-off="Inactive" {{ $item->status ? 'checked':'' }}>


            </td> --}}



                        <td>
    {{-- <a href="{{ route('details.property',$item->id) }}"class= "btn btn-inverse-info" title="details"><i data-feather="eye"></i></a> --}}

    <a href="{{ route('edit.admin',$item->id) }}"class= "btn btn-inverse-warning"title="edit" id="edit"><i data-feather="edit"></i></a>

  <a href="{{ route('delete.admin',$item->id) }}" class= "btn btn-inverse-danger" id="delete"><i data-feather="trash-2"></i></a>



                        </td>

                      </tr>
                      @endforeach

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
					</div>
				</div>

			</div>





            <script>
                @if(Session::has('message'))
                var type = "{{ Session::get('alert-type','info') }}"
                switch(type){
                   case 'info':
                   toastr.info(" {{ Session::get('message') }} ");
                   break;

                   case 'success':
                   toastr.success(" {{ Session::get('message') }} ");
                   break;

                   case 'warning':
                   toastr.warning(" {{ Session::get('message') }} ");
                   break;

                   case 'error':
                   toastr.error(" {{ Session::get('message') }} ");
                   break;
                }
                @endif
</script>

    {{-- =========================================Add Sweetalert ================================ --}}

    <script type="text/javascript">
        $(function() {
          $('.toggle-class').change(function() {
              var status = $(this).prop('checked') == true ? 1 : 0;
              var user_id = $(this).data('id');

              $.ajax({
                  type: "GET",
                  dataType: "json",
                  url: '/changeStatus',
                  data: {'status': status, 'user_id': user_id},
                  success: function(data){
                    // console.log(data.success)

                      // Start Message

                  const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 3000
                  })
                  if ($.isEmptyObject(data.error)) {

                          Toast.fire({
                          type: 'success',
                          title: data.success,
                          })

                  }else{

                 Toast.fire({
                          type: 'error',
                          title: data.error,
                          })
                      }

                    // End Message


                  }
              });
          })
        })
      </script>






@endsection
