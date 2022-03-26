@extends('topMenuInterface')

@section('top_menu')
    <form method="post" action = /product/add>
        <input type = "search">
    </form>

{{--    @foreach($d as $el)--}}
{{--        <div class = "alert alert-info">--}}
{{--            <h2>--}}
{{--                {{$el->name}}--}}
{{--            </h2>--}}
{{--        </div>--}}
{{--    @endforeach--}}
@endsection
