@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
                <a href= {{route('add.banner')}} class="btn btn-success">Add Banner</a>



					</ol>
				</nav>
                @php
                $banner = App\Models\Banner::get();
                @endphp
				<div class="row">
					{{-- <div class="col-md-8 grid-margin stretch-card"> --}}
                        <div class="col-md-12 grid-margin stretch-card">

            <div class="card">
              <div class="card-body">
                <h6 class="card-title">All Banner</h6>
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>SI</th>
                        <th>Banner Title</th>
                        <th>Short Title</th>
                        <th>Image</th>
                        <th>Action</th>
                        {{-- <th>Start date</th>
                        <th>Salary</th> --}}
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($banner as $key => $item)
                        <tr>
                            <td> {{ $key+1 }} </td>
                            <td>{{ $item->banner_title }}</td>
                            <td>{{ $item->short_title }}</td>
                            <td> <img src="{{ asset($item->banner_image) }}" style="width: 180px; height:250px;" >  </td>
                            {{-- </tr> --}}
                            <td>
        <a href="{{ route('edit.banner',$item->id) }}" class="btn btn-info">Edit</a>

        <a href="{{ route('delete.banner',$item->id) }}" class="btn btn-danger" id="delete" >Delete</a>



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
