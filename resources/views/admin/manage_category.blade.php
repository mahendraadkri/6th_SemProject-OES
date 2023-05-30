@extends('admin/layout')

@section('page_title','Manage Category')

@section('container')
    <h1 class="mb10">Add Category</h1>
    <a href="{{url('admin/category')}}">
        <button type="button" class="btn btn-warning">
            Back
        </button>
    </a>
    <div class="row m-t-30">
        <div class="col-md-12">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('category.manage_category_process')}}" method="post">
                        @csrf
                            <div class="form-group">
                                <label for="category_name" class="control-label mb-1">Category Name</label>
                                <input id="category_name" value="{{$category_name}}" name="category_name" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                @error('category_name')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}		
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                            <label for="category_slug" class="control-label mb-1">Category Slug</label>
                            <input id="category_slug" value="{{$category_slug}}" name="category_slug" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                            @error('category_slug')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}		
                            </div>
                            @enderror
                        </div>
                        <div>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                            Submit
                            </button>
                        </div>
                        <input type="hidden" name="id" value="{{$id}}"/>
                        </form>
                    </div>
                </div>
            </div>
                           
        </div>
                        
    </div>
</div>
                        
@endsection