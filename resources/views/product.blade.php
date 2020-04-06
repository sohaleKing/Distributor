@extends('layouts.app')
@extends('layouts.head')

@section('content')
    <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  
                  
<div class="page-content-wrapper">
        <!--=======  single product slider details area  =======-->

        <div class="single-product-slider-details-area">
            <div class="container">

                @foreach ($products as $product)



                        <div class="row my-5">
                            <div class="col-lg-4">
                                    <div class="single-image">
                                            <img src="assets/img/products/{{ $product->img }}.jpg" class="img-fluid" alt="" width="400px" height="540px">
                                    </div>
                                </div>
                            <div class="col-lg-8">
                                <!--=======  product details description area  =======-->
                                <div class="product-details-description-wrapper">
                                    <h2 class="item-title">{{ $product->name }}</h2>
                                    <p class="price">    
                                        <span class="discounted-price">{{ $product->price }}.00 CAD</span>
                                    </p>
                                    <p class="description">{{ $product->description }}</p>                         
                                    <div class="add-to-cart-btn d-inline-block">
                                        <button class="theme-button theme-button--alt">ADD TO CART</button>
                                    </div>
                                    <div class="quick-view-other-info">
                                        <div class="other-info-links">
                                            <a href="javascript:void(0)"><i class="fa fa-heart-o"></i> ADD TO WISHLIST</a>
                                        </div> 
                                    </div>
                                </div>
                                <!--=======  End of product details description area  =======-->
                            </div>
                        </div>
        

                @endforeach


            </div>
        </div>

        <!--=======  End of single product slider details area  =======-->

    </div>

    <!--====================  End of page content wrapper  ====================-->



@include('layouts.productScroll')             
@include('layouts.script') 
 
                
@endsection
