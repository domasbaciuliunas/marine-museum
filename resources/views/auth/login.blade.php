@extends('layout.layout')

@section("content")
    <div class="container-fluid" id="wraper">
        <div class="text-white">
            <div class="d-flex justify-content-center">
            <div class="card bg-dark text-white">
                <div class="card-body px-5">
                    <h5>Prisijungti</h5>
                    <form action="{{ route('login.auth') }}" method="POST">
                        @csrf
                        <div class="mb-3 mt-3 ">
                            <label for="email" class="form-label ">elektroninis paštas:</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="įveskite el.paštą" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label ">slaptažodis:</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="įveskite slaptažodį" required>
                        </div>
                        @if(Session::has('failure'))
                            <p class="text-bg-danger">{{ Session::get('failure')}}</p>
                        @endif
                        <div class="mb-3">
                            <button type="submit" class="btn btn-dark">Prisijungti</button>
                        </div>
                    </form>
                </div>
            </div>
            </div>
            </div>
        </div>
@endsection
