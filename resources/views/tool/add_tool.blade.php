@extends('admin.admin_master')
@section('admin')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Add Tool</h1>
  
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <form class="user" action="{{ route('tool.store') }}" method="POST" style="width:50%;">
            @csrf
            
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <label> Name </label>
                <input type="text" name="name" class="form-control form-control-user" id="exampleInputEmail" placeholder="Tool name">
              </div>
              <div class="col-sm-6">
                <label> Category </label>
                <select name="category_id">
                  <option value="" selected="" disabled="">Select Tool Category</option>
                  @foreach($allData as $key => $category)
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @endforeach
                </select>  
              </div>  
            </div>

            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <label> Cost </label>
                <input type="number" name="cost" class="form-control form-control-user" id="exampleInputEmail" placeholder="Cost">
              </div>
              <div class="col-sm-6">
                <label> Quantity </label>
                <input type="number" name="quantity" class="form-control form-control-user" id="exampleInputEmail" placeholder="Quantity">
              </div>     
            </div>

            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <label> Supplier </label>
                <input type="text" name="supplier" class="form-control form-control-user" id="exampleInputEmail" placeholder="Supplier">
              </div>
              <div class="col-sm-6">
                <label> Condition </label>
                <select name="condition" required>
                  <option value="" selected="" disabled="">Select Tool Condition</option>
                  <option value="New">New</option>
                  <option value="Used">Used</option>
                  <option value="Damaged">Damaged</option>
                  <option value="Need Repair">Need Repair</option>
                </select>              
              </div>     
            </div>

            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <label> Location </label>
                <input type="text" name="location" class="form-control form-control-user" id="exampleInputEmail" placeholder="Location">
              </div>
              <div class="col-sm-6">
                <label> Purchase date </label>
                <input type="date" name="purchase_date" class="form-control form-control-user" id="exampleInputEmail" placeholder="Purchase date">
              </div>     
            </div>
            <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-user btn-block">
             <br><br>          
          </form>
          
        </div>
    </div>
  </div>

@endsection