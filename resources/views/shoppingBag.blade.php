@extends('topMenuInterface')

@section('top_menu')
    @if (Auth()->user() != null && Auth()->user()->current_bag != null)
        @foreach(preg_split('/\s+/', Auth()->user()->current_bag) as $index)
            @if (\App\Models\Product::all()->count() >= $index && \App\Models\Product::find($index) != null)
                {{\App\Models\Product::find($index)}}
                <br><br><br>

                <div class="col" style="size: 500px">
                    <div class="card shadow-sm">
                        <img src={{\App\Models\Product::find($index)->image}} alt="Unavailable" width="350"
                             height="225">

                        <text x="50%" y="50%" fill="#eceeef" dy=".3em"
                              align="center">{{\App\Models\Product::find($index)->name}}</text>

                        <div class="card-body">
                            <p class="card-text">{{\App\Models\Product::find($index)->description}}</p>
                            Price: {{\App\Models\Product::find($index)->price}}$

                        </div>

                    </div>

                    @endif
                    @endforeach
                    @else
                        <h4>Please register to see the shopping basket<h4>
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
