@extends('admin.master')
@section('content')
<hr/>
<h3 class="text-center text-success">{{Session::get('message')}}</h3>
<hr/>
<table class="table table-hover table-bordered">
    <thead>
        <tr>
            <th>Product Name</th>
            <th>category Name</th>
            <th>Manufacturer Name</th>
            <th>Product Price</th>
            <th>Product Quantity</th>
            <th>Publication Status</th>
            <th>Action</th>

        </tr>
    </thead>
    @foreach($products as $product)
    <tbody>
        <tr>
         
            <th scope="row">{{$product->productName}}</th>
            <td>{{$product->categoryName}}</td>
            <td>{{$product->manufacturerName}}</td>
            <td>TK.{{$product->productPrice}}</td>
            <td>{{$product->productQuantity}}</td>
            <td>{{$product->publicationStatus == 1 ? 'Published':'Unpublished'}}</td>
            <td>
                <a href="{{url('product/view/'.$product->id)}}" class="btn btn-info" title="Product View">
                    <samp class="glyphicon glyphicon-info-sign"></samp>
                </a>
                <a href="{{url('product/edit/'.$product->id)}}" class="btn btn-success" title="Product Edit">
                    <samp class="glyphicon glyphicon-edit"></samp>
                </a>
                <a href="{{url('product/delete/'.$product->id)}}" title="Product Delete" class="btn btn-danger" onclick="return confirm('Are you sure to delete this');">
                    <samp class="glyphicon glyphicon-trash"></samp>
                </a>
            </td>

        </tr>
    </tbody>
    @endforeach
</table>
@endsection
  
