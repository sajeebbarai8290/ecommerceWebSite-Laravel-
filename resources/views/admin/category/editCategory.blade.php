@extends('admin.master')
@section('content')

<div class="row">
    <div class="col-lg-12">
        
        <hr/>
        <div class="well">
            {!!Form::open(['url'=>'category/update','method'=>'POST','class'=>'form-horizontal','name'=>'editCategoryForm'])!!}
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Category Name</label>
                <div class="col-sm-10">
                    <input type="text" value="{{$categoryById->categoryName}}" class="form-control" name="categoryName">
                    <input type="hidden" value="{{$categoryById->id}}" class="form-control" name="id">
                </div>
            </div>
            <div class="form-group">
                <label for="inputpassword3" class="col-sm-2 control-label">Category Description</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="categoryDescription" rows="8">{{$categoryById->categoryDescription}}</textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="inputpassword3" class="col-sm-2 control-label">Publication Status</label>
                <div class="col-sm-10">
                    <select class="form-control" name="publicationStatus">
                        <option>select Publication Status</option>
                        <option value="1">Published</option>
                        <option value="0">Unpublished</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-4 col-sm-8">
                    <button type="submit" name="btn" class="btn btn-success btn-block">Update Category Info</button>
                </div>
            </div>
            {!!Form::close()!!}
        </div>
    </div>
    
</div>
<script>
    document.forms['editCategoryForm'].elements['publicationStatus'].value={{$categoryById->publicationStatus}}
</script>
@endsection


