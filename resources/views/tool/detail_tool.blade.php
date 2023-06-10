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
                            <ul>
                                @foreach ($tool->transactions as $transaction)
                                    <li><b>Date:</b> {{ \Carbon\Carbon::parse($transaction->transaction_date)->format('Y-m-d') }}</li>
                                    <li><b>User:</b> {{ $transaction->user->name }} </li>
                                    <li><b>Quantity:</b> {{ $transaction->quantity }}</li>
                                    <li><b>Transaction Type:</b> {{ $transaction->transaction_type }} </li>
                                    <li><b>Comments:</b> {{ $transaction->comments }}</li>
                                    <hr>
                                @endforeach
                            </ul>
                        @else
                            <p>No transactions found for this tool.</p>
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