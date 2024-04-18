@extends('layout.layout')

@section('content')
                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="card container mt-5 py-5 bg-dark text-white">
                     <h1 class="card-title">Pridėti naują administartorių</h1>
                        <div class="mb-3 mt-3">
                        <label for="name" class="form-label">Vardas</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Įveskite vardą" required>
                    </div>
                        <div class="mb-3 mt-3">
                        <label for="email" class="form-label">E.paštas</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Įveskite elektroninį paštą" required>
                    </div>
                        <div class="mb-3 mt-3">
                        <label for="password" class="form-label">Slaptažodis</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Įveskite slaptažodį"required>
                    </div>
                        <div class="mb-3 mt-3">
                        <div class="d-grid">
                            <button class="btn btn-primary">Pridėti</button>
                        </div>
                    </div>
                    </div>
                </form>
@endsection

