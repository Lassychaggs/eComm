@extends('layouts.master')
@section('content')
   <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="detail-img" src="{{ $data->gallery }}" alt="">
            </div>
            <div class="col-sm-6">
                <a href="/">Back to Products</a>
                <h2>{{ $data->name }}</h2>
                <h3>Price: {{ $data->price }}</h3>
                <h4> <strong>Details:</strong><br>{{ $data->description }}</h4>
                <h4>Category: {{ $data->category }}</h4>
                <br>
                <form action="/addcart" method="POST">
                    @csrf
                    <input type="text" name="productid" value="{{ $data->id }}" hidden>
                    <button class="btn btn-primary" type="submit">Add to Cart</button>
                </form>
                <br><br>
                <button class="btn btn-success">Order Now</button>
            </div>
        </div>
   </div>
@endsection