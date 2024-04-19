@extends('layout.admin_layout')
@section('content')
    @for($z=0; $z<3;$z++)
        <div class="modal" id='{{$z}}'>
            <div class="card bg-dark text-white">
                <h5>Redaguoti kortelę</h5>
                <form  action="{{ route("price.update", ['id' => $z])}}" method="POST">
                    @csrf
                <div class="card-body">
                    <span id="theValue"></span>
                    @for($x=0; $x<4;$x++)
                        <label for="replace_{{$z}}_{{$x}}" class="form-label">Laukelis_{{$z}}_{{$x}}</label>
                        <input type="text" class="form-control" id="replace_{{$z}}_{{$x}}" placeholder="replace" value="{{$ShortCodes[$x+($z*4)]->replace}}" name="replace">
                    @endfor
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-block">Išsaugoti</button>
                </div>
                </form>
            </div>
        </div>
    @endfor

     <div class="container">
        <header>
            <h1>Kainoraštis</h1>
        </header>
        <div class="text-center">
        <div class="card bg-dark text-white">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card bg-dark text-white">
                            <div class="card-header">
                                <h5>[[TypeA]]</h5>
                            </div>
                            <div class="card-body">
                                <p>[[A_sub1]]</p>
                                <p>[[A_sub2]]</p>
                                <p>[[A_sub3]]</p>
                                <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-block" data-bs-toggle="modal" data-bs-target="#0">Redaguoti</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-dark text-white">
                        <div class="card-header">
                            <h5>[[TypeB]]</h5>
                        </div>
                        <div class="card-body">
                            <p>[[B_sub1]]</p>
                            <p>[[B_sub2]]</p>
                            <p>[[B_sub3]]</p>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-block" data-bs-toggle="modal" data-bs-target="#1">Redaguoti</button>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-dark text-white">
                        <div class="card-header">
                            <h5>[[TypeC]]</h5>
                        </div>
                        <div class="card-body">
                            <p>[[C_sub1]]</p>
                            <p>[[C_sub2]]</p>
                            <p>[[C_sub3]]</p>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-block" data-bs-toggle="modal" data-bs-target="#2">Redaguoti</button>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>


@endsection
