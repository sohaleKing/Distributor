@extends('layouts.app')
@extends('layouts.head')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Order Tracking</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
    <!--====================  page content wrapper ====================-->

    <div class="page-content-wrapper">
        <div class="order-tracking-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!--=======  order tracking wrapper  =======-->

                        <div class="order-tracking-wrapper">
                            <!--=======  order track form  =======-->

                            <div class="order-track-form">
                                <p>To track your order please enter your Order ID in the box below and press the "Track" button.</p>
                                <form action="" method="POST">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label for="orderId">Order ID</label>
                                            <input type="text" id="orderId" placeholder="tracking number exists on your order details">
                                        </div>
                                        <div class="col-lg-12 text-center">
                                            <button class="theme-button theme-button--order-track">TRACK</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <!--=======  End of order track form  =======-->
                        </div>

                        <!--=======  End of order tracking wrapper  =======-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====================  End of page content wrapper  ====================-->



                </div>
            </div>
        </div>
    </div>
</div>
@endsection




