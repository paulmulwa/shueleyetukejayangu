@extends('agent.agent_dashboard')
@section('agent')
<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
                <a href= {{route('agent.add.property')}} class= "btn btn-inverse-info">Add Property</a>



					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">property Type All</h6>
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>SI</th>
                        <th>Image</th>
                        <th>property Name</th>
                        <th>property Type</th>
                        <th>Status Type</th>
                        <th>City</th>
                        <th>Status</th>
                        <th>Property Code</th>
                        <th>Action</th>
                        {{-- <th>Start date</th>
                        <th>Salary</th> --}}
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($property as $key => $item)
                      <tr>
                        <td>{{$key+1}}</td>
                        <td> <img src="{{ asset($item->property_thumbmail) }}"
                         style="width: 120px; height:100px;"></td>
                        <td>{{ $item->property_name}}</td>
                        {{-- <td>{{ $item['type_name'] }}</td> --}}
                        {{-- $qlinks[$link->id] = array();   // extra line to initialise sub-array --}}
                      {{-- <td>{{ $item['type'  ]['typename']??null}}</td> --}}
                      {{-- <td>{{ $item['type']['typename'] ??'none'}}</td> --}}
                      <td>{{ $item['type']['type_name'] }}</td>

                      {{-- <td>{{$ptype->id}}</td> --}}
                      {{-- {{ $ptype->type_name }} --}}

                      {{-- <td>{{$item->ptype_id}}</td> --}}

                      <td>{{$item->property_status}}</td>
                        <td>{{$item->city}}</td>
                        <td>{{$item->property_code}}</td>
                        <td>
                           @if ($item->status == 1)
                <span class="badge rounded-pill bg-success">Active</span>
                               @else
                <span class="badge rounded-pill bg-danger">Inactive</span>

                           @endif</td>



                        <td>
    <a href="{{ route('agent.details.property',$item->id) }}"class= "btn btn-inverse-info" title="details"><i data-feather="eye"></i></a>

    <a href="{{ route('agent.edit.property',$item->id) }}"class= "btn btn-inverse-warning"title="edit" id="edit"><i data-feather="edit"></i></a>

  <a href="{{ route('agent.delete.property',$item->id) }}" class= "btn btn-inverse-danger" id="delete"><i data-feather="trash-2"></i></a>



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
