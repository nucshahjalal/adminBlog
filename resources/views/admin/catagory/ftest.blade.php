           
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
   

<div class="row">
  <div class="col-md-12">
    <div class="card card-primary">
              <div class="card-header">
               <h3 class="card-title">Quick Example</h3>
              </div>
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                  <label>List item</label>
                  <select class="form-control">
                    <option>Select ....</option>
                    <option>Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>   
                  </select>
                </div>
               </div>
<div class="col-md-6">
           <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
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
            <div class="form-group">
                  <label>List item</label>
                  <select class="form-control">
                    <option>Select ....</option>
                    <option>Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>   
                  </select>
                </div>
               </div>
               </div>
              </div>
               </form>
            </div>
          </div>
       </div>




   </section>
  </div>
  @endsection