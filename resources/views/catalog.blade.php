@extends('topMenuInterface')
@section('top_menu')

    <div style="text-align: center;"><h1>Catalog</h1></div>
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                @foreach($data as $product)
                    <form method="post" action = "{{route('addProductToBag')}}" >
                        @csrf
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src={{$product->image}} alt="Unavailable" width="100%" height="225">

                                <text x="50%" y="50%" fill="#eceeef" dy=".3em" >{{$product->name}}</text>

                                <div class="card-body">
                                    <p class="card-text">{{$product->description}}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <button type="submit" color="#fefefe" class="btn btn-sm btn-outline-secondary" >Add To Shopping Bag</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                @endforeach


            </div>
        </div>
    </div>
@endsection
