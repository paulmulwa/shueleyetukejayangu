@extends('admin.admin_dashboard')
@section('admin') 
<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
                {{-- <a href= {{route('add.state')}} class= "btn btn-inverse-info">Add Category</a> --}}
    <button type="button" class="btn btn-inverse-info" data-bs-toggle="modal" 
    data-bs-target="#exampleModal">Add Category</button>



					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Blog Category All</h6>
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>SI</th>
                        <th>Blog Category Name</th>
                        <th>Blog Category Slug</th>
                        <th>Action</th>
                        {{-- <th>Start date</th>
                        <th>Salary</th> --}}
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($category as $key => $item)
                      <tr>
                        <td>{{$key+1}}</td>
                        <td>{{ $item->category_name}}</td>
                         <td>{{ $item->category_slug}}</td>




                        <td>
    {{-- <a href="{{ route('details.property',$item->id) }}"class= "btn btn-inverse-info" title="details"><i data-feather="eye"></i></a> --}}

    <button type="button" class="btn btn-inverse-warning" data-bs-toggle="modal" 
    data-bs-target="#catedit" id="{{ $item->id }}" 
    onclick="categoryEdit(this.id)">Edit
    {{-- <i data-feather="edit"></i></button> --}}
                        </button>






  <a href="{{ route('delete.blog.category',$item->id) }}" class= "btn btn-inverse-danger" id="delete">
    Delete</a>



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

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                    </div>
                    <div class="modal-body">

                        <form id="myForm" method="POST" action="{{ route('store.blog.category') }}" class="forms-sample">
                            @csrf
                            <div class="form-group mb-3">
                <label for="exampleInputUsername1" class="form-label">Blog Category  Name</label>
                     <input type="text" name="category_name" class="form-control"
                                  placeholder="Blog Category">

                            </div>

                    </div>
       
                    <div class="modal-footer">
                      {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
                      <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
                  </div>
                </div>
              </div>

{{-- //////////////////////////edit//////////////////////////////////////////////// --}}

<div class="modal fade" id="catedit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"
           aria-label="btn-close"></button>
        </div>
        <div class="modal-body">

            <form id="myForm" method="POST" action="{{ route('update.blog.category') }}" 
            class="forms-sample">
                @csrf

                <div class="form-group mb-3">
                    <input type="hidden" name="cat_id" id="cat_id">

    <label for="exampleInputUsername1" class="form-label">
        Blog Category  Name</label>
         <input type="text" id="cat" name="category_name" 
         class="form-control" placeholder="Blog Category">


                </div>

        </div>

        <div class="modal-footer">
          {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>
      </div>
    </div>
  </div>



<script type="text/javascript">
function categoryEdit(id)
{
    $.ajax({
        type:'GET',
        url: '/blog/category/'+id,
        dataType: 'json',

        success:function(data){
            $('#cat').val(data.category_name);
            $('#cat_id').val(data.id);



        }

    })
}

</script>





























@endsection
