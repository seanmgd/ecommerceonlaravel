@extends('layout.main')
@section('title') shop @endsection
@section('extra-css') <link rel="stylesheet" href="/css/shop.css"> @endsection
@section('content')
    <section class="text-custom-grey body-font flex items-center justify-center flex-col h-screen page-layout-left-sidebar shop">
        <div class="relative infos flex-col flex items-center justify-center bg-black sm:p-16 p-4 rounded">
            <a class="back" href="{{ route('home') }}"><span class="back-button"><</span>back</a>
            <div class="col-md-9 main-wrap pt-2">
                <div class="main-content">
                    <div class="shop-loop grid">
                        <ul class="products">
                            <li class="product">
                                <div class="product-container">
                                    <figure>
                                        <div class="product-wrap">
                                            <div class="product-images">
                                                <div class="shop-loop-thumbnail">
                                                    <img src="/img/product.jpg" alt="image"/>
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
                                                    <h3 class="product_title"><a href="#">Cras rhoncus duis viverra</a></h3>
                                                </div>
                                                <div class="info-meta">
                                                    <div class="info-price">
                                                        <span class="price">
                                                            <span class="amount">&#36;12.00</span>&ndash;<span class="amount">&#36;23.00</span>
                                                        </span>
                                                    </div>
                                                    <div class="loop-add-to-cart">
                                                        <a href="#">Select options</a>
                                                    </div>
                                                </div>
                                                <div class="info-excerpt">
                                                    Proin malesuada enim nulla, nec bibendum justo vestibulum non. Duis et ipsum convallis, bibendum enim a, hendrerit diam. Praesent tellus mi, vehicula et risus eget, laoreet tristique tortor. Fusce id&hellip;
                                                </div>
                                                <div class="list-info-meta clearfix">
                                                    <div class="info-price">
                                                        <span class="price">
                                                            <span class="amount">&#36;12.00</span>&ndash;<span class="amount">&#36;23.00</span>
                                                        </span>
                                                    </div>
                                                    <div class="list-action clearfix">
                                                        <div class="loop-add-to-cart">
                                                            <a href="#">Select options</a>
                                                        </div>
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <div class="yith-wcwl-add-button">
                                                                <a href="#" class="add_to_wishlist">
                                                                    Add to Wishlist
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <figure>
                                        <div class="product-wrap">
                                            <div class="product-images">
                                                <div class="shop-loop-thumbnail">
                                                    <img src="/img/product.jpg" alt="image"/>
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
                                                    <h3 class="product_title"><a href="#">Creamy Spring Pasta</a></h3>
                                                </div>
                                                <div class="info-meta">
                                                    <div class="info-price">
                                                        <span class="price">
                                                            <span class="amount">&#36;12.00</span>&ndash;<span class="amount">&#36;23.00</span>
                                                        </span>
                                                    </div>
                                                    <div class="loop-add-to-cart">
                                                        <a href="#">Select options</a>
                                                    </div>
                                                </div>
                                                <div class="info-excerpt">
                                                    Proin malesuada enim nulla, nec bibendum justo vestibulum non. Duis et ipsum convallis, bibendum enim a, hendrerit diam. Praesent tellus mi, vehicula et risus eget, laoreet tristique tortor. Fusce id&hellip;
                                                </div>
                                                <div class="list-info-meta clearfix">
                                                    <div class="info-price">
                                                        <span class="price">
                                                            <span class="amount">&#36;12.00</span>&ndash;<span class="amount">&#36;23.00</span>
                                                        </span>
                                                    </div>
                                                    <div class="list-action clearfix">
                                                        <div class="loop-add-to-cart">
                                                            <a href="#">Select options</a>
                                                        </div>
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <div class="yith-wcwl-add-button">
                                                                <a href="#" class="add_to_wishlist">
                                                                    Add to Wishlist
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </li>
                            <li class="product">
                                <div class="product-container">
                                    <figure>
                                        <div class="product-wrap">
                                            <div class="product-images">
                                                <div class="shop-loop-thumbnail">
                                                    <img src="/img/product.jpg" alt="image"/>
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
                                                    <h3 class="product_title"><a href="#">Pesto Cauliflower</a></h3>
                                                </div>
                                                <div class="info-meta">
                                                    <div class="info-price">
                                                        <span class="price">
                                                            <span class="amount">&#36;15.05</span>
                                                        </span>
                                                    </div>
                                                    <div class="loop-add-to-cart">
                                                        <a href="#">Select options</a>
                                                    </div>
                                                </div>
                                                <div class="info-excerpt">
                                                    Proin malesuada enim nulla, nec bibendum justo vestibulum non. Duis et ipsum convallis, bibendum enim a, hendrerit diam. Praesent tellus mi, vehicula et risus eget, laoreet tristique tortor. Fusce id&hellip;
                                                </div>
                                                <div class="list-info-meta clearfix">
                                                    <div class="info-price">
                                                        <span class="price">
                                                            <span class="amount">&#36;15.05</span>
                                                        </span>
                                                    </div>
                                                    <div class="list-action clearfix">
                                                        <div class="loop-add-to-cart">
                                                            <a href="#">Select options</a>
                                                        </div>
                                                        <div class="yith-wcwl-add-to-wishlist">
                                                            <div class="yith-wcwl-add-button">
                                                                <a href="#" class="add_to_wishlist">
                                                                    Add to Wishlist
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
