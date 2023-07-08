@extends('backend.master')
@section('title')
    Manage Product
@endsection
@section('content')
    <section class="bg-body-secondary">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <table class="table table-bordered table-hover">
                        <tr class="bg-danger-subtle">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Category_Name</th>
                            <th>Brand_Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Edit / Delete/Details</th>
                        </tr>
                        <tbody>
                        @foreach($products as $value)
                            <tr class="bg-info-subtle">
                                <td>{{$value->id}}</td>
                                <td>{{$value->name}}</td>
                                <td>{{$value->category_name}}</td>
                                <td>{{$value->brand_name}}</td>
                                <td>{{$value->description}}</td>
                                <td><img src=" {{$value->img}}" height="100px" width="100px"></td>
                                <td> <a href="{{route('edit.product',['id'=>$value->id])}}" onclick="return confirm('Are you sure to edit')" class="btn btn-success">Edit</a> <a href="{{route('delete.product',['id'=>$value->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete')">Delete</a>  <a href="{{route('details.product',['id'=>$value->id])}}" class="btn btn-secondary">Details</a> </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
