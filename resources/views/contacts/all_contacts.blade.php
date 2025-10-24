@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
                <a href= {{route('add.property')}} class= "btn btn-inverse-info">Add Contacts</a>



					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Contacts</h6>
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>SI</th>
                        <th>Email</th>
                        <th>phone Number</th>
                        <th>Address</th>
                        <th>Action</th>

                        {{-- <th>Start date</th>
                        <th>Salary</th> --}}
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($contact as $key => $item)
                      <tr>
                        <td>{{$key+1}}</td>
                        <td>{{ $item->email}} </td>
                        <td>{{ $item->phone}}</td>
                        <td>{{ $item->adress}}</td>
            



                        <td>
    <a href="{{ route('details.property',$item->id) }}"class= "btn btn-inverse-info" title="details"><i data-feather="eye"></i></a>

    <a href="{{ route('edit.property',$item->id) }}"class= "btn btn-inverse-warning"title="edit" id="edit"><i data-feather="edit"></i></a>

  <a href="{{ route('delete.property',$item->id) }}" class= "btn btn-inverse-danger" id="delete"><i data-feather="trash-2"></i></a>



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
