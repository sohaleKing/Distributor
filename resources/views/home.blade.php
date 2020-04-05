@extends('layouts.app')
@extends('layouts.head')

@section('content')

@include('layouts.banner')

@include('layouts.category')

<div class="container my-5 product-slider-text-wrapper">
    <div class="row justify-content-center">
        <div class="col-md-12 justify-content-center">
            
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

@include('layouts.productScroll') 
@include('layouts.script') 

        </div>
@include('layouts.footer') 
    </div> 
</div>

@endsection