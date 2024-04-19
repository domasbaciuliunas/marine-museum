@extends('layout.layout')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach( $errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<form action="{{ route('admin_orders.store') }}" method="POST">
    @csrf
    <div class="card container mt-5 py-5 bg-dark text-white">
        <h5>Užsakyti bilietus</h5>
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">E.paštas:</label>
            <input type="email" class="form-control" id="email" name="email"
                   placeholder="Įveskite savo elektroninį paštą">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Vardas:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Įveskite savo vardą">
        </div>
        <div class="mb-3">
            <label for="surname" class="form-label">Pavardė:</label>
            <input type="text" class="form-control" id="surname" name="surname"
                   placeholder="Įveskite savo pavardę">
        </div>
        <div class="mb-3">
            <label for="city" class="form-label">Miestas:</label>
            <select class="form-select" name="city" id="city">
                <option>Klaipėda</option>
                <option>Vilnius</option>
                <option>Kaunas</option>
                <option>Alytus</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Kortelės galiojimo data:</label>
            <input type="text" class="form-control" id="date" placeholder="pvz.: 12-99" name="date">
        </div>
        <div class="mb-3">
            <label for="bank" class="form-label">Kortelės numeris:</label>
            <input type="text" class="form-control" id="bank" name="bank"
                   placeholder="pvz.: 1234 4567 8910 1112">
        </div>
        <div class="mb-3">
            <h5>Bilietai:</h5>
            <div class="row flex-column flex-md-row">
                <div class="col mx-2">
                    <label for="child" class="form-label">Vaikamas(iki 5) 15 €</label>
                    <input type="number" id="child" name="child" value="0" class="form-control">
                </div>
                <div class="col mx-2">
                    <label for="teen" class="form-label">Vaikamas(nuo 5 iki 16) 20 €</label>
                    <input type="number" id="teen" name="teen" value="0" class="form-control">
                </div>
                <div class="col mx-2">
                    <label for="adult" class="form-label">Suaugusiems 30 €</label>
                    <input type="number" id="adult" name="adult" value="0" class="form-control">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Užsakyti</button>
        <div class="container d-flex flex-column mx-2 pt-4">
            <h5>Galutinė kaina:</h5>
            <output id="f_price"></output>
        </div>

    </div>

</form>
@endsection
