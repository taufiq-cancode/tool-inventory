@extends('admin.admin_master')
@section('admin')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Add Category</h1>
  
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
              <form class="user" action="{{ route('category.store') }}" method="POST" style="width:50%;">
                @csrf
                
                <div class="form-group">
                  <label>Category Name</label>
                  <input type="text" name="name" required class="form-control form-control-user" id="exampleInputEmail" placeholder="Category name">
                </div>

                <div class="form-group">
                  <label>Category Description</label>
                  <textarea name="description" class="form-control form-control-user" id="exampleInputEmail"></textarea>
                </div>
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-user btn-block">
                           
              </form>
        </div>
    </div>
  </div>

@endsection