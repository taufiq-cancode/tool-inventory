@extends('admin.admin_master')
@section('admin')

<div class="container-fluid">

  <!-- Page Heading -->

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
   
    <div class="card-body">
      <div class="table-responsive">
        <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <div class="row">
              <div class="col-sm-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                      <h6 style="font-weight: bold">TOOL DETAIL</h4>
                    </div>
                    <div class="card-body">
                        <ul>
                                <li><b>Tool Name:</b> {{ $tool->name }}</li>
                                <li><b>Category:</b> @if($tool->category) {{ $tool->category->name }} @else Uncategorized @endif</li>
                                <li><b>Cost:</b> N{{ number_format($tool->cost) }}</li>
                                <li><b>Quantity:</b> {{ $tool->quantity }}</li>
                                <li><b>Supplier:</b> {{ $tool->supplier }}</li>
                                <li><b>Location:</b> {{ $tool->location }}</li>
                                <li><b>Condition:</b> {{ $tool->condition }}</li>
                                <li><b>Purchase Date:</b> {{ \Carbon\Carbon::parse($tool->purchase_date)->format('Y-m-d') }} </li>
                        </ul>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                          <h6 style="font-weight: bold">TOOL TRANSACTION HISTORY</h4>
                        </div>
                        <div class="card-body">

                          @if ($tool->transactions->count() > 0)
                          
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
                              @foreach ($tool->transactions as $transaction )
                              <tr role="row" class="odd">
                                <td class="sorting_1">{{ $loop->iteration }} </td>
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
                          @else
                          <p>No transactions found for this tool. </p>
                          @endif
                          
                            
                        </div>
                      </div>
                </div>
    </div>
   
  </div>
      </div>
    </div>
  </div>

</div>
@endsection