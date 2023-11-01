@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
                {{-- <a href= {{route('add.state')}} class= "btn btn-inverse-info">Add State</a> --}}



					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Blog All Comments</h6>
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>SI</th>
                        <th>Post Title</th>
                        <th>User Name</th>
                        <th>Subject</th>
                        <th>Action</th>
                        {{-- <th>Start date</th>
                        <th>Salary</th> --}}
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($comment as $key => $item)
                      <tr>
                        <td>{{$key+1}}</td>

                        {{-- //post ids the name of the   --}}
                        {{-- //relationshoip name is postt and the field namr is title --}}
                      <td>{{ $item['post']['post_title']}}</td>
                        <td>{{ $item['user']['name']}}</td>
                        <td>{{ $item->subject}}</td>

                        {{-- <td> <img src="{{ asset($item->state_image) }}"
                         style="width: 70px; height:40px;"></td> --}}





                        <td>
    {{-- <a href="{{ route('details.property',$item->id) }}"class= "btn btn-inverse-info" title="details"><i data-feather="eye"></i></a> --}}

    <a href="{{ route('admin.comment.reply',$item->id) }}"class= "btn btn-inverse-warning">Reply<i data-feather="edit"></i></a>

  <a href="{{ route('delete.state',$item->id) }}" class= "btn btn-inverse-danger" id="delete"><i data-feather="trash-2"></i></a>



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
