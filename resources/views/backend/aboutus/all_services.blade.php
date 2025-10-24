@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
                <a href= {{route('aboutus.add_services')}} class= "btn btn-inverse-info">Add services</a>



					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Services All</h6>
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>SI</th>
                        <th>Header</th>
                        <th>Icon</th>
                        <th>Text</th>
                       <th>Action</th>
                        {{-- <th>Start date</th>
                        <th>Salary</th> --}}
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($services as $key => $item)
                        <tr>
                          <td>{{$key+1}}</td>
                          <td>{{$item->header}}</td>
                          <td>{{$item->icon}}</td>
                          <td>{{$item->text}}</td>

                          <td>
                         <a href="{{ route('edit.services',$item->id) }}" class= "btn btn-inverse-warning">Edit</a>

                          <a href="{{ route('delete.services',$item->id) }}" class= "btn btn-inverse-danger" id="delete">Delete</a>

                          </td>

                        </tr>
                        @endforeach

                        <td>
    {{-- <a href="{{ route('details.services',$item->id) }}"class= "btn btn-inverse-info" title="details"><i data-feather="eye"></i></a>

    <a href="{{ route('edit.services',$item->id) }}"class= "btn btn-inverse-warning"title="edit" id="edit"><i data-feather="edit"></i></a>

  <a href="{{ route('delete.services',$item->id) }}" class= "btn btn-inverse-danger" id="delete"><i data-feather="trash-2"></i></a>
 --}}


                        </td>

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
