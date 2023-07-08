@extends('backend.master')
@section('title')
    Product-Details
@endsection
@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ $details->img}}"height="300px" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $details->name}}</h5>
                                <p class="card-text">{{ $details->description}}</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
@endsection
