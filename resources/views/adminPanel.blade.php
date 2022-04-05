@extends('topMenuInterface')
@section('top_menu')
<h2>Users:</h2>

    @foreach($data as $user)

        <h4>{{$user->id}}) {{$user->name}} -- {{$user->email}}</h4>
    @endforeach
{{--<br><br>--}}
{{--    <form method = "post" action = "/deleteUser">--}}
{{--        @csrf--}}
{{--        <label  style="color: red"><h5 align = "center">To Delete User print user`s id:</h5></label>--}}
{{--        <input placeholder="id" ></input>--}}
{{--    </form>--}}
@endsection
