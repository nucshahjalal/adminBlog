           
@extends('admin.master')
@section('content')
<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid" >
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div>

    
          <div class="col-md-6"  style="margin:auto;">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Catagory Register</h3>
              </div>

             <form role="form" method="POST" action="{{url('save-category')}}">
              @csrf
      <div class="card-body">
	<div class="form-group">
	<label for="exampleInputEmail1">Catagory Name</label>
	<input type="text" name="catagory" class="form-control form-control-sm @error('catagory') is invalid @enderror" id="exampleInputEmail1" placeholder="Catagory name" oninvalid="this.setCustomValidity('Please Enter Category Name')" oninput="setCustomValidity('')">
	</div>
  
  @error('catagory')
  <span class="text-danger">{{$message}}</span>
  @enderror

	  <div class="form-group">
	  <label>Minimal</label>
	  <select class="form-control form-control-sm" name="status" required="" oninvalid="this.setCustomValidity('Please Choose Category Status')" oninput="setCustomValidity('')">
	    <option value="">choose</option>
	    <option value="1">Active</option>
	    <option value="0">In Active</option>  </select>
	   </div>

	 <div class="card-footer">
	<button type="submit" class="btn btn-primary">Save Category</button>
	</div>
          </div>
          </form>
         </div>
         </div>
        </section>
        </div>
@endsection