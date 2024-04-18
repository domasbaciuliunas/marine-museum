@extends('layout.layout')

@section('content')
    <div class="container mt-3">
        <div class="card bg-dark text-white">
            <div class="card-header">
                Redaguoti administratorių
            </div>
            <div class="card-body">
                <form  method="post" action="{{ route('admin.update', $admin->id)}}">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Vardas:</label>
                        <input type="text" class="form-control" id="name" placeholder="Vardas" value="{{$admin->name}}" name="name">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Paštas:</label>
                        <input type="email" class="form-control" id="email" placeholder="paštas" value="{{$admin->email}}" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Slaptažodis:</label>
                        <input type="password" class="form-control" id="password" placeholder="Įveskite naują slaptažodį" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Išsaugoti</button>
                </form>
            </div>
        </div>
    </div>
@endsection
