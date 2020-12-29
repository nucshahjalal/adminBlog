@extends('admin.master')
@section('content')

<div class="content-wrapper">
<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
<li class="breadcrumb-item active">Manage Catagory</li>
</ol>

</div>
</div>
</div><!-- /.container-fluid -->
<div class="col-md-4" style="margin:auto;">
  <?php $message = Session::get('success'); 
  if(!empty($message)){
    ?>
    <h6 class="text-center alert alert-info justify-content-center" style="text-align: center;">
      <?php echo $message = Session::get('success');
      Session::put('success',''); ?>
    </h6>
    <?php
  }
  ?>
</div>
<div class="card">
           
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SL NO</th>
                  <th>Catagory Name</th>
                  <th>Publication Status</th>
                  <th>Action</th>                
                </tr>
                <a class ="float-right btn btn-primary" href="{{url('create')}}">Create</a>
                </thead>

                <tbody>
                  <?php $si=1; foreach($datas as $data){?>
                    <tr>
                      <td>{{$si++}}</td>
                      <td>{{$data->name}}</td>
                      <td> <?php if($data->status='1'){?>
                        Active
                        <?php

                      }else{?>
                        Inactive
                        <?php

                      } ?>  </td>
                      <td><a class ="btn btn-primary" href="edit-category/{{$data->id}}">Edit</a> <a onclick="return confirm('Are you sure delete')" class="btn btn-danger" href="delete-category/{{$data->id}}">Delete</a></td>
                    <?php
                  } ?>
                  
                  </tr>
   
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
         
</section>
</div>
@endsection