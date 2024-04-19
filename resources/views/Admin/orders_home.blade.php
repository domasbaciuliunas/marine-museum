@extends('layout.admin_layout')

@section('content')
    <div class="container ">
        <header>
            <h1>Užsakymai</h1>
        </header>
        <div class="table-responsive-md">
            <table class="table table-hover table-dark">
                <tr>
                    <th>id</th>
                    <th>E.paštas</th>
                    <th>Vardas</th>
                    <th>Pavardė</th>
                    <th>Miestas</th>
                    <th>Kortelės galiojimo data</th>
                    <th>Kortelės numeris</th>
                    <th>Vaikamas(iki 5)</th>
                    <th>Vaikamas(nuo 5 iki 16)</th>
                    <th>Suaugusiems</th>
                    <th>Naikinti</th>
                    <th>Redaguoti</th>
                </tr>
                <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->email}}</td>
                        <td>{{$order->name}}</td>
                        <td>{{$order->surname}}</td>
                        <td>{{$order->city}}</td>
                        <td>{{$order->date}}</td>
                        <td>{{$order->bank}}</td>
                        <td>{{$order->child}}</td>
                        <td>{{$order->teen}}</td>
                        <td>{{$order->adult}}</td>
                        <td>
                            <form method="post" action="{{ route('admin_orders.destroy', $order->id) }}">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">Ištrinti</button>
                            </form>
                        </td>
                        <td><a type="button" href="{{ route('admin_orders.edit', $order->id)}}" class="btn btn-primary">Redaguoti</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
