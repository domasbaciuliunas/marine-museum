@extends('layout.layout')
@section("content")
        <div class="row">
            <div class="p-sm-5 col-sm-6 col-md-7  ">
                <h1 class="display-1">Jūrų</h1>
                <h1 class="display-1">Muziejaus</h1>
                <h1 class="display-1">Svetainė</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6">
            </div>

            <div class="col-sm-4 col-md-3">
                <p>
                    Jūrų muziejus leidžia žmonėms pažinti įvairių jūrų ekosistemų grožį ir įvairovę.
                    Šis muziejus dažnai yra skirti ne tik pramogai, bet ir mokymuisi, kultūrinei edukacijai
                    ir aplinkos apsaugos sąmonės kėlimui.
                    Jūrų muziejuje, lankytojus dažnai pasitinka įspūdingi akvariumai,
                    kuriuose galima stebėti įvairiausius jūrų gyvūnus
                    - nuo spalvingų tropinių žuvų iki įspūdingų banginių.
                </p>
                <p>
                    Be to, daugelyje šių muziejų yra interaktyvių eksponatų, leidžiančių lankytojams sužinoti
                    daugiau apie jūrų gyvūnų elgesį, adaptaciją ir ekologinę svarbą.
                    Tai gali būti interaktyvios mokomosios programos,
                    taktiliniai eksponatai ar net virtualios realybės simuliacijos,
                    kurios leidžia lankytojams „nuskristi“ po jūrų gelmes ir
                    pamatyti jų gyvenimą iš pirmojo asmens perspektyvos.
                </p>
                <div class="d-grid">
                    <a type="button" class="btn btn-primary btn-block" href="{{ route('order') }}">Pirkti bilietus</a>
                </div>

            </div>
            <div class="col-sm-3 col-md-3">
            </div>
        </div>

        <div class="card container mt-5 py-5  bg-dark text-white">
            <div class="card-body">
                <h5>Kainoraštis</h5>
                <div id="demo" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                    </div>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="card-body">
                                <div class="card-header">Vaikamas iki 5 metų</div>
                                <div class="card-body">
                                    <ul class="list-unstyled text-small">
                                        <li>
                                            <p>Įėjimas nuo 8.00 iki 15.00</p>
                                        </li>
                                        <li>
                                            <p>Vykdomi užsiėmimai</p>
                                        </li>
                                        <li>
                                            <p>Sekmadieniais nemokamai</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card-body">
                                <div class="card-header">Vaikams nuo 5 iki 16 metų</div>
                                <div class="card-body">
                                    <ul class="list-unstyled text-small">
                                        <li>
                                            <p>Įėjimas nuo 8.00 iki 19.00</p>
                                        </li>
                                        <li>
                                            <p>Vykdomi užsiėmimai</p>
                                        </li>
                                        <li>
                                            <p>Pažintinės kelionės po muziejų</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card-body">
                                <div class="card-header">Suaugusiems</div>
                                <div class="card-body">
                                    <ul class="list-unstyled text-small">
                                        <li>
                                            <p>Įėjimas nuo 8.00 iki 19.00</p>
                                        </li>
                                        <li>
                                            <p>Šventinės nuolaidos</p>
                                        </li>
                                        <li>
                                            <p>Nuolaidos perkant grupinius bilietus</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        </div>
@endsection
