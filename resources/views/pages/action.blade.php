{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title', __('locale.' . 'Add a record'))

@section('vendor-style')
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/select2/select2-materialize.css') }}">
@endsection

{{-- page style --}}
@section('page-style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/form-select2.css') }}">
@endsection

{{-- page content --}}
@section('content')

    <div class="card">
        <div class="card-content">
            <div class="row">
                <div class="input-field col s12">
                    <select>
                        <option value="" disabled selected>Vyberte kontinent</option>
                        @foreach ($continents as $row)
                            <option value="{{ $row->code }}">{{ __('locale.' . $row->name) }}</option>
                        @endforeach
                    </select>
                    <label>Kontinent</label>
                </div>
            </div>
        </div>
    </div>
@endsection
