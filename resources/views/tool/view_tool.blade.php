@extends('admin.admin_master')
@section('admin')

<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Tools</h1>

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
              <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="S/N: activate to sort column descending" style="width: 3%;">S/N</th>
              <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 15%;">Name</th>
              <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Quantity: activate to sort column ascending" style="width: 2%;">Quantity</th>
              <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Cost: activate to sort column ascending" style="width: 8%;">Cost</th>
              <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Condition: activate to sort column ascending" style="width: 5%;">Condition</th>
              <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Location: activate to sort column ascending" style="width: 12%;">Location</th>
              <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 20%;">Action</th>

            </tr>
          </thead>
          
          <tbody>
            @foreach ($allData as $key => $tool )
            <tr role="row" class="odd">
              <td>{{ $key+1 }} </td>
              <td class="sorting_1">{{ $tool->name }}</td>
              <td>{{ $tool->quantity }}</td>
              <td>N{{ number_format($tool->cost) }}</td>
              <td>{{ $tool->condition }}</td>
              <td>{{ $tool->location }}</td>
              <td>
                <a href="{{ route('tool.edit',$tool->id) }}" class="btn btn-info "> Edit</a>
                <a href="{{ route('tool.detail', $tool->id) }}" class="btn btn-warning "> Details</a>
                <a href="{{ route('tool.delete', $tool->id) }}" class="btn btn-danger "> Delete</a>
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