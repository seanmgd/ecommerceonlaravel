@extends('layout.main')
@section('title') shop @endsection
@section('extra-css') <link rel="stylesheet" href="/css/shop.css"> @endsection
@section('content')
    <div class="container pt-2">
        <div class="main-content">
            <div class="shop-loop grid">
                <ul class="products">
                    @foreach($products as $product)
                    <a href="{{ route('product', $product->slug) }}" class="cursor-pointer">
                        <li class="product">
                            <div class="product-container">
                                <figure class="hover:cursor-pointer">
                                    <div class="product-wrap">
                                        <div class="product-images">
                                            <div class="shop-loop-thumbnail">
                                                <img src="{{ Voyager::image($product->image) }}" alt="image"/>
                                                <p>{{$product->name}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <figcaption style="display:none">
                                        <div class="shop-loop-product-info">
                                            <div class="info-title">
                                                <h3 class="product_title"><a href="#">{{$product->name}}</a></h3>
                                            </div>
                                            <div class="info-meta">
                                                <div class="info-price">
                                                    <span class="price">
                                                       <span class="amount">{{$product->price}} €</span>
                                                    </span>
                                                </div>
                                                <div class="loop-add-to-cart">
                                                    <a href="#">Select</a>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </li>
                    </a>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
