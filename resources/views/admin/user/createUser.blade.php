@extends('admin.master')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <h3 class="text-center text-success">{{Session::get('message')}}</h3>
        <hr/>
        <div class="well">
            {!!Form::open(['url'=>'user/save','method'=>'POST','class'=>'form-horizontal'])!!}
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">User Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name">
                    <span class="text-danger">{{$errors->has('name')?$errors->first('name'):''}}</span>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="email">
                    <span class="text-danger">{{$errors->has('email')?$errors->first('email'):''}}</span>
                </div>
            </div>
            <div class="form-group">
                <label for="inputpassword3" class="col-sm-2 control-label">Address</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="address" rows="2"></textarea>
                    <span class="text-danger">{{$errors->has('address')?$errors->first('address'):''}}</span>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="password">
                    <span class="text-danger">{{$errors->has('password')?$errors->first('password'):''}}</span>
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-2 col-sm-10">
                    <button type="submit" name="btn" class="btn btn-success btn-block">Save User Info</button>
                </div>
            </div>
            {!!Form::close()!!}
        </div>
    </div>
    
</div>

@endsection


