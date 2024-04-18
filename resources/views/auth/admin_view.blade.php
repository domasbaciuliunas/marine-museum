@extends('layout.layout')

@section('content')
    <div class="container ">
        <header>
            <h1>Administratoriai</h1>
        </header>
        <a type="button" href="{{ route('add_admin') }}" class="btn btn-link text-light">Pridėti</a>
        <br>
        <div class="table-responsive-md">
            <table class="table table-hover table-dark">
                <tr>
                    <th>id</th>
                    <th>Vardas</th>
                    <th>E.paštas</th>
                    @if($admins->count() > 1)
                    <th>Naikinti</th>
                    @endif
                    <th>Redaguoti</th>
                </tr>
                <tbody>
                @foreach($admins as $admin)
                    <tr>
                        <td>{{$admin->id}}</td>
                        <td>{{$admin->name}}</td>
                        <td>{{$admin->email}}</td>
                        @if($admins->count() > 1)
                        <td>
                            <form method="post" action="{{ route('admin.destroy', $admin->id) }}">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">Ištrinti</button>
                            </form>
                        </td>
                        @endif
                        <td><a type="button" href="{{ route('admin.edit', $admin->id)}}" class="btn btn-primary">Redaguoti</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
