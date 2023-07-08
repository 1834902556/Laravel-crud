@extends('backend.master')
@section('title')
    Add Category
@endsection
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h3 class="text-center">Add category</h3>
                    <h3 class="text-center">{{ Session::get('msg') }}</h3>
                    <form action="{{route('insert.category')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="category_name" class="form-label">Category Name</label>
                            <input type="text" class="form-control" name="category_name" id="category_name" aria-describedby="emailHelp">
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
    <section class="bg-body-secondary">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <table class="table table-bordered table-hover">
                        <tr class="bg-danger-subtle">
                            <th>ID</th>
                            <th>Category_Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Edit/ Delete</th>
                        </tr>
                        <tbody>
                        @foreach($categorys as $value)
                            <tr class="bg-info-subtle">
                                <td>{{$value->id}}</td>
                                <td>{{$value->category_name}}</td>
                                <td>{{$value->category_description}}</td>
                                <td><img src=" {{$value->category_img}}" height="100px" width="100px"></td>
                                <td> <a href=""class="btn btn-success">Edit</a><a href="" class="btn btn-danger">Delete</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
