{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title', __('locale.' . 'By continents'))

{{-- page styles --}}
@section('page-style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/cards-basic.css') }}">
@endsection

{{-- page content --}}
@section('content')
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <p class="caption mb-0">Klikněte na obrázek světadílu ke zobrazení seznamu položek.</p>
                    <br>
                    <p class="caption mb-0">Obrázky menší velikosti map pochází ze zdroje <a
                            href='https://www.freepik.com/vectors/travel'>Travel vector created by freepik -
                            www.freepik.com</a>.</p>
                    <br>
                    <p class="caption mb-0">Obrázky plné velikosti map pochází ze zdroje <a
                            href='https://www.nationsonline.org/'>https://www.nationsonline.org/</a>.</p>
                </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="{{ asset('images/continents/africa.jpg') }}" alt="Africa" />
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Afrika <i
                            class="material-icons right">more_vert</i>
                    </span>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i>
                    </span>
                    <p><a class="waves-effect waves-light btn modal-trigger mb-2 mr-1" href="#africa-map">Zobrazit mapu</a>
                    </p>
                    <p><a href="https://cs.wikipedia.org/wiki/Afrika">Wikipedie</a></p>
                    <p><a href="https://www.nationsonline.org/oneworld/africa.htm">Nationsonline</a></p>
                </div>
                <div class="card-action"><a href="{{ url('list/africa') }}">Zobrazit seznam</a></div>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="{{ asset('images/continents/asia.jpg') }}" alt="Asia" />
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Asie <i
                            class="material-icons right">more_vert</i>
                    </span>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i>
                    </span>
                    <p><a class="waves-effect waves-light btn modal-trigger mb-2 mr-1" href="#asia-map">Zobrazit mapu</a>
                    </p>
                    <p><a href="https://cs.wikipedia.org/wiki/Asie">Wikipedie</a></p>
                    <p><a href="https://www.nationsonline.org/oneworld/asia.htm">Nationsonline</a></p>
                </div>
                <div class="card-action"><a href="{{ url('list/asia') }}">Zobrazit seznam</a></div>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="{{ asset('images/continents/europe.jpg') }}" alt="Europe" />
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Evropa <i
                            class="material-icons right">more_vert</i>
                    </span>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i>
                    </span>
                    <p><a class="waves-effect waves-light btn modal-trigger mb-2 mr-1" href="#europe-map">Zobrazit mapu</a>
                    </p>
                    <p><a href="https://cs.wikipedia.org/wiki/Evropa">Wikipedie</a></p>
                    <p><a href="https://www.nationsonline.org/oneworld/europe.htm">Nationsonline</a></p>
                </div>
                <div class="card-action"><a href="{{ url('list/europe') }}">Zobrazit seznam</a></div>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="{{ asset('images/continents/north-south-america.jpg') }}"
                        alt="North America" />
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Severní Amerika <i
                            class="material-icons right">more_vert</i>
                    </span>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i>
                    </span>
                    <p><a class="waves-effect waves-light btn modal-trigger mb-2 mr-1" href="#north-america-map">Zobrazit
                            plnou mapu</a>
                    </p>
                    <p><a href="https://cs.wikipedia.org/wiki/Severn%C3%AD_Amerika">Wikipedie</a></p>
                    <p><a href="https://www.nationsonline.org/oneworld/america.htm#North-America">Nationsonline</a></p>
                </div>
                <div class="card-action"><a href="{{ url('list/north-america') }}">Zobrazit seznam</a></div>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light" style="height: 510px">
                    <img class="activator" src="{{ asset('images/continents/oceania.png') }}" alt="Oceania" />
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Oceánie <i
                            class="material-icons right">more_vert</i>
                    </span>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i>
                    </span>
                    <p><a class="waves-effect waves-light btn modal-trigger mb-2 mr-1" href="#oceania-map">Zobrazit mapu</a>
                    </p>
                    <p><a href="https://cs.wikipedia.org/wiki/Oce%C3%A1nie">Wikipedie</a></p>
                    <p><a href="https://www.nationsonline.org/oneworld/oceania.htm">Nationsonline</a></p>
                </div>
                <div class="card-action"><a href="{{ url('list/oceania') }}">Zobrazit seznam</a></div>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="{{ asset('images/continents/north-south-america.jpg') }}"
                        alt="South America" />
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Jižní Amerika <i
                            class="material-icons right">more_vert</i>
                    </span>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i>
                    </span>
                    <p><a class="waves-effect waves-light btn modal-trigger mb-2 mr-1" href="#south-america-map">Zobrazit
                            plnou mapu</a>
                    </p>
                    <p><a href="https://cs.wikipedia.org/wiki/Ji%C5%BEn%C3%AD_Amerika">Wikipedie</a></p>
                    <p><a href="https://www.nationsonline.org/oneworld/america.htm#South-America">Nationsonline</a></p>
                </div>
                <div class="card-action"><a href="{{ url('list/south-america') }}">Zobrazit seznam</a></div>
            </div>
        </div>
    </div>
    <div id="africa-map" class="modal modal-image">
        <div class="modal-content">
            <img src="https://www.nationsonline.org/maps/africa-political-map.jpg" alt="Africa" />
        </div>
    </div>
    <div id="asia-map" class="modal modal-image">
        <div class="modal-content">
            <img src="https://www.nationsonline.org/maps/asia-map-1200.jpg" alt="Asia" />
        </div>
    </div>
    <div id="europe-map" class="modal modal-image">
        <div class="modal-content">
            <img src="https://www.nationsonline.org/maps/countries_europe_map-L.jpg" alt="Europe" />
        </div>
    </div>
    <div id="north-america-map" class="modal modal-image">
        <div class="modal-content">
            <img src="https://www.nationsonline.org/maps/north-america-political-map.jpg" alt="North America" />
        </div>
    </div>
    <div id="oceania-map" class="modal modal-image">
        <div class="modal-content">
            <img src="https://www.nationsonline.org/maps/Oceania-Map.jpg" alt="Oceania" />
        </div>
    </div>
    <div id="south-america-map" class="modal modal-image">
        <div class="modal-content">
            <img src="https://www.nationsonline.org/maps/south-america-map.jpg" alt="South America" />
        </div>
    </div>
@endsection

{{-- page scripts --}}
@section('page-script')
    <script src="{{ asset('js/scripts/advance-ui-modals.js') }}"></script>
@endsection
