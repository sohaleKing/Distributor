@extends('layouts.app')
@extends('layouts.head')

@section('content')


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

@include('layouts.productScroll') 
@include('layouts.script') 

                
@endsection