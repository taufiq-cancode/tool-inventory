@extends('admin.admin_master')
@section('admin')

<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Transactions</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
   
    <div class="card-body">
      <div class="table-responsive">
        <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <div class="row">
              <div class="col-sm-12">
                <div class="tabdiv">
                  <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
          <thead>
            <tr role="row">
              <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 10%;">S/N</th>
              <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 10%;">Tool name</th>
              <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Category: activate to sort column ascending" style="width: 20%;">User</th>
              <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Quantity: activate to sort column ascending" style="width: 2%;">Quantity</th>
              <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Cost: activate to sort column ascending" style="width: 8%;">Transaction Type</th>
              <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Supplier: activate to sort column ascending" style="width: 20%;">Transaction Date</th>
              <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Condition: activate to sort column ascending" style="width: 40%;">Comments</th>
              
            </tr>
          </thead>
          
          <tbody>
            @foreach ($allData as $key => $transaction )
            <tr role="row" class="odd">
              <td class="sorting_1">{{ $key+1 }} </td>
              <td>{{ $transaction->tool->name }}</td>
              <td>{{ $transaction->user->name }}</td>
              <td>{{ $transaction->quantity }}</td>
              <td>{{ $transaction->transaction_type }}</td>
              <td>{{ \Carbon\Carbon::parse($transaction->transaction_date)->format('Y-m-d') }}</td>
              <td>{{ $transaction->comments }}</td>
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

</div>
@endsection