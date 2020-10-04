@extends('layout.main')
@section('title') cart @endsection
@section('extra-css') <link rel="stylesheet" href="/css/shop.css"> @endsection
@section('content')
    <section class="text-custom-grey body-font h-screen flex items-center justify-center flex-col">
        <div class="infos flex-col flex items-center justify-center bg-black sm:p-16 p-4 rounded relative">
            <a class="back" href="{{ route('home') }}"><span class="back-button"><</span>back</a>
            <div class="w-40 main-wrap mt-5">
                <div class="main-content">
                    <div class="shop">
                        <form>
                            <table class="table shop_table cart">
                                <thead>
                                <tr>
                                    <th class="product-remove">&nbsp;</th>
                                    <th class="product-name text-left">Product</th>
                                    <th class="product-thumbnail">&nbsp;</th>
                                    <th class="product-price text-center">Price</th>
                                    <th class="product-quantity text-center">Quantity</th>
                                    <th class="product-subtotal text-center hidden-xs">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="cart_item">
                                    <td class="product-remove hidden-xs">
                                        <a href="#" class="remove" title="Remove this item">&times;</a>
                                    </td>
                                    <td class="product-thumbnail hidden-xs">
                                        <a href="#">
                                            <img width="100" height="150" src="img/product.jpg" alt="Product-1" class="mt-1"/>
                                        </a>
                                    </td>
                                    <td class="product-name">
                                        <a href="#">Cras rhoncus duis viverra</a>
                                        <dl class="variation">
                                            <dt class="variation-Size">Size:</dt>
                                            <dd class="variation-Size"><p>Extra Large</p></dd>
                                        </dl>
                                    </td>
                                    <td class="product-price text-center">
                                        <span class="amount">22.00 €</span>
                                    </td>
                                    <td class="product-quantity text-center">
                                        <div class="quantity flex justify-center">
                                            <input type="number" step="1" min="0" name="qunatity" value="2" title="Qty" class="input-text qty text" size="4"/>
                                        </div>
                                    </td>
                                    <td class="product-subtotal hidden-xs text-center">
                                        <span class="amount">44.00 €</span>
                                    </td>
                                </tr>
                                <tr class="cart_item">
                                    <td class="product-remove hidden-xs">
                                        <a href="#" class="remove" title="Remove this item">&times;</a>
                                    </td>
                                    <td class="product-thumbnail hidden-xs">
                                        <a href="#">
                                            <img width="100" height="150" src="img/product.jpg" alt="Product-3"/>
                                        </a>
                                    </td>
                                    <td class="product-name">
                                        <a href="#">Creamy Spring Pasta</a>
                                        <dl class="variation">
                                            <dt class="variation-Size">Size:</dt>
                                            <dd class="variation-Size"><p>Medium</p></dd>
                                        </dl>
                                    </td>
                                    <td class="product-price text-center">
                                        <span class="amount">12.00 €</span>
                                    </td>
                                    <td class="product-quantity text-center">
                                        <div class="quantity flex justify-center">
                                            <input type="number" step="1" min="0" name="quantity" value="1" title="Qty" class="input-text qty text" size="4"/>
                                        </div>
                                    </td>
                                    <td class="product-subtotal hidden-xs text-center">
                                        <span class="amount">12.00 €</span>
                                    </td>
                                </tr>
{{--                                <tr>--}}
{{--                                    <td colspan="6" class="actions">--}}
{{--                                        <div class="coupon">--}}
{{--                                            <label for="coupon_code">Coupon:</label>--}}
{{--                                            <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code"/>--}}
{{--                                            <input type="submit" class="button" name="apply_coupon" value="Apply Coupon"/>--}}
{{--                                        </div>--}}
{{--                                        <input type="submit" class="button update-cart-button" name="update_cart" value="Update Cart"/>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
                                </tbody>
                            </table>
                        </form>
                        <div class="cart-collaterals pt-16">
                            <div class="cart_totals">
                                <h2 class="mb-3 mr-3">Cart Totals</h2>
                                <table>
                                    <tr class="cart-subtotal">
                                        <th>Subtotal</th>
                                        <td><span>56.00 €</span></td>
                                    </tr>
                                    <tr class="shipping">
                                        <th>Shipping</th>
                                        <td><span>10.00 €</span></td>
                                    </tr>
                                    <tr>
                                        <th>Total</th>
                                        <td><strong><span class="amount">56.00 €</span></strong></td>
                                    </tr>
                                </table>
                                <div class="wc-proceed-to-checkout">
                                    <a href="#" class="checkout-button button alt wc-forward">Proceed to Checkout</a>
                                </div>
                            </div>
                            <div class="cross-sells ml-4">
                                <h2>You may be interested in&hellip;</h2>
                                <ul class="products columns-2">
                                    <li class="product">
                                        <div class="product-container">
                                            <figure>
                                                <div class="product-wrap">
                                                    <div class="product-images">
                                                        <div class="shop-loop-thumbnail">
                                                            <img width="300" height="350" src="img/product.jpg" alt="Product-3"/>
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
                                                            <h3 class="product_title"><a href="#">Creamy Spring</a></h3>
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
                                                            <img width="300" height="350" src="img/product.jpg" alt="Product-11"/>
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
                                                            <h3 class="product_title"><a href="#">Nunc lacus sem</a></h3>
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
            </div>
        </div>
    </section>
@endsection
