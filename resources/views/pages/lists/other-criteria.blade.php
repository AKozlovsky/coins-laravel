{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title', __('locale.' . 'By other criteria'))

{{-- vendors styles --}}
@section('vendor-style')
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/data-tables/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css') }}">
@endsection

{{-- page styles --}}
@section('page-style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/page-continents.css') }}">
@endsection

{{-- page content --}}
@section('content')
    <section class="continents-list-wrapper section">
        <div class="continents-list-filter">
            <div class="card-panel">
                <div class="row">
                    <form>
                        <div class="col s12 m6 l3">
                            <label for="continents-list-select">{{ __('locale.Monarch') }}</label>
                            <div class="input-field">
                                <select class="form-control" id="continents-list-select">
                                    @foreach ($data['monarchs'] as $row)
                                        <option value="{{ $row->monarch }}">{{ $row->monarch }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col s12 m6 l3">
                            <label for="continents-list-select">{{ __('locale.Reign period from') }}</label>
                            <div class="input-field">
                                <select class="form-control" id="continents-list-select">
                                    @foreach ($data['reign_periods_from'] as $row)
                                        <option value="{{ $row->reign_period_from }}">{{ $row->reign_period_from }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col s12 m6 l3">
                            <label for="continents-list-select">{{ __('locale.Reign period to') }}</label>
                            <div class="input-field">
                                <select class="form-control" id="continents-list-select">
                                    @foreach ($data['reign_periods_to'] as $row)
                                        <option value="{{ $row->reign_period_to }}">{{ $row->reign_period_to }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col s12 m6 l3">
                            <label for="continents-list-select">{{ __('locale.Year of mintage') }}</label>
                            <div class="input-field">
                                <select class="form-control" id="continents-list-select">
                                    @foreach ($data['years_mintage'] as $row)
                                        <option value="{{ $row->year_mintage }}">{{ $row->year_mintage }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col s12 m6 l3">
                            <label for="continents-list-select">{{ __('locale.Name of currency') }}</label>
                            <div class="input-field">
                                <select class="form-control" id="continents-list-select">
                                    @foreach ($data['names_of_currency'] as $row)
                                        <option value="{{ $row->name }}">{{ $row->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col s12 m6 l3">
                            <label for="continents-list-select">{{ __('locale.Century') }}</label>
                            <div class="input-field">
                                <select class="form-control" id="continents-list-select">
                                    @foreach ($data['centuries'] as $row)
                                        <option value="{{ $row->century }}">{{ $row->century }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col s12 m6 l3">
                            <label for="continents-list-select">{{ __('locale.Metal') }}</label>
                            <div class="input-field">
                                <select class="form-control" id="continents-list-select">
                                    @foreach ($data['metals'] as $row)
                                        <option value="{{ $row->metal }}">{{ $row->metal }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col s12 m6 l3">
                            <label for="continents-list-select">{{ __('locale.Quality') }}</label>
                            <div class="input-field">
                                <select class="form-control" id="continents-list-select">
                                    @foreach ($data['qualities'] as $row)
                                        <option value="{{ $row->quality }}">{{ $row->quality }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- <div class="continents-list-table">
            <div class="card">
                <div class="card-content">
                    <!-- datatable start -->
                    <div class="responsive-table">
                        <table id="continents-list-datatable" class="table">
                            <thead>
                                <tr>
                                    @if ($continent != 'null')
                                        <th>{{ __('locale.Country') }}</th>
                                    @endif
                                    <th>{{ __('locale.Currency') }}</th>
                                    <th>{{ __('locale.Symbol') }}</th>
                                    <th>{{ __('locale.Value') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $row)
                                    <tr>
                                        @if ($continent != 'null')
                                            <th>{{ __('countries.' . $row->country) }}</th>
                                        @endif
                                        <td>{{ __('currencies.' . $row->currency) }}</td>
                                        <td>{{ $row->symbol }}</td>
                                        <td>{{ $row->value }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> --}}
    </section>
@endsection
