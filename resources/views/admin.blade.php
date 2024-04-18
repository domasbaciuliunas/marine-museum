@extends('layout.layout')
@section("content")
    <div class="row">

        <div class="p-sm-5 col-sm-6 col-md-7">
            <h5>Administratoriaus valdymo skydelis</h5>
            <hr>
            <h1><a href="/admin_orders" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
                    Redaguoti užsakymus</a> </h1>
            <h1><a href="{{ route('register') }}" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
                    Pridėti naują administratorių</a></h1>
            <h1><a href='{{route('price')}}' class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
                    Redaguoti svetainę</a></h1>
        </div>
    </div>
@endsection
