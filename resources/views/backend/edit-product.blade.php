@extends('backend.master')
@section('title')
    Edit Product
@endsection
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <form action="{{route('edit',['id'=>$product->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Product Name</label>
                            <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" value="{{$product->name}}">
                        </div>
                        <div class="mb-3">
                            <label for="category_name" class="form-label">Category Name</label>
                            <input type="text" class="form-control" name="category_name" id="category_name" aria-describedby="emailHelp"  value="{{$product->category_name}}">
                        </div>
                        <div class="mb-3">
                            <label for="brand_name" class="form-label">Brand Name</label>
                            <input type="text" class="form-control" name="brand_name" id="brand_name" aria-describedby="emailHelp"  value="{{$product->brand_name}}">
                        </div>
                        <div class="mb-3">
                            <label for="desp" class="form-label"> Description</label>
                            <input type="text" class="form-control" name="desp" id="desp"  value="{{$product->description}}">
                        </div>
                        <img src="{{$product->img}}" height="200px" width="200px">
                        <div class="mb-3">
                            <input type="file" name="img" id="img">
                        </div>
                        <button type="submit" name="btn" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
