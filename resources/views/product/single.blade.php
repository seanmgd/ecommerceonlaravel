@extends('layout.main')
@section('title') product @endsection
@section('extra-css') <link rel="stylesheet" href="/css/shop.css"> @endsection
@section('content')
    <section class="text-custom-grey body-font flex items-center justify-center flex-col h-screen page-layout-left-sidebar shop">
        <div class="relative infos flex-col flex items-center justify-center bg-black sm:p-16 p-4 rounded container">
            <a class="back" href="{{ route('shop') }}"><span class="back-button"><</span>back</a>
            <div class="summary-container product grid grid-cols-3 gap-3 mt-5">
            <div class="col-span-2 col-sm-6 entry-image flex justify-center">
                <div class="single-product-images">
                    <div class="single-product-images-slider">
                        <div class="caroufredsel product-images-slider" data-synchronise=".single-product-images-slider-synchronise" data-scrollduration="500" data-height="variable" data-scroll-fx="none" data-visible="1" data-circular="1" data-responsive="1">
                            <div class="caroufredsel-wrap">
                                <ul class="caroufredsel-items">
                                    <li class="caroufredsel-item">
                                        <div class="thumb">
                                            <a href="#" data-rel="magnific-popup-verticalfit" title="Product-detail">
                                                <img width="800" height="850" src="{{ Voyager::image($product->image) }}" alt="Product-detail"/>
                                            </a>
                                        </div>
                                    </li>
                                    @if(json_decode($product->images, true))
                                    @foreach(json_decode($product->images, true) as $image)
                                    <li class="caroufredsel-item">
                                        <div class="thumb">
                                            <a href="#" data-rel="magnific-popup-verticalfit" title="Product-detail">
                                                <img width="800" height="850" src="{{ Voyager::image($image) }}" alt="Product-detail"/>
                                            </a>
                                        </div>
                                    </li>
                                    @endforeach
                                    @endif
                                </ul>
                                <a href="#" class="caroufredsel-prev"></a>
                                <a href="#" class="caroufredsel-next"></a>
                            </div>
                        </div>
                    </div>
                    <div class="single-product-thumbnails">
                        <div class="caroufredsel product-thumbnails-slider" data-visible-min="2" data-visible-max="4" data-scrollduration="500" data-direction="up" data-height="100%" data-circular="1" data-responsive="0">
                            <div class="caroufredsel-wrap">
                                <ul class="single-product-images-slider-synchronise caroufredsel-items">
                                    @if(json_decode($product->images, true))
                                    <li class="caroufredsel-item selected">
                                        <div class="thumb">
                                            <a href="#" data-rel="1" title="Product-detail">
                                                <img width="100" height="150" src="{{ Voyager::image($product->image) }}" alt="Product-detail"/>
                                            </a>
                                        </div>
                                    </li>
                                    @foreach(json_decode($product->images, true) as $image)
                                    <li class="caroufredsel-item">
                                        <div class="thumb">
                                            <a href="#" data-rel="2" title="Product-detail">
                                                <img width="100" height="150" src="{{ Voyager::image($image) }}" alt="Product-detail"/>
                                            </a>
                                        </div>
                                    </li>
                                    @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-1 col-sm-6 entry-summary h-500 flex item-end mr-16">
                <div class="summary">
                    <h1 class="product_title entry-title">{{$product->name}}</h1>
                    <p class="price"><span class="amount">{{$product->price}}</span>
                    <div class="my-10">
                        <p>
                            {{$product->description}}
                        </p>
                    </div>
                    <div class="product-actions res-color-attr">
                        <form class="cart" action="{{ route('cart.store') }}" method="post">
                            {{ csrf_field() }}
                            <div class="product-options-outer mb-10">
                                <div class="variation_form_section">
                                    <div class="product-options icons-lg">
                                        <table class="variations-table">
                                            <tbody>
                                            <tr>
                                                <td><label>Size</label></td>
                                                <td>
                                                    <div class="select-option swatch-wrapper">
                                                        <a href="#" title="Medium" class="swatch-anchor flex items-center justify-center">
                                                            S
                                                        </a>
                                                    </div>
                                                    <div class="select-option swatch-wrapper">
                                                        <a href="#" title="Small" class="swatch-anchor flex items-center justify-center">
                                                            M
                                                        </a>
                                                    </div>
                                                    <div class="select-option swatch-wrapper selected">
                                                        <a href="#" title="Extra Large" class="swatch-anchor flex items-center justify-center">
                                                            L
                                                        </a>
                                                    </div>
                                                    <div class="select-option swatch-wrapper">
                                                        <a href="#" title="Extra Extra Large" class="swatch-anchor flex items-center justify-center">
                                                            XL
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="single_variation_wrap">
                                <div class="variations_button">
                                    <div class="quantity">
                                        <input type="hidden" name="id" value="{{ $product->id }}">
                                        <input type="hidden" name="name" value="{{ $product->name }}">
                                        <input type="hidden" name="price" value="{{ $product->price }}">
                                        <input type="number" name="qty" value="1" title="Qty" class="input-text qty text" size="4">
                                    </div>
                                    <button type="submit" class="button">Add to cart</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="product_meta">
{{--                        <span class="sku_wrapper">SKU: <span class="sku">N/A</span></span>--}}
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
