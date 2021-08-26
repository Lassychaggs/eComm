@extends('layouts.master')
@section('content')
<div class=" container custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h5>My Orders</h5>
            @forelse ($orders as $product)
                <div class="row searched-item cart-list-divider">
                    <div class="col-sm-4">
                        <a href="{{ url('/productdetail',$product->id) }}">
                            <img class="trending-img" src="{{ $product->gallery }}"  alt="...">
                        </a>
                    </div>
                    <div class="col-sm-8">
                            <div class="">
                            <h2>Name: {{ $product->name }}</h2>
                            <h5>Delivery Status: {{ $product->status }}</h5>
                            <h5>Payment: Method: {{ $product->paymentmethod }}</h5>
                            <h5>Payment Status: {{ $product->paymentstatus }}</h5>
                            <h5>Delivery Adress: {{ $product->address }}</h5>
                            </div>    
                    </div>
                </div>
            @empty
               <h6 class="text-danger">No Items Ordered at the moment</h6> 
            @endforelse
        </div>
    
    </div>
</div>
@endsection