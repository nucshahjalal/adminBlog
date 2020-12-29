           
@extends('admin.master')
@section('content')
<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid" >
        <div class="row mb-2">
          <div class="col-sm-6">
           
          </div>
           <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div>

    	
	<div class="col-md-12">
	<div class="card card-primary">
	<div class="card-header">
	<h3 class="card-title">Post Register</h3>
	</div>

     <form role="form" method="POST" action="{{url('save-post')}}">
      @csrf
     <div class="card-body">
	<div class="form-group">
	  <label for="exampleInputEmail1">Post Name</label>
	<input type="text" name="post_name" class=" form-control form-control-sm" id="exampleInputEmail1" placeholder="Post name"oninvalid="this.setCustomValidity('Please Enter Post Name')" oninput="setCustomValidity('')">
	</div>

<div class="row">
	<div class="col-md-6">
	<div class="form-group">
	<label>Post Status</label>
	<select name="category" class="form-control" required="" oninvalid="this.setCustomValidity('Please Choose Category Status')" oninput="setCustomValidity('')">

            <option value=" ">Choose</option>
            @foreach($categories as $data)
            <option value="{{$data->id}}">
            	{{$data->name}}
            </option>
            @endforeach
         
          </select>
	</div>
	</div>
<div class="col-md-6">
	<div class="form-group">
		<label for="exampleInputFile">File input</label>
		<div class="input-group">
		<div class="custom-file">
		<input type="file" name="post_name" class="custom-file-input" id="exampleInputFile">
		<label class="custom-file-label" for="exampleInputFile">Choose file</label>
		</div>
		<div class="input-group-append">
		<span class="input-group-text" id="">Upload</span>
		</div>
		</div>
		</div>
</div>
</div>

<div class="row">
<div class="col-md-12">
<div class="card-body pad" style="padding:0px;">
<div class="mb-3">
 <label>Description</label>
<textarea name="description" class="textarea" placeholder="Place some text here "style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">             	
</textarea>
 </div>             
</div>
</div>
</div>

<div class="card-footer">
<button type="submit" class="btn btn-primary">Save Post
</button>
</div>
        </form>
        </section>
        </div>
@endsection