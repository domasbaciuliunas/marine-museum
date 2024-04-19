@extends('layout.admin_layout')

@section('content')
    <div class="container mt-3">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach( $errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card bg-dark text-white">
            <div class="card-header">
                Redaguoti bilietų užsakymą
            </div>
            <div class="card-body">
                <form  method="post" action="{{ route('admin_orders.update', $orders->id)}}">
                    @csrf
                    @method('put')
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Paštas:</label>
                        <input type="email" class="form-control" id="email" placeholder="Užsakovo paštas" value="{{$orders->email}}" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Vardas:</label>
                        <input type="text" class="form-control" id="name" placeholder="Užsakovo vardas" value="{{$orders->name}}" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="surname" class="form-label">Pavardė:</label>
                        <input type="text" class="form-control" id="surname" placeholder="Užsakovo pavardė" value="{{$orders->surname}}" name="surname">
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
                        <input type="text" class="form-control" id="date" placeholder="Užsakovo kortelės galiojimo data" value="{{$orders->ex_date}}" name="date">
                    </div>
                    <div class="mb-3">
                        <label for="bank" class="form-label">Kortelės numeris:</label>
                        <input type="text" class="form-control" id="bank" placeholder="Užsakovo kortelės numeris" value="{{$orders->cc_number}}" name="bank">
                    </div>
                    <div class="mb-3">
                        <h5>Bilietai:</h5>
                        <div class="row flex-column flex-md-row">
                            <div class="col mx-2">
                                <label for="child" class="form-label">Vaikamas(iki 5) 15 €</label>
                                <input type="number" id="child" name="child" value="{{$orders->child}}" class="form-control">
                            </div>
                            <div class="col mx-2">
                                <label for="teen" class="form-label">Vaikamas(nuo 5 iki 16) 20 €</label>
                                <input type="number" id="teen" name="teen" value="{{$orders->teen}}" class="form-control">
                            </div>
                            <div class="col mx-2">
                                <label for="adult" class="form-label">Suaugusiems 30 €</label>
                                <input type="number" id="adult" name="adult" value="{{$orders->adult}}" class="form-control">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Išsaugoti</button>
                </form>
            </div>
        </div>
    </div>
@endsection
