@extends('agent.agent_dashboard')
@section('agent')
<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
                {{-- <a href= {{route('add.property')}} class= "btn btn-inverse-info">Add packagehistory</a> --}}



					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Package History All</h6>
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>SI</th>
                        <th>Image</th>
                        <th>package</th>
                        <th>Invoiice</th>
                        <th>Amount</th>
                        <th>Date</th>
                        <th>Action</th>
                        {{-- <th>Start date</th>
                        <th>Salary</th> --}}
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($packagehistory as $key => $item)
                      <tr>
                        <td>{{$key+1}}</td>
                        <td> <img src="{{ (!empty($profileData->photo)) ?
                            url('uploads/agent_images/'.$profileData->photo) : url('uploads/agent_images/no_image.jpg') }}" alt="profile"></td>
                        <td>{{ $item->package_name}}</td>
                        {{-- <td>{{ $item['type_name'] }}</td> --}}
                        {{-- $qlinks[$link->id] = array();   // extra line to initialise sub-array --}}
                      {{-- <td>{{ $item['type'  ]['typename']??null}}</td> --}}
                      {{-- <td>{{ $item['type']['typename'] ??'none'}}</td> --}}
                      {{-- <td>{{ $item['type']['type_name'] }}</td> --}}

                      {{-- <td>{{$ptype->id}}</td> --}}
                      {{-- {{ $ptype->type_name }} --}}

                      {{-- <td>{{$item->ptype_id}}</td> --}}

                      <td>{{$item->invoice}}</td>
                        <td>{{$item->package_amount}}</td>
                        <td>{{$item->created_at->format('l M D Y')}}</td>
                        {{-- <td>
                           @if ($item->status == 1)
                <span class="badge rounded-pill bg-success">Active</span>
                               @else
                <span class="badge rounded-pill bg-danger">Inactive</span>

                           @endif</td> --}}



                        <td>
    {{-- <a href="{{ route('agent.details.packagehistory',$item->id) }}"class= "btn btn-inverse-info" title="details"><i data-feather="eye"></i></a> --}}

     {{-- <a href="{{ route('agent.edit.packagehistory',$item->id) }}"
        class= "btn btn-inverse-warning"title="edit" id="edit"><i data-feather="edit"></i></a>  --}}

  {{-- <a href="{{ route('agent.package.invoice',$item->id) }}" --}}
    <a href="{{ route('agent.package.invoice',$item->id) }}" class= "btn btn-inverse-warning" id="download"
        ><i data-feather="download"></i></a>



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
