{{-- @php
  $user = App\Models\User::
@endphp  --}}
@extends('admin.admin_dashboard')
@section('admin')
@php
$user = App\Models\User::latest()->get();
//getting all the data from property type model
@endphp
<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
                {{-- <a href= {{route('up.umessage')}} class= "btn btn-inverse-info">Add umessage</a> --}}



					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">All User Messages</h6>
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>SI</th>
                        {{-- <th>Image</th> --}}
                        <th>User Name</th>
                        <th>Message</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Action</th>
                        {{-- <th>Start date</th>
                        <th>Salary</th> --}}
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($umessage as $key => $item)
                      <tr>
                        <td>{{$key+1}}</td>
            {{-- <td>{{ $item[$user]['thumbmail'] }}</td> --}}

                        {{-- <td> <img src="{{ asset($item->user->thumbmail) }}"
                            style="width: 120px; height:100px;"></td> --}}
                        <td>{{ $item->name}}</td>




                      <td>{{$item->message}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->phone}}</td>

                        <td>
    {{-- <a href="{{ route('details.user.contacts',$item->id) }}"class= "btn btn-inverse-info" title="details"><i data-feather="eye"></i></a> --}}
    {{-- <a href="{{ route('edit.umessage',$item->id) }}"class= "btn btn-inverse-warning"title="edit" id="edit"><i data-feather="edit"></i></a> --}}
  <a href="{{ route('delete.user.contacts',$item->id) }}" class= "btn btn-inverse-danger" id="delete"><i data-feather="trash-2"></i></a>



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
@endsection
