@extends('admin.admin_master')
@section('admin')

<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Categories</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
   
    <div class="card-body">
      <div class="table-responsive">
        <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <div class="row">
              <div class="col-sm-12">
                  <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
          <thead>
            <tr role="row">
              <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 30%;">Name</th>
              <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Description: activate to sort column descending" style="width: 45%;">Description</th>
              <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Action: activate to sort column descending" style="width: 25%;">Action</th>
              
            </tr>
          </thead>
          
          <tbody>
            @foreach ($allData as $key => $category )
            <tr role="row" class="odd">
              <td class="sorting_1">{{ $category->name }}</td>
              <td class="sorting_1">{{ $category->description }}</td>
              <td>
                <a href="{{ route('category.edit',$category->id) }}" class="btn btn-info "> Edit</a>
                <a href="{{ route('category.delete', $category->id) }}" class="btn btn-danger "> Delete</i></a>
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

</div>
@endsection