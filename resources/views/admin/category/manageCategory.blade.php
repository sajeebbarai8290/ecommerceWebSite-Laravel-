@extends('admin.master')
@section('content')
<hr/>
<h3 class="text-center text-success">{{Session::get('message')}}</h3>
<hr/>
<table class="table table-hover table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>categoryName</th>
            <th>categoryDescription</th>
            <th>PublicationStatus</th>
            <th>Action</th>

        </tr>
    </thead>
    @foreach($categories as $category)
    <tbody>
        <tr>
         
            <th scope="row">{{$category->id}}</th>
            <td>{{$category->categoryName}}</td>
            <td>{{$category->categoryDescription}}</td>
            <td>{{$category->publicationStatus == 1 ? 'Published':'Unpublished'}}</td>
            <td>
                <a href="{{url('category/edit/'.$category->id)}}" class="btn btn-success">
                    <samp class="glyphicon glyphicon-edit"></samp>
                </a>
                <a href="{{url('category/delete/'.$category->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete this');">
                    <samp class="glyphicon glyphicon-trash"></samp>
                </a>
            </td>

        </tr>
    </tbody>
    @endforeach
</table>
@endsection
  