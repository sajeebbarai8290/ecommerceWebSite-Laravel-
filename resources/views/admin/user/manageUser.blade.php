@extends('admin.master')
@section('content')
<hr/>
<h3 class="text-center text-success">{{Session::get('message')}}</h3>
<hr/>
<h2>Total {{$users->total()}} users</h2>
<h3>{{$users->count()}} in this page</h3>
<table class="table table-hover table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Action</th>

        </tr>
    </thead>
    <?php $i=1; ?>
    @foreach($users as $user)
    <tbody>
        <tr>
         
            <th scope="row">{{$i++}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->address}}</td>
            <td>
                <a href="{{url('user/edit/'.$user->id)}}" class="btn btn-success">
                    <samp class="glyphicon glyphicon-edit"></samp>
                </a>
                <a href="{{url('user/delete/'.$user->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete this');">
                    <samp class="glyphicon glyphicon-trash"></samp>
                </a>
            </td>

        </tr>
    </tbody>
    @endforeach
</table>
<hr/>
<div>
    {{$users->links()}}
</div>
@endsection
  

