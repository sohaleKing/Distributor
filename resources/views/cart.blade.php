@extends('layouts.app')
@extends('layouts.head')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Shoping card</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


    <!--====================  page content wrapper ====================-->

    <div class="page-content-wrapper">
        <!--=======  shopping cart wrapper  =======-->

        <div class="shopping-cart-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!--=======  cart table  =======-->

                        <div class="cart-table-container">
                            <table class="cart-table">
                                <thead>
                                    <tr>
                                        <th class="product-name" colspan="2">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total</th>
                                        <th class="product-remove">&nbsp;</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="{{ url('/product') }}">
                                                <img src="assets/img/products/Coconut_oil-1.jpg" class="img-fluid" alt="">
                                            </a>
                                        </td>
                                        <td class="product-name">
                                            <a href="{{ url('/product') }}">Coconut Oil</a>
                                        </td>

                                        <td class="product-price"><span class="price">$5.69</span></td>

                                        <td class="product-quantity">
                                            <div class="pro-qty d-inline-block mx-0">
                                                <input type="text" value="1">
                                            </div>
                                        </td>

                                        <td class="total-price"><span class="price">$5.69</span></td>

                                        <td class="product-remove">
                                            <a href="#">
                                                <i class="pe-7s-close"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="{{ url('/product') }}">
                                                <img src="assets/img/products/olive_oil-3.jpg" class="img-fluid" alt="">
                                            </a>
                                        </td>
                                        <td class="product-name">
                                            <a href="{{ url('/product') }}">Olive Oil</a>
                                            
                                        </td>

                                        <td class="product-price"><span class="price">$5.99</span></td>

                                        <td class="product-quantity">
                                            <div class="pro-qty d-inline-block mx-0">
                                                <input type="text" value="1">
                                            </div>
                                        </td>

                                        <td class="total-price"><span class="price">$5.99</span></td>

                                        <td class="product-remove">
                                            <a href="#">
                                                <i class="pe-7s-close"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="{{ url('/product') }}">
                                                <img src="assets/img/products/macadamia-3.jpg" class="img-fluid" alt="">
                                            </a>
                                        </td>
                                        <td class="product-name">
                                            <a href="{{ url('/product') }}">Macadima Oil</a>
                                          
                                        </td>

                                        <td class="product-price"><span class="price">$4.50</span></td>

                                        <td class="product-quantity">
                                            <div class="pro-qty d-inline-block mx-0">
                                                <input type="text" value="2">
                                            </div>
                                        </td>

                                        <td class="total-price"><span class="price">$9.00</span></td>

                                        <td class="product-remove">
                                            <a href="#">
                                                <i class="pe-7s-close"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!--=======  End of cart table  =======-->
                    </div>
                    <div class="col-lg-12">                      
                    </div>

                    <div class="col-lg-6 offset-lg-6">
                        <div class="cart-calculation-area">
                            <h2 class="cart-calculation-area__title">Cart totals</h2>

                            <table class="cart-calculation-table">                           
                                <tr>
                                    <th>TOTAL</th>
                                    <td class="total">$21.68</td>
                                </tr>
                            </table>

                            <div class="cart-calculation-button">
                                <button class="theme-button theme-button--alt theme-button--checkout">PROCEED TO CHECKOUT</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--=======  End of shopping cart wrapper  =======-->
    </div>

    <!--====================  End of page content wrapper  ====================-->
    @include('layouts.script') 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection