@extends('admin.admin_master')
@section('admin')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Add Transaction</h1>
  
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
              <form class="user" action="{{ route('transaction.store') }}" method="POST">
                @csrf
                
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label> Tool </label>
                  <select name="tool_id">
                    <option value="" selected="" disabled="">Select Tool</option>
                        @foreach($tools as $key => $tool)
                        <option value="{{ $tool->id }}">{{ $tool->name }}</option>
                        @endforeach
                  </select>
                </div>
                <div class="col-sm-6">
                  <label> Quantity </label>
                  <input type="number" name="quantity" required class="form-control form-control-user" id="exampleInputEmail" placeholder="Quantity">

                </div>
                </div>
                
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label> Transaction type</label>
                    <select name="transaction_type">
                      <option>Select Transaction Type</option>
                      <option value="Check-in">Check-in</option>
                      <option value="Check-out">Check-out</option>
                      <option value="Repair">Repair</option>
                      <option value="Maintenance">Maintenance</option>
                    </select>
                  </div>
                  <div class="col-sm-6">
                    <label> Transaction Date </label>
                    <input type="date" name="transaction_date" required class="form-control form-control-user" id="exampleInputEmail">
                  </div>
                </div>
                
                @if(auth()->user()->role == 'user')
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                @else
                <div class="form-group">
                  <label>User</label>
                  <select name="user_id">
                    @foreach ($users as $user )
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                  </select>
                </div>
                @endif


                <div class="form-group">
                  <label>Comments</label>
                  <textarea name="comments" class="form-control form-control-user" id="exampleInputEmail"></textarea>
                </div>
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-user btn-block">
                           
              </form>
        </div>
    </div>
  </div>

@endsection