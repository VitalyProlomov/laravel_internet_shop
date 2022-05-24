@extends('topMenuInterface')

@section('top_menu')

    @if (Auth()->user() != null && Auth()->user()->current_bag != null)
        <ul>
        <h1 align="center" style="">Shopping Bag</h1>
        <br>
        <hr>
        <li style=" float: left;
        list-style-type: none;
        padding-left: 100px;
        padding-right: 25%;">Item</li>
        <li style=" float: left;
        list-style-type: none;
        padding-left: 100px;
        padding-right: 25%;">Price</li>
            </h4>
        </ul>
        <br>
        <hr>
        @foreach(preg_split('/\s+/', Auth()->user()->current_bag) as $index)
            @if (\App\Models\Product::all()->count() >= $index && \App\Models\Product::find($index) != null)

                <br>
                <div class="col" style="size: 200px; display: inline">
                    <div class="card shadow-sm" style="width: 350px">
                        <img src={{\App\Models\Product::find($index)->image}} width="350"
                             height="225" alt="Photo unavailable">
                    </div>

                        <text x="50%" y="50%" fill="#eceeef" dy=".3em"
                              align="left">{{\App\Models\Product::find($index)->name}}</text>


                        <div class="card-body">
                           {{\App\Models\Product::find($index)->description}}
                        </div>
{{--                    ${{\App\Models\Product::find($index)->price}}--}}
                    </div>



                    @endif
                    @endforeach
                    @else
                        <h4>Please register to use the shopping basket</h4>
            @endif
            {{--{{\App\Models\Product::all()->count()}}--}}
            {{--        {{\App\Models\Product::allData()}}--}}
            {{--            {{$product_id }}--}}
            {{--        <div class="col">--}}
            {{--            <div class="card shadow-sm" >--}}
            {{--                <img src={{\App\Models\Product::find($product_id)->image}} alt="Unavailable" width="100%" height="225">--}}

            {{--                <text x="50%" y="50%" fill="#eceeef" dy=".3em" align = "center">{{Product::find($product_id)->name}}</text>--}}

            {{--                <div class="card-body">--}}
            {{--                    <p class="card-text">{{Product::find($product_id)->description}}</p>--}}
            {{--                    Price: {{$product->price}}$--}}
            {{--                    <div class="d-flex justify-content-between align-items-center">--}}
            {{--                        <button type="submit" color="#fefefe" class="btn btn-sm btn-outline-secondary" >Add To Shopping Bag</button>--}}
            {{--                                                                <a class = "btn button btn-outline-secondary" href = "/addProduct"></a>--}}
            {{--                    </div>--}}
            {{--                </div>--}}

            {{--            </div>--}}
            {{--        </div>--}}
            {{--        @endif--}}
            {{--    @endforeach--}}
@endsection
