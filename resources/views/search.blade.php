@extends('layouts.master')
@section('content')
<div class=" container custom-product">
    <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>
    <div class="col-sm-4">
        <div class="trending-wrapper">
            <h5>Search results for products</h5>
            @forelse ($products as $product)
                <div class="searched-item">
                    <a href="{{ url('/productdetail',$product->id) }}">
                        <img class="trending-img" src="{{ $product->gallery }}"  alt="...">
                        <div class="">
                        <h4>{{ $product->name }}</h4>
                        <h6>{{ $product->description }}</h6>
                        </div>    
                    </a>
                </div>
            @empty
               <h6 class="text-danger">No results found</h6> 
            @endforelse
        </div>
    
    </div>
</div>
@endsection