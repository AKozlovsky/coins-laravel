{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title', __('locale.' . 'By countries'))

{{-- page styles --}}
@section('page-style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/cards-basic.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/page-search.css') }}">
@endsection

{{-- page content --}}
@section('content')
    <div id="search-page" class="section">
        <div class="row">
            <div class="col s12">
                <div id="search-wrapper" class="search card z-depth-0 center-align">
                    <div class="card-content pb-0 pl-1 pr-1">
                        <div class="input-field col s12">
                            <h5>Vyhledávání státu</h5>
                            <input placeholder="Search" id="search_input" type="text"
                                class="search-box validate white search-circle" onkeyup="searchInput()">
                        </div>
                    </div>
                </div>

                <h6>Related to your search results (<span id="search-result">{{ count($countries) }}</span>)</h6>

                <div class="row">
                    @foreach ($countries as $country)
                        <div class="col s12 m6 divCountry" id="{{ $country->name }}">
                            <div class="card horizontal">
                                <div class="card-image" style="padding: 15px">
                                    <img class="modal-trigger"
                                        src="{{ asset('images/flags/' . strtolower($country->iso) . '.png') }}"
                                        alt="{{ strtolower($country->name) }} flag"
                                        href="#{{ strtolower($country->name) }}-flag" style="cursor: pointer" />
                                </div>
                                <div class="card-image" style="padding: 15px">
                                    <img class="modal-trigger"
                                        src="{{ asset('images/coats-of-arms/' . strtolower($country->iso) . '.png') }}"
                                        alt="{{ strtolower($country->name) }} of coat of arm"
                                        href="#{{ strtolower($country->name) }}-coat-of-arm" height="120"
                                        style="cursor: pointer" />
                                </div>
                                <div class="card-stacked">
                                    <div class="card-content">
                                        <span
                                            class="card-title activator grey-text text-darken-4">{{ __('countries.' . $country->official_name) }}
                                            <br>{{ $country->official_name }}<i
                                                class="material-icons right">more_vert</i>
                                        </span>
                                    </div>
                                    <div class="card-action">
                                        <a href="{{ url('list/null/' . strtolower($country->name)) }}">Zobrazit
                                            seznam</a>
                                    </div>
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4"><i
                                            class="material-icons right">close</i>
                                    </span>
                                    <p><a class="waves-effect waves-light btn modal-trigger mb-2 mr-1"
                                            href="#{{ strtolower($country->name) }}-map">Zobrazit
                                            mapu</a>
                                    </p>
                                    <p><a href="{{ $country->wikipedie_cz_url }}">Wikipedie</a></p>
                                    <p><a href="{{ $country->nationsonline_url }}">Nationsonline</a></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    @foreach ($countries as $country)
        <div id="{{ strtolower($country->name) }}-flag" class="modal modal-image">
            <div class="modal-content">
                <img src="{{ asset('images/flags/large/' . strtolower($country->iso) . '.png') }}"
                    alt="full image of the {{ strtolower($country->name) }} flag" />
            </div>
        </div>
        <div id="{{ strtolower($country->name) }}-coat-of-arm" class="modal modal-image">
            <div class="modal-content">
                <img src="{{ $country->coat_of_arm_url }}"
                    alt="full image of the {{ strtolower($country->name) }} of coat of arm" />
            </div>
        </div>
        <div id="{{ strtolower($country->name) }}-map" class="modal modal-image">
            <div class="modal-content">
                <img src="{{ $country->map_url }}" alt="full image of the {{ strtolower($country->name) }} of map" />
            </div>
        </div>
    @endforeach
@endsection

{{-- page scripts --}}
@section('page-script')
    <script src="{{ asset('js/scripts/advance-ui-modals.js') }}"></script>
    <script>
        function searchInput() {
            let input = document.getElementById('search_input').value.toLowerCase();
            let countries = document.getElementsByClassName('divCountry');
            let searchResult = 0;

            for (i = 0; i < countries.length; i++) {
                if (countries[i].id.toLowerCase().startsWith(input)) {
                    countries[i].style.display = 'block';
                    searchResult++;
                } else
                    countries[i].style.display = 'none';
            }

            document.getElementById('search-result').innerHTML = searchResult;
        }
    </script>
@endsection
