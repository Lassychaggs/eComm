@extends('layouts.master')
@section('content')
<div class="container" style="height: 500px; padding-top:100px;">
    <div class="row">
        <div class="col-md-8 col-sm-offset-4" >
            <div class="card card-info">
                <div class="card-header">
                  <h4 class="card-title">Login</h4>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="login" method="POST">
                    @csrf
                  <div class="card-body">
                    <div class="form-group row">
                      <label  class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-6">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label  class="col-sm-2 col-form-label">Password</label>
                      <div class="col-sm-6">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                      </div>
                    </div>
                    
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info">Login</button>
                  </div>
                  <!-- /.card-footer -->
                </form>
              </div>
            
        </div>
    </div>
</div>
@endsection