@extends('layout.main')
@section('title') cart @endsection
@section('extra-css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
    <link rel="stylesheet" href="/css/checkout.css">
@endsection
@section('content')
    <div class="w-80 main-wrap">
        <div class="main-content">
            @if($message = Session::get('success'))
                <div class="px-4 py-3 alert" role="alert" style="top: 20px">
                    <p class="font-bold text-white">{{$message}}</p>
                </div>
            @endif
            @if(!Cart::content()->isEmpty())
                <div class="grid grid-cols-3 gap-2">
                    <div class="col-span-2"> lelele</div>
                    <div class="col-span-1 box custom-card-panel z-depth-3">
                        <div class="invoice">
                            <table>
                                <thead>
                                <tr>
                                    <th>QTY</th>
                                    <th>ITEM</th>
                                    <th class="right-align">PRICE</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach(Cart::content() as $product)
                                    <tr>
                                        <td>{{ $product->qty }}</td>
                                        <td>
                                            <a href="{{ route('product', $product->model->slug) }}" target="_blank">
                                                {{ $product->model->name }} {{ $product->model->size }}
                                            </a>
                                        </td>
                                        <td class="right-align">{{ $product->model->price * $product->qty }} €</td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td></td>
                                    <td class="right-align">Shipping</td>
                                    <td class="right-align">8 €</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="right-align bold">Total</td>
                                    <td class="right-align bold">$6.75</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="payment">
                            <h5>Payment Information</h5>
                            <div class="credit-card-box card-panel z-depth-2 animation-element slide-left">
                                <div class="flip">
                                    <div class="front">
                                        <div class="number input-field">
                                            <label for="card-number">Card Number</label>
                                            <input type="text" id="card-number" class="input-card-number"
                                                   maxlength="4"/>
                                            <input type="text" id="card-number-1" class="input-card-number"
                                                   maxlength="4"/>
                                            <input type="text" id="card-number-2" class="input-card-number"
                                                   maxlength="4"/>
                                            <input type="text" id="card-number-3" class="input-card-number"
                                                   maxlength="4"/>
                                        </div>
                                        <div class="cvv input-field">
                                            <label for="card-cvv">CVV</label>
                                            <input type="text" id="card-cvv" class="input-card-cvv" maxlength="3"/>
                                        </div>
                                        <div class="card-holder input-field">
                                            <label for="name">Card Holder</label>
                                            <input type="text" name="name" id="name">
                                        </div>

                                        <div class="card-expiration-date input-field">
                                            <label for="date">Expires</label>
                                            <input type="text" name="date" id="date">
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="button checkout row">
                            <button class="col s12 btn-large btn waves-effect waves-dark register"
                                    style="background-color:#212121"><span>Checkout</span> <i class="fa fa-check"></i>
                            </button>
                        </div>
                    </div>
                </div>
                {{--                    <div class="shop">--}}
                {{--                        <table class="table shop_table cart">--}}
                {{--                            <thead>--}}
                {{--                                <tr>--}}
                {{--                                    <th class="product-name text-left">Product</th>--}}
                {{--                                    <th class="product-thumbnail">&nbsp;</th>--}}
                {{--                                    <th class="product-price text-center">Price</th>--}}
                {{--                                    <th class="product-quantity text-center">Quantity</th>--}}
                {{--                                    <th class="product-subtotal text-center hidden-xs">Total</th>--}}
                {{--                                </tr>--}}
                {{--                            </thead>--}}
                {{--                            <tbody>--}}
                {{--                            --}}{{--                                <tr>--}}
                {{--                            --}}{{--                                    <td colspan="6" class="actions">--}}
                {{--                            --}}{{--                                        <div class="coupon">--}}
                {{--                            --}}{{--                                            <label for="coupon_code">Coupon:</label>--}}
                {{--                            --}}{{--                                            <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code"/>--}}
                {{--                            --}}{{--                                            <input type="submit" class="button" name="apply_coupon" value="Apply Coupon"/>--}}
                {{--                            --}}{{--                                        </div>--}}
                {{--                            --}}{{--                                        <input type="submit" class="button update-cart-button" name="update_cart" value="Update Cart"/>--}}
                {{--                            --}}{{--                                    </td>--}}
                {{--                            --}}{{--                                </tr>--}}
                {{--                            </tbody>--}}
                {{--                        </table>--}}
                {{--                        <div class="cart-collaterals pt-16">--}}
                {{--                            <div class="cart_totals">--}}
                {{--                                <h2 class="mb-3 mr-3">Cart Totals</h2>--}}
                {{--                                <table>--}}
                {{--                                    <tr class="cart-subtotal">--}}
                {{--                                        <th>Subtotal</th>--}}
                {{--                                        <td><span>{{Cart::subtotal()}} €</span></td>--}}
                {{--                                    </tr>--}}
                {{--                                    <tr class="shipping">--}}
                {{--                                        <th>Shipping</th>--}}
                {{--                                        <td><span>{{number_format(8, 2)}} €</span></td>--}}
                {{--                                    </tr>--}}
                {{--                                    <tr>--}}
                {{--                                        <th>Total</th>--}}
                {{--                                        <td><strong><span class="amount">{{number_format(Cart::subtotal() + 8, 2)}} €</span></strong></td>--}}
                {{--                                    </tr>--}}
                {{--                                </table>--}}
                {{--                                <div class="wc-proceed-to-checkout">--}}
                {{--                                    <a href="#" class="checkout-button button alt wc-forward">Pay now</a>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                                                        <div class="cross-sells ml-4">--}}
                {{--                                                            <h2>You may be interested in&hellip;</h2>--}}
                {{--                                                            <ul class="products columns-2">--}}
                {{--                                                                <li class="product">--}}
                {{--                                                                    <div class="product-container">--}}
                {{--                                                                        <figure>--}}
                {{--                                                                            <div class="product-wrap">--}}
                {{--                                                                                <div class="product-images">--}}
                {{--                                                                                    <div class="shop-loop-thumbnail">--}}
                {{--                                                                                        <img width="300" height="350" src="img/product.jpg" alt="Product-3"/>--}}
                {{--                                                                                    </div>--}}
                {{--                                                                                    <div class="yith-wcwl-add-to-wishlist">--}}
                {{--                                                                                        <div class="yith-wcwl-add-button">--}}
                {{--                                                                                            <a href="#" class="add_to_wishlist">--}}
                {{--                                                                                                Add to Wishlist--}}
                {{--                                                                                            </a>--}}
                {{--                                                                                        </div>--}}
                {{--                                                                                    </div>--}}
                {{--                                                                                    <div class="clear"></div>--}}
                {{--                                                                                    <div class="shop-loop-quickview">--}}
                {{--                                                                                        <a href="#" data-rel="quickViewModal"><i class="fa fa-plus"></i></a>--}}
                {{--                                                                                    </div>--}}
                {{--                                                                                </div>--}}
                {{--                                                                            </div>--}}
                {{--                                                                            <figcaption>--}}
                {{--                                                                                <div class="shop-loop-product-info">--}}
                {{--                                                                                    <div class="info-title">--}}
                {{--                                                                                        <h3 class="product_title"><a href="#">Creamy Spring</a></h3>--}}
                {{--                                                                                    </div>--}}
                {{--                                                                                </div>--}}
                {{--                                                                            </figcaption>--}}
                {{--                                                                        </figure>--}}
                {{--                                                                    </div>--}}
                {{--                                                                </li>--}}
                {{--                                                                <li class="product">--}}
                {{--                                                                    <div class="product-container">--}}
                {{--                                                                        <figure>--}}
                {{--                                                                            <div class="product-wrap">--}}
                {{--                                                                                <div class="product-images">--}}
                {{--                                                                                    <div class="shop-loop-thumbnail">--}}
                {{--                                                                                        <img width="300" height="350" src="img/product.jpg" alt="Product-11"/>--}}
                {{--                                                                                    </div>--}}
                {{--                                                                                    <div class="yith-wcwl-add-to-wishlist">--}}
                {{--                                                                                        <div class="yith-wcwl-add-button">--}}
                {{--                                                                                            <a href="#" class="add_to_wishlist">--}}
                {{--                                                                                                Add to Wishlist--}}
                {{--                                                                                            </a>--}}
                {{--                                                                                        </div>--}}
                {{--                                                                                    </div>--}}
                {{--                                                                                    <div class="clear"></div>--}}
                {{--                                                                                    <div class="shop-loop-quickview">--}}
                {{--                                                                                        <a href="#" data-rel="quickViewModal"><i class="fa fa-plus"></i></a>--}}
                {{--                                                                                    </div>--}}
                {{--                                                                                </div>--}}
                {{--                                                                            </div>--}}
                {{--                                                                            <figcaption>--}}
                {{--                                                                                <div class="shop-loop-product-info">--}}
                {{--                                                                                    <div class="info-title">--}}
                {{--                                                                                        <h3 class="product_title"><a href="#">Nunc lacus sem</a></h3>--}}
                {{--                                                                                    </div>--}}
                {{--                                                                                </div>--}}
                {{--                                                                            </figcaption>--}}
                {{--                                                                        </figure>--}}
                {{--                                                                    </div>--}}
                {{--                                                                </li>--}}
                {{--                                                            </ul>--}}
                {{--                                                        </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
            @else
                <a class="flex items-center justify-center" href="{{ route('shop') }}">Empty cart, you must add
                    product</a>
            @endif
        </div>
    </div>
@endsection
@section('extra-js')
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
@endsection
