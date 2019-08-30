@extends('admin.master')
@section('content')
<hr/>
<h3 class="text-center text-success">{{Session::get('message')}}</h3>
<hr/>
<table class="table table-hover table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>manufacturerName</th>
            <th>manufacturerDescription</th>
            <th>manufacturerStatus</th>
            <th>Action</th>

        </tr>
    </thead>
    @foreach($manufacturers as $manufacturer)
    <tbody>
        <tr>
         
            <th scope="row">{{$manufacturer->id}}</th>
            <td>{{$manufacturer->manufacturerName}}</td>
            <td>{{$manufacturer->manufacturerDescription}}</td>
            <td>{{$manufacturer->manufacturerStatus == 1 ? 'Published':'Unpublished'}}</td>
            <td>
                <a href="{{url('manufacturer/edit/'.$manufacturer->id)}}" class="btn btn-success">
                    <samp class="glyphicon glyphicon-edit"></samp>
                </a>
                <a href="{{url('manufacturer/delete/'.$manufacturer->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete this');">
                    <samp class="glyphicon glyphicon-trash"></samp>
                </a>
            </td>

        </tr>
    </tbody>
    @endforeach
</table>
@endsection
  