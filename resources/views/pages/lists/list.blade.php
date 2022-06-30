{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title', __('locale.' . 'By continents'))

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
        {{-- <div class="continents-list-filter">
            <div class="card-panel">
                <div class="row">
                    <form>
                        <div class="col s12 m6 l3">
                            <label for="continents-list-select">{{ __('locale.Continent') }}</label>
                            <div class="input-field">
                                <select class="form-control" id="continents-list-select">
                                    @foreach ($continents as $row)
                                        <option value="{{ __('locale.' . $row->name) }}">
                                            {{ __('locale.' . $row->name) }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> --}}
        <div class="continents-list-table">
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
        </div>
    </section>
@endsection

{{-- vendor scripts --}}
@section('vendor-script')
    <script src="{{ asset('vendors/data-tables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js') }}"></script>
@endsection

{{-- page script --}}
@section('page-script')
    <script src="{{ asset('js/scripts/page-continents.js') }}"></script>
@endsection
