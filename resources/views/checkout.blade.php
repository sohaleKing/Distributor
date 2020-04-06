@extends('layouts.app')
@extends('layouts.head')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">checkout page</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   
                   

<!--====================  page content wrapper ====================-->

    <div class="page-content-wrapper">
        <!--=======  checkout page wrapper  =======-->

        <div class="checkout-page-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="checkout-form">
                            <!-- Checkout Form s-->
                            <form id="order-form" name="order-form">
                                <div class="row row-40">

                                            <!-- Cart Total -->
                                            <div class="col-12">

                                                <h4 class="checkout-title">Cart Total</h4>

                                                <div class="checkout-cart-total">
                                

                                                    <ul>
                                                        <li>olive oil X 1 <span>$25.00</span></li>
                                                        <li>Macadonia X 2 <span>$50.00</span></li>
                                                        <li>coconut X 1 <span>$29.00</span></li>
                                                    
                                                    </ul>

                                                    <p>Sub Total <span>$104.00</span></p>
                                                    <p>Shipping Fee <span>$20.00</span></p>

                                                    <h4>Grand Total <span>$124.00</span></h4>

                                                </div>

                                            </div>                                   

                                                <a href="#"><button class="theme-button place-order-btn">PLACE ORDER</button></a>

                                    </div>

                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--=======  End of checkout page wrapper  =======-->
    </div>

    <!--====================  End of page content wrapper  ====================-->




                </div>
            </div>
        </div>
    </div>
</div>
@endsection