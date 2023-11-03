{{--left-list goes here--}}
<div class="main-categorious">
    <div class="categorious">
        <div class="cate-heading">
            <p>CATEGORIES</p>
        </div>
        <div class="items">
            <ul>
                @foreach ($data as $item)
                    <li><a href="{{url('buynow/'.$item->id)}}">{{$item->categoryname}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
{{--left-list ends here--}}