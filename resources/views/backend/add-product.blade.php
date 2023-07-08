@extends('backend.master')
@section('title')
    Add Product
@endsection
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h3 class="text-center">Add Product {{ Session::get('msg') }}</h3>
                    <form action="{{ route('insert.product') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <select name="category_name" id="category_name">
                                <option value="">......./select a Category/........</option>
                                @foreach ($categorys as $category )
                                <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="brand_name" class="form-label">Brand Name</label>
                            <input type="text" class="form-control" name="brand_name" id="brand_name" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="desp" class="form-label"> Description</label>
                            <input type="text" class="form-control" name="desp" id="desp">
                        </div>
                        <div class="mb-3">
                            <input type="file" name="img" id="img">
                        </div>
                        <button type="submit" name="btn" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>`
@endsection
