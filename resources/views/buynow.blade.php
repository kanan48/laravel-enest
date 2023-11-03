@extends('layouts.main')

@push('title')
Buynow
@endpush

@section('buynow')
    <div class="main-categorious">
        <div class="footer">
            @include('layouts.leftlist')

            <div class="contact">
                <div class="contact-us">
                    @foreach($category as $item)
                        <p>{{$item->categoryname}}</p>
                    @endforeach
                </div>
                <div class="product-info">
                    <span>Sort by:</span>
                    <form>
                        <select>
                            <option>product name</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </form>
                </div>
                <div class="display-product">
                    <span>Displaying 1 to 5 (of 6 new products)</span>
                    <div class="btnnn">
                        <input class="pre" type="submit" name="" value="Previous">
                        <input class="nxt" type="submit" name="" value="Next">
                    </div>
                </div>
                {{--All products displays here--}}
                @foreach($product as $item)
                    <div class="dish-info">
                        <div class="machine-pic">
                            <div class="img">
                                <img src="{{asset($item->pimage)}}">
                            </div>
                            <div class="stock">
                                <p>In Stock: {{$item->pstock}}</p>
                            </div>
                        </div>
                        <div class="machine-info">
                            <div class="date">
                                <span> Date:{{\Carbon\Carbon::now()->format('jS F Y')}}</span>{{--for date format--}}
                            </div>
                            {{-- <hr class="hr"> --}}
                            <div class="washer">
                                <p>{{$item->pname}}</p>
                            </div>
                            <div class="model-info">
                                <span>Model: {{$item->pname}}</span>
                                <p>Manufacturer: {{$item->pname}}</p>
                            </div>
                            <div class="price">
                                <span>Rs.{{$item->pprice}}</span>
                            </div>
                            <div class="checkout">
                                @if (!Auth::guard('signup')->check())
                                    {{-- Show the "Login First" button when the user is not authenticated --}}
                                    <a href="{{ url('/') }}">
                                        <input type="button" value="Login First">
                                    </a>
                                @else
                                    <a href="{{ url('addproduct/' . $item->id) }}">
                                        <input type="button" value="Buy Now">
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
                {{--Products displays ends here--}}
            </div>
        </div>
    </div>
@endsection
