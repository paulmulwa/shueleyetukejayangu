@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
                <a href= {{route('add.testimonials')}} class= "btn btn-inverse-info">Add Testimonial</a>



					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Testimonial All</h6>
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>SI</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Message</th>
                        <th>Image</th>
                        <th>Action</th>
                        {{-- <th>Start date</th>
                        <th>Salary</th> --}}
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($testimonial as $key => $item)
                      <tr>
                        <td>{{$key+1}}</td>
                        <td>{{ $item->name}}</td>
                        <td>{{ $item->position}}</td>
                    <td>{{ $item->message}}</td>


            <td> <img src="{{ asset($item->image) }}"
                         style="width: 70px; height:40px;"></td>

                      {{-- <td>{{ $item['type']['type_name'] }}</td> --}}

                      {{-- <td>{{$ptype->id}}</td> --}}
                      {{-- {{ $ptype->type_name }} --}}

                      {{-- <td>{{$item->ptype_id}}</td> --}}

                      {{-- <td>{{$item->property_status}}</td>
                        <td>{{$item->city}}</td>
                        <td>{{$item->property_code}}</td> --}}
                        {{-- <td>
                           @if ($item->status == 1)
                <span class="badge rounded-pill bg-success">Active</span>
                               @else
                <span class="badge rounded-pill bg-danger">Inactive</span>

                           @endif</td> --}}



                        <td>
    {{-- <a href="{{ route('details.property',$item->id) }}"class= "btn btn-inverse-info" title="details"><i data-feather="eye"></i></a> --}}

    <a href="{{ route('edit.testimonials', $item->id) }}"class= "btn btn-inverse-warning"title="edit" id="edit"><i data-feather="edit"></i></a>

  <a href="{{ route('delete.testimonials',$item->id) }}" class= "btn btn-inverse-danger" id="delete"><i data-feather="trash-2"></i></a>



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
