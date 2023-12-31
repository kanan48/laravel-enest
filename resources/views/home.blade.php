@extends('layouts.main')
    @push('title')
        home
    @endpush
@section('home')
    <div class="main-categorious">
        <div class="footer">
            {{--displaying main img here--}}
            <div class="main-img">
                <img src="assets/images/16.png">
            </div>
            {{--displaying ends here--}}
            @include('layouts.leftlist')
            <div class="contact">
                <div class="contact-us">
                    <p>FEATURED PRODUCTS</p>
                </div>
                @foreach($products as $product)
                    <div class="Camera-info">
                        {{--Random products displays here--}}
                            <div class="samsung-cam">
                                <div class="cam-info">
                                    <img src="{{asset($product->pimage)}}">
                                    <div class="sam-prc">
                                        <span>{{$product->pname}}</span>
                                        <p>Rs.{{$product->pprice}}</p>
                                    </div>
                                    <hr class="hr2">
                                    <div class="cart-btn">
                                        <i class="fa fa-plus-circle iconn" aria-hidden="true"></i>
                                        <!-- <i class="fa fa-shopping-cart" aria-hidden="true"></i> -->
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        <input type="submit" name="" value="Add to cart">
                                    </div>
                                </div>
                            </div>
                        {{--Random products displays ends here--}}
                    </div>
                @endforeach
            </div>
@endsection