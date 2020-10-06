@extends('layout.main')
@section('title') shop @endsection
@section('extra-css') <link rel="stylesheet" href="/css/shop.css"> @endsection
@section('content')
    <section class="text-custom-grey body-font flex items-center justify-center flex-col h-screen page-layout-left-sidebar shop">
        <div class="relative infos flex-col flex items-center justify-center bg-black sm:p-16 p-4 rounded">
            <a class="back" href="{{ route('home') }}"><span class="back-button"><</span>back </a>
            <div class="col-md-9 main-wrap pt-2">
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
                                                    </div>
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button">
                                                            <a href="#" class="add_to_wishlist">
                                                                Add to Wishlist
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                    <div class="shop-loop-quickview">
                                                        <a href="#" data-rel="quickViewModal"><i class="fa fa-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <figcaption>
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
        </div>
    </section>
@endsection
