@extends('layouts.master')
@section('content')
<div class=" container custom-product">
    <div class="col-sm-12">
        <div class="trending-wrapper">
            <h5>Cart List</h5>
            <a href="/ordernow" class="btn btn-primary">Order now</a><br><br> 
            @forelse ($products as $product)
                <div class="row searched-item cart-list-divider">
                    <div class="col-sm-2">
                        <a href="{{ url('/productdetail',$product->id) }}">
                            <img class="trending-img" src="{{ $product->gallery }}"  alt="...">
                        </a>
                    </div>
                    <div class="col-sm-5">
                            <div class="">
                            <h4>{{ $product->name }}</h4>
                            <h6>{{ $product->description }}</h6>
                            <h6 class="text-success"><strong>$ {{ $product->price }}</strong></h6>
                            </div>    
                    </div>
                    <div class="col-sm-4">
                        <a href="/removecart/{{ $product->cartid }}" class="btn btn-danger">Remove from Cart</a>
                    </div>
                </div>
            @empty
               <h6 class="text-danger">No Items your cart</h6> 
            @endforelse
            <a href="/ordernow" class="btn btn-primary">Order now</a><br><br> 
        </div>
    
    </div>
</div>
@endsection