@extends('layouts.main')

@push('title')
    AddProduct
@endpush

@section('addproduct');
    <div class="main-categorious">
        @if(session('Success'))
            {{session('Success')}}
        @elseif(session('errorr'))
            {{session('errorr')}}
        @else
            {{session('error')}}
        @endif
        <div class="footer">
            @include('layouts.leftlist')
            {{--selected product details goes here--}}
            <div class="contact">
                <div class="contact-us">
                    @foreach($products as $items)
                    <p>{{$items->pname}}</p>
                </div>
            
                <div class="dish-info">
                    <div class="machine-pic">
                        <div class="img">
                            <img src="{{asset($items->pimage)}}">
                        </div>
                        <div class="stock">
                            <p>In Stock:{{$items->pstock}}</p>
                        </div>
                    </div>
                    <div class="machine-info">
                        <div class="washer">
                            <p>{{$items->pname}}</p>
                        </div>
                        <div class="model-info">
                            <span>Model:{{$items->pname}}</span>
                            <p>Manufacturer:{{$items->description}}</p>
                        </div>
                        <form method="post" action="{{route('cart_add')}}">
                            @csrf
                            <div class="quantity">
                                <table>
                                    <tr>
                                        <td><input type="hidden" name="userid" value="{{$userId}}"></td>
                                        <td><input type="hidden" name="productid" value="{{$items->id}}"></td>
                                        <td><input type="hidden" name="productstock" value="{{$items->pstock}}"></td> 
                                        <td class="qty">Enter quantity</td>
                                        <td><input type="text" name="quantity"></td>
                                    </tr>
                                </table>
                                <div class="price">
                                    <span>Rs. {{$items->pprice}}</span>
                                </div>
                            </div>
                            <div class="cart">
                                <input type="submit" name="addcart" value="Add to Cart">
                            </div>
                        </form>
                        <div class="checkout">
                            <input type="submit" name="" value="checkout">
                        </div>
                    </div>
                </div>
                {{--selected product details ends here--}}
                @endforeach
                <div class="info">
                    {{--Review form goes here--}}
                    <form>
                        <table class="table-info">
                            <tr>
                                <td class="nme">Enter name</td>
                                <td><input type="" name=""></td>
                            </tr>
                            <tr>
                                <td class="nme">Enter Email</td>
                                <td><input type="" name=""></td>
                            </tr>
                            <tr>
                                <td class="nme">Enter Review</td>
                                <td><textarea></textarea></td>
                            </tr>
                            <tr>
                                <td class="nme">Rating</td>
                                <td><input type="" name=""></td>
                            </tr>
                            <tr>
                                <td class="btnn-1">
                                    <input type="submit" name="" value="Submit query">
                                </td>
                            </tr>
                        </table>
                    </form>
                    {{--Review form ends here--}}
                </div>
            </div>
@endsection